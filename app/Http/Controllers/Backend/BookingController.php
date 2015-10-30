<?php namespace THM\Http\Controllers\Backend;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;

use Illuminate\Http\Request;
use THM\Booking;

class BookingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		switch ($request->get('filter', 0)) {
			case 0:
				$bookings = Booking::all();
				break;

			case 1:
				$bookings = Booking::today()->get();
				break;

			case 2:
				$bookings = Booking::tomorrow()->get();
				break;

			case 3:
				$bookings = Booking::thisMonth()->get();
				break;
		}

		$data = [
			'page_title'    => 'Booking Management',
			'page_subtitle' => 'All Booking',
			'bookings'      => $bookings
		];
		return view('backend.booking', $data);
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
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$booking = Booking::findOrFail($id);
		$data = [
			'page_title'    => 'Booking Management',
			'page_subtitle' => 'Booking Detail',
			'booking' => $booking
		];
		return view('backend.booking-show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = [
			'page_title'    => 'Booking Management',
			'page_subtitle' => 'Edit a booking',
			'booking'       => Booking::findOrFail($id),
			'treatments'    => \THM\Treatment::all()
		];
		return view('backend.booking-edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$booking = Booking::findOrFail($id);
		$booking->customer_firstname = $request->customer_firstname;
		$booking->customer_lastname = $request->customer_lastname;
		$booking->phone = $request->phone;
		$booking->email = $request->email;
		$booking->booked_time = $request->booked_time;
		$booking->guests = $request->guests;
		$booking->treatment_id = $request->treatment;
		$booking->timeslots = $request->duration;
		$booking->save();
		return redirect(route('backend.booking.show', $id));
	}

	public function setStatus(Request $request, $id)
	{
		$booking = Booking::findOrFail($id);
		$booking->status = $request->status;
		$booking->save();
		return redirect(route('backend.booking.show', $id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
