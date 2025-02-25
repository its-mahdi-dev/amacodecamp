<?php


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\StudentController;
use App\Models\Bootcamp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    // Check if the user is authenticated
    $user = $request->user();

    // If the user is authenticated, return the user; otherwise, return null with a 200 status
    return response()->json($user, 200);
})->middleware('auth:sanctum');

Route::post('/login/send', [AuthController::class, 'sendCode']);
Route::post('/login/validate', [AuthController::class, 'validateCode']);
Route::controller(BootcampController::class)->prefix('/bootcamps')->group(function(){
    Route::get('/' , 'index');
    Route::get('/{slug}','show');
});

Route::prefix('/student')->middleware('auth:sanctum')->group(function () {

    Route::controller(BootcampController::class)->prefix('/bootcamps')->group(function(){
        Route::get('/', 'get_student_bootcamps');
        Route::get('/license/{bootcamp_id}', 'get_bootcamp_license');
    });

    Route::controller(StudentController::class)->group(function(){
        Route::get('/me' , 'get');
        Route::post('/update' , 'update');
        Route::put('/wishlist/{bootcamp_id}' , 'add_wishlist');
    });
});
