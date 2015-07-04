<?php


class Supplier extends Eloquent {

	public $timestamps = false;
	protected $primaryKey = 'supplierID';
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mssupplier';

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
		$supplier = Supplier::orderBy('supplierID' , 'DESC')->get()->first();
		$supplierId = $supplier->supplierID;
		$supplierId = substr($supplierId, 4);
		$newId = (int)($supplierId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "SU".$newIdString;
		return $newIdString;
	}

}
