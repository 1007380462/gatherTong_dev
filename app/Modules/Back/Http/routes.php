<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'back'], function() {
	/*Route::controller('/activity','Activity');
	Route::controller('/organization','Organization');
	Route::controller('/person','PersonController');
	Route::controller('/','IndexController');*/

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'back', 'middleware' => ['auth']], function () {
	Route::controller('/activity','ActivityController');
	Route::controller('/organization','OrganizationController');
	Route::controller('/person','PersonController');
	Route::controller('/','IndexController');
});
