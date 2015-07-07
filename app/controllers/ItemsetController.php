<?php

class ItemsetController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$itemsets = Itemset::all();



		return View::make('itemset.itemset' , ['itemsets' => $itemsets]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$newId = Itemset::generateId();
		$items = Item::all();



		return View::make('itemset.new' , ['id' => $newId , 'items' => $items]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$rules = array("itemSetId" 	=> "required|unique:msitemset,itemSetID|max:12",
					   "item" 	=> "required",
					 	"itemQty"  	=> "required|integer");

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('/itemset/create')->withErrors($validator);
	    }

		//
		$itemset = new Itemset;

		$itemset->itemSetID = Input::get('itemSetId');
		$itemset->itemID = Input::get('item');
		$itemset->itemQty = Input::get('itemQty');
		$itemset->save();
		
		return Redirect::to('/itemset');
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
		$itemset = Itemset::find($id);
		//delete
		$itemset->delete();

		//redirect
		return Redirect::to('/itemset');
	}


}
