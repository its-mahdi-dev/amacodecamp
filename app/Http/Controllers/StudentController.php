<?php

namespace App\Http\Controllers;

use App\Constants\ResponseMessages;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\Bootcamp;
use App\Models\BootcampUser;
use App\Models\Review;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function get(Request $request)
    {
        return Response::success(new UserResource($request->user()));
    }

    public function update(UpdateUserRequest $request)
    {
        $user = User::findOrFail($request->user()->id);

        // Handle the avatar upload
        if ($request->hasFile('avatar') && $request->avatar != null) {
            // Delete the old avatar if it exists
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Create image from uploaded file
            $image = imagecreatefromstring(file_get_contents($request->file('avatar')->getRealPath()));

            // Resize the image to 150x150
            $newWidth = 150;
            $newHeight = 150;
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);

            // Preserve transparency for PNG images
            imagealphablending($resizedImage, false);
            imagesavealpha($resizedImage, true);

            list($width, $height) = getimagesize($request->file('avatar')->getRealPath());
            imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            // Define file path in storage
            $fileName = 'avatars/' . time() . '.jpg';
            $storagePath = storage_path('app/' . $fileName);

            // Make sure the directory exists
            if (!file_exists(dirname($storagePath))) {
                mkdir(dirname($storagePath), 0755, true);
            }

            // Save the resized image
            imagejpeg($resizedImage, $storagePath, 90);

            // Free memory
            imagedestroy($image);
            imagedestroy($resizedImage);

            // Update user avatar path
            $user->avatar = $fileName;
        }

        // Update the user's data
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'avatar' => $user->avatar ?? $user->avatar, // Keep the old avatar if no new one is uploaded
        ]);

        // Return a successful response
        return Response::success(public_path('uploads'));
    }

    public function add_wishlist(Request $request, $bootcamp_id)
    {
        $bootcamp = Bootcamp::findOrFail($bootcamp_id);
        $wish = Wishlist::where('user_id', $request->user()->id)->where('bootcamp_id', $bootcamp_id)->first();
        if ($wish != null) {
            $wish->forceDelete();
            return Response::success('', ResponseMessages::WISHLIST_DELETED);
        } else {
            Wishlist::create([
                "bootcamp_id" => $bootcamp_id,
                "user_id" => $request->user()->id
            ]);

            return Response::success('', ResponseMessages::WISHLIST_ADDED);
        }
    }


    public function submit_review($id, ReviewRequest $request)
    {

        $isSign = BootcampUser::where('user_id', $request->user()->id)->where('bootcamp_id', $id)->first();

        if ($isSign == null) {
            return REsponse::error(ResponseMessages::BOOTCAMP_NOT_SIGN);
        }
        Review::create([
            "bootcamp_id" => $id,
            "comment" => $request->comment,
            "rate" => $request->rate,
            "user_id" => $request->user()->id
        ]);


        return Response::success("", ResponseMessages::REVIEW_SUCCESS);
    }
}
