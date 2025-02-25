<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\Bootcamp;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class StudentController extends Controller
{
    public function get(Request $request)
    {
        return Response::success(new UserResource($request->user()));
    }

    public function update(UpdateUserRequest $request)
    {
        // Find the user by ID
        $user = User::findOrFail($request->user()->id);

        // Update the user's data
        $user->update($request->validated());

        // Return a successful response
        return Response::success(new UserResource($user));
    }

    public function add_wishlist(Request $request, $bootcamp_id)
    {
        $bootcamp = Bootcamp::findOrFail($bootcamp_id);
        $wish = Wishlist::where('user_id', $request->user()->id)->where('bootcamp_id', $bootcamp_id)->first();
        if ($wish != null){
            $wish->forceDelete();
            return Response::success('' , ResponseMessages::WISHLIST_DELETED);
        }else {
            Wishlist::create([
                "bootcamp_id" => $bootcamp_id,
                "user_id" => $request->user()->id
            ]);
            
            return Response::success('' , ResponseMessages::WISHLIST_ADDED);
        }

    }
}
