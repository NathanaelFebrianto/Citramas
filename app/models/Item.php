<?php


class Item extends Eloquent {

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'itemID';
	protected $table = 'msitem';



	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function generateId(){
		$product = Item::orderBy('itemID' , 'DESC')->get()->first();
		$productId = $product->itemID;
		$productId = substr($productId, 4);
		$newId = (int)($productId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "0000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "item".$newIdString;
		return $newIdString;
	}

}
