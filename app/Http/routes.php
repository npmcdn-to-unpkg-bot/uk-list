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

//Page Routes
Route::get('/', 'PagesController@homepage');
Route::get('/login', 'PagesController@loginpage');

//Authentication Routes
Route::group(['prefix' => 'auth'], function(){

    Route::post('/register', 'AuthController@register');

});