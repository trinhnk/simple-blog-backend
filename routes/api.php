<?php

// use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
// });

Route::post('register', 'AuthController@register')->name('register');
Route::post('login', 'AuthController@login')->name('login');
Route::get('/user', 'AuthController@user');
Route::post('logout', 'AuthController@logout');