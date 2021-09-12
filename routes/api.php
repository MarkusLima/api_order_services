<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('login', 'Api\AuthController@getLogin')->name('login');
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', 'Api\AuthController@getInfoUser');
    Route::get('user_logout', 'Api\AuthController@logout');
});
