<?php

namespace Panlogic\Repositories\Eloquent;

use Panlogic\Interfaces\ApplicantInterface;
use Panlogic\Interfaces\CriteriaInterface;
use Panlogic\Models\Eloquent\Applicant;
use Panlogic\Libraries\AbstractCriteria as Criteria;
use Panlogic\Traits\CriteriaCRUD;
use Illuminate\Support\Collection;

class ApplicantRepository implements ApplicantInterface, CriteriaInterface {

	use CriteriaCRUD;

	protected $model;

	/**
     * @var Collection
     */
    protected $criteria;

    /**
     * @var bool
     */
    protected $skipCriteria = false;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Applicant $model, Collection $collection) {
		$this->model = $model;
		$this->criteria = $collection;
		$this->resetScope();
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
    	$this->applyCriteria();
    	return $this->model->get($columns);
    }

}