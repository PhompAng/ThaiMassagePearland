<?php namespace THM\Http\Controllers;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;
use THM\Coupon;
use THM\Http\Requests\CouponFormRequest;
use Mail;

use Illuminate\Http\Request;
use THM\Mail\DiscountCpupon;

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

        Mail::to($input->get('owner'))->send(new DiscountCpupon($code, $input->get('owner')));
        return Coupon::create($data);
    }

}
