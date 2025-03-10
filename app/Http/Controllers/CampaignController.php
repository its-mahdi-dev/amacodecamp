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
        Campaign::create([
            "phone" => $request->phone
        ]);

        return Response::success("",ResponseMessages::CAMPAIGN_SUBMITED);
    }
}
