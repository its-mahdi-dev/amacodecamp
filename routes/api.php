<?php


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BootcampController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login/send', [AuthController::class, 'sendCode']);
Route::post('/login/validate', [AuthController::class, 'validateCode']);


Route::get('/bootcamps' , [BootcampController::class , 'index']);
