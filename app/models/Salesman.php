<?php


class Salesman extends Eloquent {

	public $timestamps = false;
	protected $primaryKey = 'salesID';
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mssalesman';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function area(){
		return $this->hasOne('Area' , 'areaID' , 'areaID');
	}

	public function region(){
		return $this->hasOne('Region' , 'regionID' , 'regionID');
	}

	public static function generateId(){
		$salesman = Salesman::orderBy('salesID' , 'DESC')->get()->first();
		$salesId = $salesman->salesID;
		$salesId = substr($salesId, 2);
		$newId = (int)($salesId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "SA".$newIdString;
		return $newIdString;
	}

}
