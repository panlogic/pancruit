<?php

namespace Panlogic\Models;

use Panlogic\Models\AbstractModel;

class Question extends AbstractModel
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
	protected $table = 'questions';

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
		'content',
		'role_id',
		'type_id',
	];
}