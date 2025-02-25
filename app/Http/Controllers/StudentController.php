<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
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
}
