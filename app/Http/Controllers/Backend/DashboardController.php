<?php namespace THM\Http\Controllers\Backend;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;

use Illuminate\Http\Request;
use THM\Booking;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'page_title'    => 'Dashboard',
			'page_subtitle' => 'Overview',
			'today_bookings' => Booking::today()->orderBy('booked_time', 'ASC')->get(),
			'today_unused' => Booking::today()->unused()->count(),
			'today_used' => Booking::today()->used()->count(),
			'tomorrow_bookings' => Booking::tomorrow()->orderBy('booked_time', 'ASC')->get(),
			'this_month_booking' => Booking::thisMonth()->get(),
			'this_month_no_show' => Booking::thisMonthBeforeNow()->unused()->get(),
		];
		return view('backend.dashboard', $data);
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
		//
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
	public function update($id)
	{
		//
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
