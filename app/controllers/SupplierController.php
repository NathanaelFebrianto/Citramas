<?php

class SupplierController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$suppliers = Supplier::all();
	
		return View::make('supplier.supplier' , ['suppliers' => $suppliers]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$newId = Supplier::generateId();
		$areas = Area::all();
		$regions = Region::all();

		return View::make('supplier.new' , ['id' => $newId , 'areas' => $areas , 'regions' => $regions]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//rule untuk validasi supplier 
		$rules = array("supplierId" 	=> "required|unique:mssupplier,supplierID|max:12",
					   "supplierName" 	=> "required",
					   "firstAddress" 	=> "required",
					   "secondAddress"	=> "required",
					   "area"			=> "required",
					   "region"			=> "required",
					   "supplierPhone"  => "required|numeric",
					   "supplierFax"	=> "required|numeric",
					   "supplierEmail" 	=> "required|email",
					   "supplierContact"=> "required",
					   "supplierMobile"  => "required|numeric");

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/supplier/create')->withErrors($validator);
	    }

		//buat new instance dari supplier / data baru
		$supplier = new Supplier;



		$supplier->supplierID = Input::get('supplierId');
		$supplier->supplierName = Input::get('supplierName');
		$supplier->supplierAddress1 = Input::get('firstAddress');
		$supplier->supplierAddress2 = Input::get('secondAddress');
		$supplier->areaID = Input::get("area");
		$supplier->regionID = Input::get("region");
		$supplier->supplierPhone = Input::get("supplierPhone");
		$supplier->supplierFax = Input::get("supplierFax");
		$supplier->supplierEmail = Input::get("supplierEmail");
		$supplier->supplierContact = Input::get("supplierContact");
		$supplier->supplierMobile = Input::get("supplierMobile");
		
		$supplier->save();

		return Redirect::to('/supplier');
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

		//select query
		$supplier = Supplier::find($id);
		//delete supplier
		$supplier->delete();

		//redirect
		return Redirect::to('/supplier');
	}


}
