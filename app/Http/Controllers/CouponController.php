<?php namespace THM\Http\Controllers;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;
use THM\Coupon;
use THM\Http\Requests\CouponFormRequest;
use Mail;

use Illuminate\Http\Request;

class CouponController extends Controller {

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

}
