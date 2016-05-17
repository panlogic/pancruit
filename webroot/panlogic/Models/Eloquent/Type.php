<?php

namespace Panlogic\Models\Eloquent;

use Panlogic\Models\Eloquent\AbstractModel;

class Type extends AbstractModel
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
	protected $table = 'types';

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
	];

	public function questions()
	{
		return $this->hasMany('Panlogic\Models\Eloquent\Question','id','question_id');
	}

	public function types()
	{
		return $this->hasMany('Panlogic\Models\Eloquent\TypeValue','id','type_id');
	}

}