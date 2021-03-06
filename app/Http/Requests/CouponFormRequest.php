<?php namespace THM\Http\Requests;

use THM\Http\Requests\Request;

class CouponFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return True;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'owner' => 'required|email|unique:coupons'
		];
	}

}
