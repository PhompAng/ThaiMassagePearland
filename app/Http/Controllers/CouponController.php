<?php namespace THM\Http\Controllers;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;
use Response;
use THM\Coupon;
use THM\Http\Requests\CouponFormRequest;
use Mail;

use Illuminate\Http\Request;

class CouponController extends Controller {

	function __construct() {
		$this->middleware('auth', ['except' => ['store']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'page_title'    => 'Coupon Management',
			'page_subtitle' => 'All Coupon',
			'coupons' => Coupon::all()
		];
		
		return view('backend.coupon', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CouponFormRequest $request, Request $input)
	{
		while (True) {
			$code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
			if (!Coupon::whereCode($code)->count()) {
				break;
			}
		}

		$data = [
			'owner' => $input->get('owner'),
			'code'  => $code
		];

		Mail::send('emails.coupon', ['coupon' => $code, 'email' => $input->get('owner')], function($message) use ($input)
		{
	    $message->from('no-reply@thaimassagepearland.com', 'Thai Hands Massage Therapy');
	    $message->to($input->get('owner'));
	    $message->subject('Discount coupon for Thai Massage');
		});
		return Coupon::create($data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Coupon::findOrFail($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CouponFormRequest $request, Request $input, $id)
	{
		if(Coupon::findOrFail($id)->fill($input->all())->save()) {
			return Response::json(['status' => '1']);
		}
		return Response::json(['status' => '0']);
	}

	/**
	 * Redeem a given coupon
	 * @param  int  $id
	 * @return Response
	 */
	public function redeem($id)
	{
		if (Coupon::findOrFail($id)->redeem()) {
			return Response::json(['id' => $id, 'status' => '1', 'owner' => Coupon::find($id)->owner]);
		}
		return Response::json(['id' => $id, 'status' => '0']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Coupon::findOrFail($id)->delete()) {
			return Response::json(['status' => '1']);
		}
	}

}
