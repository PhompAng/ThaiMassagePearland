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

Route::get('/', 'HomeController@index');

Route::resource('backend/dashboard', 'DashboardController');
Route::resource('backend/coupon', 'CouponController');
Route::patch('backend/coupon/{coupon}/redeem', ['uses' => 'CouponController@redeem', 'as' => 'coupon.redeem']);
Route::post('coupon', 'CouponController@store');

Route::controllers([
	'backend/auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
]);
