<?php

namespace THM\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DiscountCoupon extends Mailable
{
    use Queueable, SerializesModels;

    public $coupon;
    public $owner;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $code, string $owner)
    {
        $this->coupon = $code;
        $this->owner = $owner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Discount coupon for Thai Massage')->view('emails.coupon');
    }
}
