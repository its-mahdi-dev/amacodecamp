<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Models\Bootcamp;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use function Laravel\Prompts\error;

class PaymentController extends Controller
{
    public function send($id, Request $request)
    {

        $bootcamp = Bootcamp::findOrFail($id);
        $user = $request->user();

        $response = zarinpal()
            ->merchantId(env('ZARINPAL_MERCHANT_ID'))
            ->amount($bootcamp->price) // مبلغ تراکنش
            ->request()
            ->description('transaction info') // توضیحات تراکنش
            ->callbackUrl(env('APP_URL', 'http://localhost:8000') . "/bootcamps/" . $bootcamp->id) // آدرس برگشت پس از پرداخت
            ->mobile($user->phone) // شماره موبایل مشتری - اختیاری
            ->email($user->email ?? "") // ایمیل مشتری - اختیاری
            ->send();


        if (!$response->success()) {
            return Response::error($response->error(), 400);
        }

        $payment = Payment::create([
            'user_id' => $user->id,
            'bootcamp_id' => $bootcamp->id,
            'amount' => $bootcamp->price,
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
            return Response::error($response->error()->code() , 400);
        }

        $payment->update([
            'referenceId' => $response->referenceId(),
            'status' => 'paid',
        ]);

        return Response::success($response->referenceId());
    }
}
