<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'account'], function () {
    Route::post('/register', 'AccountController@register');
    Route::post('/login', 'AccountController@login');
    Route::post('/refreshToken', 'AccountController@refreshToken');
    Route::post('/logout', 'AccountController@logout');
});
