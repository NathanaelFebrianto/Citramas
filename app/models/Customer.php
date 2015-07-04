<?php


class Customer extends Eloquent {

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mscustomer';

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
		$customer = Customer::orderBy('CustomerId' , 'DESC')->get()->first();
		$customerId = $customer->CustomerId;
		$customerId = substr($customerId, 2);
		$newId = (int)($customerId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "CS".$newIdString;
		return $newIdString;
	}
}
