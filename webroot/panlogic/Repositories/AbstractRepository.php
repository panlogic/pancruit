<?php

namespace Panlogic\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class AbstractRepository
{
    /**
    * The model to execute queries on.
    *
    * @var 	\Illuminate\Database\Eloquent\Model
    */
    protected $model;

    /**
    * Create a new repository instance.
    *
    * @param \Illuminate\Database\Eloquent\Model $model The model to execute queries on
    */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

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
        return collect($objects);
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

}