<?php

class AdminSmsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['sms'] = Sms::with('category')->get();
		return View::make('admin..sms.index', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['categories'] = Category::get();
		return View::make('admin..sms.create', $data);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required',
			'category_id' => 'required',
			'status' => 'required',
			'sms_content' => 'required'

		]);
		if ($validator->fails())
			return Redirect::back()->withErrors($validator)->withInput();

		$sms = Sms::create([
			'title' => Input::get('title'),
			'slug' => Str::slug( Input::get('title') ),
			'category_id' => Input::get('category_id'),
			'status' => Input::get('status'),
			'sms_content' => Input::get('sms_content')
		]);
		return Redirect::route('admin..sms.index');
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
		$data['categories'] = Category::get();
		$data['sms'] = Sms::with('Category')->find($id);
		return View::make('admin..sms.edit', $data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required',
			'category_id' => 'required',
			'status' => 'required',
			'sms_content' => 'required'
		]);
		if ($validator->fails())
			return Redirect::back()->withErrors($validator)->withInput();

		$sms = Sms::find($id);

		if ($sms)
		{
			$sms->update([
				'title' => Input::get('title'),
				'slug' => Str::slug( Input::get('title') ),
				'category_id' => Input::get('category_id'),
				'status' => Input::get('status'),
				'sms_content' => Input::get('sms_content')
			]);
			return Redirect::route('admin..sms.index');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sms = Sms::find($id);

		$sms->delete();

		return Redirect::route('admin..sms.index');
	}


}
