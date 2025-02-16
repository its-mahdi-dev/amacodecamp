<?php

use Illuminate\Support\Facades\Route;
// dd(env('MAIN_DOMAIN','localhost'));
// dd(env('DASHBOARD_DOMAIN','localhost'));

Route::domain(env('MAIN_DOMAIN', 'localhost'))->group(function () {
    Route::get('/', function () {
        return view('main.home');
    })->name('home');

    Route::get('/blogs', function () {
        return view('main.blogs.index');
    })->name('blogs.index');

    Route::get('/blogs/{id}', function ($id) {
        return view('main.blogs.show', compact('id'));
    })->whereNumber('id')->name('blogs.show');

    Route::get('/bootcamps', function () {
        return view('main.bootcamps.index');
    })->name('bootcamps.index');

    Route::get('/bootcamps/{id}', function ($id) {
        return view('main.bootcamps.show', compact('id'));
    })->whereNumber('id')->name('bootcamps.show');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});

Route::domain(env('DASHBOARD_DOMAIN', 'localhost'))->middleware(['auth'])->group(function () {
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