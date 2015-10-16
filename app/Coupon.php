<?php namespace THM;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {

	protected $fillable = ['owner', 'code'];

	/**
	 * Set current coupon to redeemed status
	 * @return boolean  True if success and vice versa
	 */
	public function redeem()
	{
		if (!$this->redeemed) {
			$this->redeemed = True;
			$this->save();
			return True;
		}
		return False;
	}

}
