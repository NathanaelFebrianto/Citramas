<?php

class WarehouseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$warehouses = Warehouse::all();

		return View::make('warehouse.warehouse' , ['warehouses' => $warehouses]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$newId = Warehouse::generateId();
		$areas = Area::all();
		$regions = Region::all();

		return View::make('warehouse.new' , ['id' => $newId , 'areas' => $areas , 'regions' => $regions]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$rules = array("warehouseId" 	=> "required|unique:mswarehouse,warehouseID|max:12",
					   "warehouseName" 	=> "required",
					   "firstAddress" 	=> "required",
					   "area"			=> "required",
					   "region"			=> "required",
					   "warehousePhone" => "required|numeric",
					   "warehouseFax"	=> "required|numeric",
					   "warehouseEmail" => "required|email",
					   "warehousePIC"	=> "required");

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/warehouse/create')->withErrors($validator);
	    }

		//
		$warehouse = new Warehouse;



		$warehouse->warehouseID = Input::get('warehouseId');
		$warehouse->warehouseName = Input::get('warehouseName');
		$warehouse->warehouseAddress1 = Input::get('firstAddress');
		$warehouse->warehouseAddress2 = Input::get('secondAddress');
		$warehouse->areaID = Input::get("area");
		$warehouse->regionID = Input::get("region");
		$warehouse->warehousePhone = Input::get("warehousePhone");
		$warehouse->warehouseFax = Input::get("warehouseFax");
		$warehouse->warehouseEmail = Input::get("warehouseEmail");
		$warehouse->warehousePIC = Input::get("warehousePIC");
		
		$warehouse->save();

		return Redirect::to('/warehouse');
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
		$warehouse = Warehouse::find($id);
		//delete data
		$warehouse->delete();
		//redirect
		return Redirect::to('/warehouse');
	}


}
