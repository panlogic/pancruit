<?php

namespace Panlogic\Repositories\Eloquent;

use Panlogic\Interfaces\ApplicantInterface;
use Panlogic\Interfaces\CriteriaInterface;
use Panlogic\Models\Eloquent\Applicant;

class ApplicantRepository implements ApplicantInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Applicant $model) {
		$this->model = $model;
	}

    /**
    * Return an array of created instances of the model.
    *
    * @param $objects
    * return array $objects
    */
	public function create($object)
    {
        $objects = [];
        if ( is_array($object) ) {
            foreach($object as $item) {
                $objects[] = $this->add( $item->toArray() );
            }
        } else {
            $objects[] = $this->add( $object->toArray() );
        }
        return $objects;
    }

    /**
    * Return a created instance of the model.
    *
    * @param array $array
    * return \Illuminate\Database\Eloquent\Model
    */
    private function add(array $array) {
        return $this->model->create($array);
    }

    public function all(array $columns = ['*']) {
    	return $this->model->get($columns);
    }

}