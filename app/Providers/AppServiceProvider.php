<?php

namespace App\Providers;

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

        Response::macro('success', function ($data, $message = 'Request successful') {
            return response()->json([
                'status' => true,
                'message' => $message,
                'data' => $data
            ], 200);
        });

        Response::macro('error', function ($message = 'An error occurred', $statusCode = 400 , $data = null) {
            return response()->json([
                'status' => false,
                'message' => $message,
                'data' => $data
            ], $statusCode);
        });

        Schema::defaultStringLength(191);
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
