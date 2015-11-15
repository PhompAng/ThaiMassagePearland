<?php namespace THM\Http\Controllers\Backend;

use THM\Http\Requests;
use THM\Http\Controllers\Controller;

use Illuminate\Http\Request;
use THM\Treatment;
use THM\Setting;

class SettingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data =	[
			'page_title'    => 'Systems Setting',
			'page_subtitle' => 'All Settings',
			'treatments'    => Treatment::all()
		];
		return view('backend.setting', $data);
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
	public function store(Request $request)
	{
		foreach ($request->treatment as $treatment_id => $price) {
			$treatment = Treatment::findOrFail($treatment_id);
			$treatment->time = $price;
			$treatment->save();
		}

		foreach ($request->settings as $key => $value) {
			Setting::set($key, $value);
		}

		return redirect(route('backend.setting.index'));
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
