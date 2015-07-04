<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent{

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'msuser';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');


	public static function generateId(){
		$user = User::orderBy('userID' , 'DESC')->get()->first();
		$userId = $user->userID;
		$userId = substr($userId, 4);
		$newId = (int)($userId);
		$newId++;
		$newIdString = (string)$newId;
		
		$newIdString = "000".$newIdString;

		if(strlen($newIdString) > 3)$newIdString = substr($newIdString, strlen($newIdString) - 3);
		$newIdString = "user".$newIdString;
		return $newIdString;
	}

}
