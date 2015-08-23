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
Route::get ( '/forgot', array (
		'as' => 'forgot',
		'uses' => 'Auth\PasswordController@getEmail' 
) );
Route::post ( '/forgot', array (
		'as' => 'forgot',
		'uses' => 'Auth\PasswordController@postEmail' 
) );
Route::get ( '/password/reset/{token}', array (
		'as' => 'forgot',
		'uses' => 'Auth\PasswordController@getReset' 
) );
Route::post ( '/password/reset', array (
		'as' => 'forgot',
		'uses' => 'Auth\PasswordController@postReset' 
) );
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
Route::get ( '/industry', array (
		'as' => 'companies',
		'uses' => 'CompanyController@showIndex' 
) );
Route::get ( '/buyers', array (
		'as' => 'buyers',
		'uses' => 'BuyLeadController@showIndex'
) );
// items related routes
Route::get ( '/product', array (
		'as' => 'products',
		'uses' => 'ProductController@showIndex' 
) );
Route::get ( '/product/new', 'ProductController@getNew' );
Route::post ( '/product/new', 'ProductController@postNew' );
Route::get ( '/buy-lead/new', 'BuyLeadController@getNew' );
Route::post ( '/buy-lead/new', 'BuyLeadController@postNew' );

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
