<?php namespace THM\Http\Controllers;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;
use Validator;
use Omnipay\Omnipay;
use THM\Treatment;
use THM\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller {

	protected $gateway;

	public function __construct() {
		$gateway = Omnipay::create('PayPal_Express');
		$gateway->setUsername('ton1996.s-facilitator_api1.gmail.com');
		$gateway->setPassword('8888X6BF3C2UFLEA');
		$gateway->setSignature('A.YUqKtpZKKu8dHb7qfrv7-thqHkA0XdDLcPbToSSPETdZypI2qbVgIC');
		$gateway->setTestMode(true);

		$this->gateway = $gateway;
	}

	public function process(Request $requests)
	{
		$validator = Validator::make($requests->all(), [
			'booking.date'      => 'required|not_in:0',
			'booking.time'      => 'required|integer|not_in:0|min:10|max:18',
			'booking.treatment' => 'required|integer',
			'booking.duration'  => 'required|integer|in:60,90',
			'booking.guests'    => 'required|integer|min:1|max:2',
			'client.firstname'  => 'required',
			'client.lastname'   => 'required',
			'client.phone'      => 'required',
			'client.email'      => 'required|email'
		]);

		$attributes_name = [
			'booking.date'      => 'Date',
			'booking.treatment' => 'Treatment',
			'booking.time'      => 'Time',
			'booking.duration'  => 'Duration',
			'booking.guests'    => 'Guests',
			'client.firstname'  => 'First Name',
			'client.lastname'   => 'Last Name',
			'client.phone'      => 'Phone',
			'client.email'      => 'Email'
		];

		$validator->setAttributeNames($attributes_name);
		if ($validator->fails()) {
			return redirect('/')->withErrors($validator)->withInput();
		}

		$treatment = Treatment::findOrfail($requests->booking['treatment']);
		$order_price = $treatment->time[$requests->booking['duration']];
		if ($requests->booking['guests'] == 2) {
			if ($requests->booking['duration'] == 60) {
				$order_price = 140;
			} else {
				$order_price = 190;
			}
		}

		$order_description = $treatment->title." (".$requests->booking['duration']." mins)";
		$order = [
			'amount'      => (float) $order_price,
			'currency'    => 'USD',
			'description' => $order_description,
			'returnUrl'   => route('booking.complete'),
			'cancelUrl'   => route('booking.cancel'),
			'noShipping'  => 1,
			'allowNote'   => 0,
			'client'      => $requests->client,
			'booking'     => $requests->booking
		];

		session()->put('order', $order);
		session()->save();

		$response = $this->gateway->authorize($order)->send();

		if ($response->isRedirect()) {
		    $response->redirect();
		} else {
		    echo $response->getMessage();
		}
	}

	public function complete(Request $requests)
	{
		$transaction = $this->gateway->fetchCheckout($requests->all())->send()->getData();
		$response = $this->gateway->completePurchase(['amount' => $transaction['AMT']])->send();

		if($response->isSuccessful()) {
			$order = (object) session()->get('order');

			$booked_time = \Carbon\Carbon::createFromFormat('Y-m-d', $order->booking['date']);
			$booked_time->setTime($order->booking['time'], 0, 0);

			$booking = new Booking();
			$booking->customer_firstname = $order->client['firstname'];
			$booking->customer_lastname = $order->client['lastname'];
			$booking->email = $order->client['email'];
			$booking->phone = $order->client['phone'];
			$booking->guests = $order->booking['guests'];
			$booking->booked_time = $booked_time;
			$booking->timeslots = ceil($order->booking['duration'] / 60);
			$booking->treatment_id = $order->booking['treatment'];
			$booking->total = $order->amount;
			$booking->transaction_id = $response->getData()['PAYMENTINFO_0_TRANSACTIONID'];
			$booking->save();

			dd('Done');
		} else {
			dd($response);
		}

	}

	public function generateTimeslot(Request $requests)
	{
		return response()->json(Booking::generateTimeslot(\Carbon\Carbon::createFromFormat('Y-m-d', $requests->date)));
	}

	public function getTreatmentPrice(Request $requests)
	{
		return response()->json(Treatment::findOrFail($requests->id)->time[$requests->duration]);
	}

}
