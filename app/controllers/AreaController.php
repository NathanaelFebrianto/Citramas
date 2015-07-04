<?php

class AreaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$areas = Area::orderBy('areaID' , 'DESC')->get();
		

		return View::make('area.area' , ['areas' => $areas]);

	}

	public function supplier(){
    	return $this->belongsTo('Supplier');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$newId = Area::generateId();

		return View::make('area.new' , ['id' => $newId]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array("areaId" 	=> "required",
					   "areaName" 	=> "required");

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/area/create')->withErrors($validator);
	    }

		//
		$area = new Area;
		$area->areaID = Input::get('areaId');
		$area->areaName = Input::get('areaName');
		$area->save();
		
		return Redirect::to('/area');

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
