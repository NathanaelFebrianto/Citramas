<?php

class SalesmanController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$salesmans = Salesman::all();

		return View::make('salesman.salesman' , ['salesmans' => $salesmans]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$newId = Salesman::generateId();
		$areas = Area::all();
		$regions = Region::all();

		return View::make('salesman.new' , ['id' => $newId , 'areas' => $areas , 'regions' => $regions]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//rule untuk validasi salesman

		$rules = array("salesId" 		=> "required|unique:mssalesman,salesID|max:12",
					   "salesName" 		=> "required",
					   "firstAddress" 	=> "required",
					   "secondAddress"	=> "required",
					   "area"			=> "required",
					   "region"			=> "required",
					   "salesPhone"  	=> "required|numeric",
					   "salesMobile1"	=> "required|numeric",
					   "salesMobile2"	=> "required|numeric",
					   "salesPinBB"		=> "required",
					   "salesEmail" 	=> "required|email",
					   "poBirth" 		=> "required",
					   "doBirth" 		=> "required|date",
					   "salesReligion"  => "required",
					   "salesPosition"  => "required",
					   "salesStatus"  => "required",
					   "salesChildren"  => "required|integer");

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/salesman/create')->withErrors($validator);
	    }

		//buat instance baru / data baru dari salesman
		$salesman = new Salesman;



		$salesman->salesID = Input::get('salesId');
		$salesman->salesName = Input::get('salesName');
		$salesman->salesAddress1 = Input::get('firstAddress');
		$salesman->salesAddress2 = Input::get('secondAddress');
		$salesman->areaID = Input::get("area");
		$salesman->regionID = Input::get("region");
		$salesman->salesPhone = Input::get("salesPhone");
		$salesman->salesMobile1 = Input::get("salesMobile1");
		$salesman->salesMobile2 = Input::get("salesMobile2");
		$salesman->salesPinBB = Input::get("salesPinBB");
		$salesman->salesEmail = Input::get("salesEmail");
		$salesman->POBirth = Input::get("poBirth");
		$salesman->DOBirth = Input::get("doBirth");
		$salesman->salesReligion = Input::get("salesReligion");
		$salesman->salesPosition = Input::get("salesPosition");
		$salesman->salesStatus = Input::get("salesStatus");
		$salesman->salesChildren = Input::get("salesChildren");
		
		$salesman->save();

		return Redirect::to('/salesman');
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
		$sales = Salesman::find($id);
		//delete salesman
		$sales->delete();

		//redirect
		return Redirect::to('/salesman');
	}


}
