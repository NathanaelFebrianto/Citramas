<?php


class Area extends Eloquent {

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'msarea';

	protected $primaryKey = 'areaID';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function generateId(){
		$area = Area::orderBy('areaID' , 'DESC')->get()->first();
		$areaId = $area->areaID;
		$areaId = substr($areaId, 4);
		$newId = (int)($areaId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "area".$newIdString;
		return $newIdString;
	}
}
