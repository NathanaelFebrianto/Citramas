<?php


class Warehouse extends Eloquent {

	public $timestamps = false;
	protected $primaryKey = 'warehouseID';
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mswarehouse';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function area(){
		return $this->hasOne('Area' , 'areaID' , 'areaID');
	}

	public function region(){
		return $this->belongsTo('Region' , 'regionID' , 'regionID');
	}

	public static function generateId(){
		$warehouse = Warehouse::orderBy('warehouseID' , 'DESC')->get()->first();
		$warehouseId = $warehouse->warehouseID;
		$warehouseId = substr($warehouseId, 2);
		$newId = (int)($warehouseId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "wa".$newIdString;
		return $newIdString;	
	}

}
