<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get ( '/', 'HomeController@showIndex' );

// authentication routes
Route::get ( '/register', array (
		'as' => 'register',
		'uses' => 'Auth\AuthController@getRegister' 
) );
Route::post ( '/register', array (
		'as' => 'register',
		'uses' => 'Auth\AuthController@postRegister' 
) );
Route::get ( '/login', array (
		'as' => 'login',
		'uses' => 'Auth\AuthController@getLogin' 
) );
Route::post ( '/login', array (
		'as' => 'login',
		'uses' => 'Auth\AuthController@postLogin' 
) );
Route::get ( '/logout', array (
		'as' => 'logout',
		'uses' => 'Auth\AuthController@getLogoutWrapper' 
) );
Route::get ( '/password/email', array (
		'as' => 'password_email_req',
		'uses' => 'Auth\PasswordController@getEmail' 
) );
Route::post ( '/password/email', array (
		'as' => 'password_email_req',
		'uses' => 'Auth\PasswordController@postEmail' 
) );
Route::get ( '/password/reset/{token}', array (
		'uses' => 'Auth\PasswordController@getReset'
) );
Route::post ( '/password/reset', array (
		'uses' => 'Auth\PasswordController@postReset'
));
Route::get ( '/user/confirm/{code}', 'UserController@confirm' );

// profile completion routes
Route::group ( [ 
		'middleware' => 'auth' 
], function () {
	Route::get ( '/profile-complete/picture', 'ProfileController@getPicture' );
	Route::Post ( '/profile-complete/picture', 'ProfileController@postPicture' );
	Route::get ( '/profile-complete/about', 'ProfileController@getAbout' );
	Route::Post ( '/profile-complete/about', 'ProfileController@postAbout' );
	Route::get ( '/profile-complete/contact', 'ProfileController@getContact' );
	Route::Post ( '/profile-complete/contact', 'ProfileController@postContact' );
	Route::get ( '/profile-complete/preview', 'ProfileController@getPreview' );
} );
// public routes

Route::get ( '/buyers', array (
		'as' => 'buyers',
		'uses' => 'BuyerController@getIndex'
) );

Route::get ( '/products', array (
		'as' => 'products',
		'uses' => 'IndustryController@showProductIndex' 
) );

Route::get ( '/indsutries', array (
		'as' => 'industries',
		'uses' => 'IndustryController@showIndex' 
) );

// items related routes

Route::get ( '/product/new', 'IndustryController@getNewProduct' );
Route::post ( '/product/new', 'IndustryController@postNewProduct' );
Route::get ( '/buy-lead/new', 'BuyerController@getNew' );
Route::post ( '/buy-lead/new', 'BuyerController@postNew' );

// admin routes
Route::group ( [ 
		'prefix' => 'admin' 
], function () {
	Route::get ( '/login', array (
			'as' => 'login',
			'uses' => 'Admin\Auth\AuthController@getLoginWrapper' 
	) );
	Route::post ( '/login', array (
			'as' => 'login',
			'uses' => 'Admin\Auth\AuthController@postLoginWrapper' 
	) );
	
	// Matches The "/admin/users"
	if (Utils::isAdmin ()) {
		Route::resource ( 'users', 'Admin\UserController' );
	}
} );

// global variables
define ('APP_NAME', 'Exporters Hub');
define ('APP_DEV_COMP', 'codeflow ltd.');
define ('APP_URL_NAME', 'exportershub.com');
define ( 'SITE_URL', Config::get ( 'app.url' ) );
define ( 'AUCTIONZOO_VERSION', '1.0.0' );
define ( 'CONTACT_EMAIL', 'auctionzoo@gmail.com' );
define ( 'APP_WEB_URL', 'http://localhost:8000' );
define ('DIAL_NUMBER', '+91-11-45679604');
