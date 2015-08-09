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

Route::get('/', 'HomeController@showIndex');

// authentication routes
Route::get('/signup', array('as' => 'signup', 'uses' => 'Auth\AuthController@getRegister'));
Route::post('/signup', array('as' => 'signup', 'uses' => 'Auth\AuthController@postRegister'));
Route::get('/login', array('as' => 'login', 'uses' => 'Auth\AuthController@getLoginWrapper'));
Route::post('/login', array('as' => 'login', 'uses' => 'Auth\AuthController@postLoginWrapper'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogoutWrapper'));
Route::get('/forgot', array('as' => 'forgot', 'uses' => 'Auth\PasswordController@getEmail'));
Route::post('/forgot', array('as' => 'forgot', 'uses' => 'Auth\PasswordController@postEmail'));
Route::get('/password/reset/{token}', array('as' => 'forgot', 'uses' => 'Auth\PasswordController@getReset'));
Route::post('/password/reset', array('as' => 'forgot', 'uses' => 'Auth\PasswordController@postReset'));
Route::get('/user/confirm/{code}', 'UserController@confirm');

// profile completion routes
Route::group(['middleware' => 'auth'], function() {
	Route::get('/profile-complete/picture','UserController@setPicture');
	Route::Post('/profile-complete/picture','UserController@processPicture');
	Route::get('/profile-complete/about','UserController@setAbout');
	Route::Post('/profile-complete/about','UserController@processAbout');
	Route::get('/profile-complete/contact','UserController@setContact');
	Route::Post('/profile-complete/contact','UserController@processContact');
	Route::get('/profile-complete/preview','UserController@setPreview');
});

//items related routes
Route::get('/place-ad','ItemController@newAd');
Route::get('/place-product','ItemController@newProduct');
Route::get('/place-auction','ItemController@newAuction');

// admin routes
Route::group(['prefix' => 'admin'], function() {
	Route::get('/login', array('as' => 'login', 'uses' => 'Admin\Auth\AuthController@getLoginWrapper'));
	Route::post('/login', array('as' => 'login', 'uses' => 'Admin\Auth\AuthController@postLoginWrapper'));
		
	// Matches The "/admin/users"
	if (Utils::isAdmin()) {
	    Route::resource('users', 'Admin\UserController');
	}
});

