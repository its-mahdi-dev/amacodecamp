<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Http\Requests\CampainSubmitRequest;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CampaignController extends Controller
{

    public function submit(CampainSubmitRequest $request)
    {
        $campaign = Campaign::where('phone' , $request->phone)->first();
        if($campaign != null){
            return Response::error(ResponseMessages::CAMPAIGN_EXISTED);
        }
        Campaign::create([
            "phone" => $request->phone,
            "name" => $request->name,
            "ip_address" => $request->ip(),
            "user_agent" => $request->header('User-Agent')
        ]);

        return Response::success("",ResponseMessages::CAMPAIGN_SUBMITED);
    }
}
