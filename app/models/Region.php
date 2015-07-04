<?php


class Region extends Eloquent {

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'msregion';

	protected $primaryKey = 'regionID';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function generateId(){
		$region = Region::orderBy('regionID' , 'DESC')->get()->first();
		$regionId = $region->regionID;
		$regionId = substr($regionId, 4);
		$newId = (int)($regionId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "reg".$newIdString;
		return $newIdString;
	}
}
