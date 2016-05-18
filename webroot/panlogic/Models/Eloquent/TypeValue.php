<?php

namespace Panlogic\Models\Eloquent;

use Panlogic\Models\Eloquent\AbstractModel;

class TypeValue extends AbstractModel
{
	/**
	* The table associated with the model.
	*
	* @var 	string
	*/
	protected $table = 'type_values';

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
		'type_id',
		'content',
	];

	public function type()
	{
		return $this->belongsTo('Panlogic\Models\Eloquent\Type','type_id','id');
	}
}