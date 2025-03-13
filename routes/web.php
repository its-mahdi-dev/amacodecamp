<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
// die(env('MAIN_DOMAIN','localhost'));
// die(env('DASHBOARD_DOMAIN','localhost'));


Route::domain(env('MAIN_DOMAIN', 'localhost'))->group(function () {
    Route::get('/', function () {
        return view('main.home');
    })->name('home');
    Route::get('/basket', function () {
        return view('main.basket');
    })->name('basket');
    Route::get('/blogs', function () {
        return view('main.blogs.index');
    })->name('blogs.index');

    Route::get('/blogs/{id}', function ($id) {
        return view('main.blogs.show', compact('id'));
    })->name('blogs.show');

    Route::get('/bootcamps', function () {
        return view('main.bootcamps.index');
    })->name('bootcamps.index');

    Route::get('/bootcamps/{slug}', function ($slug) {
        return view('main.bootcamps.show', compact('slug'));
    })->name('bootcamps.show');

    Route::get('/bootcamps2/{slug}', function ($slug) {
        return view('main.bootcamps.show2', compact('slug'));
    })->name('bootcamps.show2');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});


Route::prefix('/dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('dashboard.home');

    Route::get('/profile', function () {
        return view('dashboard.profile');
    })->name('dashboard.profile');

    Route::get('/bootcamps', function () {
        return view('dashboard.bootcamps');
    })->name('dashboard.bootcamps');
});


Route::get('/testi' , function(){
    return "ysa";
})->middleware(['auth:sanctum']);