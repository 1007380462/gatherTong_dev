<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 引导用户到新浪微博的登录授权页面
Route::get('auth/weibo', 'Auth\AuthController@weibo');
// 用户授权后新浪微博回调的页面
Route::get('auth/callback', 'Auth\AuthController@callback');

Route::get('auth/qq', 'Auth\AuthController@qq');
Route::get('auth/callback', 'Auth\AuthController@callback');

Route::get('auth/linkedin', 'Auth\AuthController@linkedin');
Route::get('auth/callback', 'Auth\AuthController@callback');

Route::get('auth/gitlab', 'Auth\AuthController@gitlab');
Route::get('auth/callback', 'Auth\AuthController@callback');


Route::get('/', function () {
    return view('welcome');
});

