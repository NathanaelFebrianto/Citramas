<?php

class ItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$items = Item::all();

		return View::make('item.item' , ['items' => $items]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$newId = Item::generateId();

		return View::make('item.new' , ['id' => $newId]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = array("itemId" 	=> "required",
					   "itemBrand" 	=> "required",
					   "itemType"  	=> "required",
					   "itemDesc"=> "required",
					   "itemUnit"=> "required|integer");

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/item/create')->withErrors($validator);
	    }

		//
		$product = new Item;

		$product->itemID = Input::get('itemId');
		$product->itemBrand = Input::get('itemBrand');
		$product->itemType = Input::get('itemType');
		$product->itemDesc = Input::get('itemDesc');
		$product->itemUnit = Input::get('itemUnit');
		$product->save();
		
		return Redirect::to('/item');
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
