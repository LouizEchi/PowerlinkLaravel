<?php

class employeeController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
 	public function index()
	{
		// get all the nerds
		$employee = employee::all();

		// load the view and pass the nerds
		return View::make('profile.index')
			->with('employee', $employee);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Profile.addEmployee');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'employee_ln'       => 'required',
			'employee_name'       => 'required',
			'employee_mi'       => 'required',
			'employee_birthdate'       => 'required|date',
			'employee_contact'       => 'required',
			'employee_WorkSched'       => 'required',
			'employee_Image'       => '',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('profile/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// Store
			$profile = new employee;
			$profile->employee_id       =  $profile->id; 
			$profile->employee_ln       = Input::get('employee_ln');
			$profile->employee_name       = Input::get('employee_name');
			$profile->employee_mi       = 	   Input::get('employee_mi');
			$profile->employee_birthdate       = 	   Input::get('employee_birthdate');
			$profile->employee_contact       = Input::get('employee_contact');
			$profile->employee_type     = Input::get('employee_type');
			$profile->employee_WorkSched     = Input::get('employee_WorkSched');
			$profile->employee_contact       = Input::get('employee_Image');
			$profile->save();

			// redirect
			Session::flash('message', 'Successfully created Profile!');
			return Redirect::to('profile');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee = employee::where('employee_id' , '=', $id)->first();

		// show the view and pass the nerd to it
		return View::make('profile.showEmployee')
			->with('employee', $employee);
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
