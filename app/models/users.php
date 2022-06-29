<?php

class User extends \Aternos\Model\GenericModel {

	// configure the generic model drivers (this is the default)
	protected static array $drivers = [
		\Aternos\Model\Driver\Redis\Redis::ID,
		\Aternos\Model\Driver\Mysqli\Mysqli::ID
	];
	
	// the name of your model (and table)
	public static function getName() : string
	{
		return "users";
	}
	
	// all public properties are database fields
	public $id;
	public $username;
	public $email;
}