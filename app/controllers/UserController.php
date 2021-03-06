<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user = User::all();

		return View::make('user.user' , ['users' => $user]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
			//
		$newId = User::generateId();

		return View::make('user.new' , ['id' => $newId]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array("userId" 	=> "required",
					   "userName" 	=> "required|min:3|max:50",
					   "password"  	=> "required|min:3|confirmed",
					   "password_confirmation" => "required|min:3"
			);

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/user/create')->withErrors($validator);
	    }

		//
		$user = new User;



		$user->userID = Input::get('userId');
		$user->userName = Input::get('userName');
		$user->userPassword = Hash::make(Input::get('password'));
		$user->userRole = 'Member';
		$user->save();

		return Redirect::to('/user');
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
