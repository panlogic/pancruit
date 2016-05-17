<?php

namespace Panlogic\Models\Eloquent;

use Panlogic\Models\Eloquent\AbstractModel;

class Response extends AbstractModel
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
	protected $table = 'responses';

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
		'role_id',
		'applicant_id',
		'grade'
	];

	public function user()
	{
		return $this->belongsTo('Panlogic\Models\Eloquent\Applicant','applicant_id','id');
	}

	public function role()
	{
		return $this->belongsTo('Panlogic\Models\Eloquent\Role','role_id','id');
	}

	public function answers()
	{
		return $this->hasMany('Panlogic\Models\Eloquent\Answer','applicant_id','applicant_id');
	}
}