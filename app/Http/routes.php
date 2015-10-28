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

Route::post('booking/process', ['uses' => 'BookingController@process', 'as' => 'booking.process']);
Route::get('booking/complete', ['uses' => 'BookingController@complete', 'as' => 'booking.complete']);
Route::get('booking/cancel', ['uses' => 'BookingController@cancel', 'as' => 'booking.cancel']);
Route::get('booking/ajax/timeslot', ['uses' => 'BookingController@generateTimeslot', 'as' => 'booking.ajax.timeslot']);
Route::get('booking/ajax/getTreatmentPrice', ['uses' => 'BookingController@getTreatmentPrice', 'as' => 'booking.ajax.getTreatmentPrice']);

Route::controllers([
	'backend/auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function() {
    Route::resource('backend/coupon', 'Backend\CouponController');
    Route::patch('backend/coupon/{coupon}/redeem', ['uses' => 'Backend\CouponController@redeem', 'as' => 'coupon.redeem']);
    Route::resource('backend/booking', 'Backend\BookingController');
    Route::resource('backend/setting', 'Backend\SettingController');
    Route::resource('backend', 'Backend\DashboardController');
});

// Route::post('/coupon', 'CouponController@store');