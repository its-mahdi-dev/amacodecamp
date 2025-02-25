<?php

namespace App\Providers;

use App\Constants\ResponseMessages;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Response::macro('success', function ($data, $message = ResponseMessages::SUCCESS) {
            return response()->json([
                'status' => true,
                'message' => $message,
                'data' => $data
            ], 200);
        });

        Response::macro('error', function ($message = ResponseMessages::GENERAT_ERROR, $statusCode = 400 , $data = null) {
            return response()->json([
                'status' => false,
                'message' => $message,
                'data' => $data
            ], $statusCode);
        });

        Response::macro('notfound', function ($data = null) {
            return response()->json([
                'status' => false,
                'message' => ResponseMessages::NOT_FOUND,
                'data' => null
            ], 404);
        });

        Schema::defaultStringLength(191);
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
