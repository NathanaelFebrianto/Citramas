<?php


class SessionController extends \BaseController{

	public function create(){
		if(Session::has('role')){
			return Redirect::to('/user');
		}else {
			return View::make("user.login");
		}
	}

	public function login(){
		$username = Input::get('username');
		$password = Input::get('password');

		$resultStaff = User::where('userID', $username)->first();
		
		if($resultStaff){
				if(Hash::check($password , $resultStaff->userPassword)){
					Session::set('role' , $resultStaff->userRole);
					Session::set('name' , $resultStaff->userName);
					return Redirect::to('/')->with('message', 'Login Success');
				}else{
					return Redirect::to('/')->with('message', 'Login Failed');
				}
		}else{
			return Redirect::to('/')->with('message', 'Login Failed');
		}
	}

	public function logout(){
		Session::flush();
		return Redirect::to('/');
	}
}