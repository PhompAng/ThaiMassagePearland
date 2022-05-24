<?php namespace THM\Http\Controllers\Auth;

use THM\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use THM\Http\Requests\LoginRequest;
use Request;
use Auth;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Override postLogin of AuthenticatesAndRegistersUsers traits
	 * 
	 * @param  THM\Http\Requests\LoginRequest	 $request
	 * @return redirect
	 */
	public function postLogin(LoginRequest $request)
	{
		$credentials = [
			'username' => Request::input('username'),
			'password' => Request::input('password')
		];
		if (Auth::attempt($credentials, Request::input('remember')))
			return redirect()->intended('/backend/dashboard');
		else
			return redirect()->to('/backend/auth/login')->withErrors('Check your credentials!');
	}

}
