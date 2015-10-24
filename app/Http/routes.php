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
Route::resource('backend/booking', 'BookingController');
Route::resource('backend/setting', 'SettingController');

Route::patch('backend/coupon/{coupon}/redeem', ['uses' => 'CouponController@redeem', 'as' => 'coupon.redeem']);
Route::post('coupon', 'CouponController@store');

Route::post('booking/process', ['uses' => 'BookingController@process', 'as' => 'booking.process']);
Route::get('booking/complete', ['uses' => 'BookingController@complete', 'as' => 'booking.complete']);
Route::get('booking/cancel', ['uses' => 'BookingController@cancel', 'as' => 'booking.cancel']);
Route::get('booking/ajax/timeslot', ['uses' => 'BookingController@generateTimeslot', 'as' => 'booking.ajax.timeslot']);
Route::get('booking/ajax/getTreatmentPrice', ['uses' => 'BookingController@getTreatmentPrice', 'as' => 'booking.ajax.getTreatmentPrice']);

Route::controllers([
	'backend/auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
]);
