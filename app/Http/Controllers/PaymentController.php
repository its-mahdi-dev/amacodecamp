<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Http\Requests\PaymentSendRequest;
use App\Http\Resources\CheckCuponResource;
use App\Models\Basket;
use App\Models\Bootcamp;
use App\Models\BootcampUser;
use App\Models\Cupon;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use function Laravel\Prompts\error;
use function PHPUnit\Framework\returnSelf;

class PaymentController extends Controller
{
    public function send(PaymentSendRequest $request)
    {

        $slugs = explode("," , $request->slugs);
        $total_price = 0;
        $bootcams_id = [];
        foreach($slugs as $s){
            $bootcamp = Bootcamp::where("slug" , $s)->first();
            if($bootcamp == null) return Response::error(ResponseMessages::NOT_FOUND , 400);
            if($bootcamp->capacity <= 0) return Response::error(ResponseMessages::BOOTCAMP_CAPACITY_FULL , 400);
            $total_price += $bootcamp->getPrice();
            array_push($bootcams_id , $bootcamp->id);
        }

        $cupon = Cupon::where('code' , $request->cupon)->first();
        if($request->cupon){
            $cupon_check = $this->checkCuponLogic($cupon);
            if(!$cupon_check){
                return Response::error(ResponseMessages::CUPON_NOT_VALID);
            }
            if($cupon->min_pay < $total_price) {
                return Response::error((new ResponseMessages())->ERR_MIN_PAY_CUPON($cupon->min_pay));
            }
            if($cupon_check["type"] == "price"){
                $total_price -= $cupon_check["value"];
            }else{
                $total_price = $total_price * (100 - $cupon_check["value"]);
            }
            $cupon->update([
                "amount" => $cupon->amount -1
            ]);
        }
        
        $user = $request->user();

        $basket =Basket::create([
            "user_id" => $user->id,
            "bootcamps_id" => $bootcams_id,
            "total_price" => $total_price,
            "cupon_id" => $cupon ? $cupon->id : null,
            "quantity" => 1
        ]);

        $response = zarinpal()
            ->merchantId(env('ZARINPAL_MERCHANT_ID'))
            ->amount($total_price) // مبلغ تراکنش
            ->request()
            ->description("buy for id: {$user->id}") // توضیحات تراکنش
            ->callbackUrl(env('APP_URL', 'http://localhost:8000') . "/dashboard/payment") // آدرس برگشت پس از پرداخت
            ->mobile($user->phone) // شماره موبایل مشتری - اختیاری
            ->email($user->email ?? "") // ایمیل مشتری - اختیاری
            ->send();


        if (!$response->success()) {
            return Response::error($response->error(), 400);
        }

        $payment = Payment::create([
            'user_id' => $user->id,
            'basket_id' => $basket->id,
            'amount' => $total_price,
            'authority' => $response->authority(),
            'status' => 'pending',
        ]);

        
        $redirectUrl = "https://www.zarinpal.com/pg/StartPay/".$response->authority();
        return Response::success($redirectUrl);
    }

    public function verify(Request $request) 
    {

        $authority = $request->query('Authority');
        $status = $request->query('Status');

        $payment = Payment::where('authority', $authority)->first();

        if (!$payment) {
            return Response::notfound(ResponseMessages::PAYMENT_NOT_FOUND);
        }

        if ($status !== 'OK') {
            $payment->update(['status' => 'failed']);
            return Response::error(ResponseMessages::PAYMENT_FAILED , 400);
        }

        $response = zarinpal()
            ->merchantId(env('ZARINPAL_MERCHANT_ID'))
            ->amount($payment->amount)
            ->verification()
            ->authority($authority)
            ->send();

        if (!$response->success()) {
            $payment->update(['status' => 'failed']);
            return Response::error($response->error()->message() , 400);
        }

        $payment->update([
            'referenceId' => $response->referenceId(),
            'cardPan' => $response->cardPan(),
            'status' => 'paid',
        ]);
        foreach($payment->basket->bootcamps_id as $b){
            BootcampUser::create([
                "user_id" => $request->user()->id,
                "bootcamp_id" => $b
            ]);
            $bootcamp = Bootcamp::find($b);
            $bootcamp->update([
                "capacity" => $bootcamp->capacity - 1
            ]);
            if($bootcamp->off != null){
                if($bootcamp->off->amount != null){
                    $bootcamp->off->update([
                        "amount" =>$bootcamp->off->amount -1
                    ]);
                }
            }
        }

        $cupon = $payment->basket->cupon;
        if($cupon != null){
            if($cupon->amount != null){
                $cupon->update([
                    "amount" => $cupon->amount -1
                ]);
            }
        }

        return Response::success($response->referenceId());
    }


    public function checkCupon($code)
    {
        
        $cupon = Cupon::whereRaw('BINARY `code` = ?', [$code])->first();
        $response = $this->checkCuponLogic($cupon);
        if($response){
            $response["description"] = $cupon->description;
            return Response::success(new CheckCuponResource($response), ResponseMessages::CUPON_VALID);
        }else{
            return Response::error(ResponseMessages::CUPON_NOT_VALID);
        }

    }


    public function checkCuponLogic($cupon){
        $errorResponse = false;
        if($cupon == null) return $errorResponse;

        if($cupon->amount != null){
            if($cupon->amount <= 0) return $errorResponse;
        }

        if($cupon->start_ttime && $cupon->end_time){
            if ($cupon->start_time < now() || $cupon->end_time > now()) return $errorResponse;
        }

        if($cupon->price != null){
            $response = [
                "type" => "price",
                "value" => $cupon->price,
            ];
        }else{

            $response =[
                "type" => "percent",
                "value" => $cupon->percent
            ];
        }


        return $response;
    }
}
