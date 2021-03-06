<?php

namespace Panlogic\Models;

use Panlogic\Models\AbstractModel;

class Role extends AbstractModel
{

	/**
	* The database connection used with the model.
	*
	* @var 	string
	*/
	protected $connection = 'pancruit';

	/**
	* The table associated with the model.
	*
	* @var 	string
	*/
	protected $table = 'roles';

	/**
	* The attributes that should be hidden from arrays.
	*
	* @var 	array
	*/
	protected $hidden = ['id'];

	/**
	* The default attributes.
	*
	* @var 	array
	*/
	protected $attributes = [];

	/**
	* Carbon converted dates.
	*
	* @var 	array
	*/
	protected $dates = [];

	/**
	* Disable eloquent timestamps.
	*
	* @var 	boolean
	*/
	public $timestamps = true;

	/**
	* The attributes that are mass assignable.
	*
	* @var 	array
	*/
	protected $fillable = [
		'enabled',
		'name',
		'content'
	];

	public function questions()
	{
		return $this->hasMany('Panlogic\Models\Question','id','role_id');
	}

	public function responses()
	{
		return $this->hasMany('Panlogic\Models\Response','id','role_id');
	}
}