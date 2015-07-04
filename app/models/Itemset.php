<?php


class Itemset extends Eloquent {

	public $timestamps = false;
	protected $primaryKey = 'itemSetID';
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'msitemset';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function item(){
		return $this->hasOne('Item' , 'itemID' , 'itemID');
	}

	public static function generateId(){
		$itemset = Itemset::orderBy('itemSetID' , 'DESC')->get()->first();
		$itemsetId = $itemset->itemSetID;
		$itemsetId = substr($itemsetId, 3);
		$newId = (int)($itemsetId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "set".$newIdString;
		
		return $newIdString;	
	}

}
