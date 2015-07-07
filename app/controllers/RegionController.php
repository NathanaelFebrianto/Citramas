<?php

class RegionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$regions = Region::orderBy('regionID' , 'DESC')->get();
		return View::make('region.region' , ['regions' => $regions]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//generate new id
		$newId = Region::generateId();

		return View::make('region.new' , ['id' => $newId]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//rule untuk validasi region
		$rules = array("regionId" 	=> "required|unique:msregion,regionID|max:12",
						"regionName" 	=> "required|unique:msregion,regionName");

		//check validasi
	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/region/create')->withErrors($validator);
	    }

		//make new instance / data baru
		$region = new Region;
		$region->regionID = Input::get('regionId');
		$region->regionName = strtoupper(Input::get('regionName'));
		$region->save();
		
		return Redirect::to('/region');

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
		$region = Region::find($id);
		//delete data
		$region->delete();
		//redirect
		return Redirect::to('/region');
	}


}
