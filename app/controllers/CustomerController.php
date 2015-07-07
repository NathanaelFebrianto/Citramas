<?php

class CustomerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$customers = Customer::all();


		return View::make('customer.customer' , ['customers' => $customers]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		//
		$newId = Customer::generateId();

		$areas = Area::all();
		$regions = Region::all();

		return View::make('customer.new' , ['id' => $newId , 'areas' => $areas , 'regions' => $regions]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//rule untuk validasi customer
		$rules = array("customerId" 		=> "required|unique:mscustomer,customerID|max:12",
					   "firstAddress" 		=> "required",
					   "secondAddress"		=> "required",
					   "thirdAddress" 	=> "required",
					   "fourthAddress"	=> "required",
					   "area"  			=> "required",
					   "region"			=> "required",
					   "customerPhone" 	=> "required|numeric",
					   "customerFax" 	=> "required|numeric",
					   "customerEmail" 	=> "required|email",
					   "customerContact"=> "required",
					   "poBirth" 		=> "required",
					   "doBirth" 		=> "required|date",
					   "customerReligion" => "required",
					   "customerPosition" => "required",
					   "customerStatus" => "required",
					   "customerChildren" => "required|integer",
					   "customerPhoneHome" => "required|numeric",
					   "customerMobile" => "required|numeric",
					   "customerPinBB" => "required");

		//check validasi
	    $validator = Validator::make(Input::all(), $rules);

	    //jika validasi fail
	    if ($validator->fails())
	    {
	        return Redirect::to('/customer/create')->withErrors($validator);
	    }

		//make new instance / data baru
		$customer = new Customer;
		$customer->customerID = Input::get('customerId');
		$customer->customerAddress1 = Input::get('firstAddress');
		$customer->customerAddress2 = Input::get('secondAddress');
		$customer->customerAddress3 = Input::get('thirdAddress');
		$customer->customerAddress4 = Input::get('fourthAddress');
		$customer->areaID = Input::get('area');
		$customer->regionID = Input::get('region');
		$customer->customerPhone = Input::get('customerPhone');
		$customer->customerFax = Input::get('customerFax');
		$customer->customerEmail = Input::get('customerEmail');
		$customer->customerContact = Input::get('customerContact');
		$customer->POBirth = Input::get('poBirth');
		$customer->DOBirth = Input::get('doBirth');
		$customer->customerReligion = Input::get('customerReligion');
		$customer->customerPosition = Input::get('customerPosition');
		$customer->customerStatus = Input::get('customerStatus');
		$customer->customerChildren = Input::get('customerChildren');
		$customer->customerPhoneHome = Input::get('customerPhoneHome');
		$customer->customerMobile = Input::get('customerMobile');		
		$customer->customerPinBB = Input::get('customerPinBB');
		$customer->save();

		//redirect
		return Redirect::to('/customer');
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
		//select query
		$customer = Customer::find($id);
		//delete customer
		$customer->delete();
		//redirect
		return Redirect::to('/customer');
	}


}
