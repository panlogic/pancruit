<?php

namespace Panlogic\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

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

    /**
    * Return a new instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function getNew(array $attributes = [])
    {
        return $this->model->newInstance($attributes);
    }

    /**
    * Return all instances of the model.
    *
    * @param array $columns
    * return \Illuminate\Database\Eloquent\Model
    */
    public function all($columns = ['*'])
    {
        return $this->model->get($columns);
    }

    /**
    * Magic method.
    *
    * @param string $method
    * @param array $args
    * return \Illuminate\Database\Eloquent\Model
    */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->model, $method], $args);
    }

    /**
    * Return a created instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
    * Return an instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    /**
    * Return an updated instance of a model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function updateWithIdAndInput($id, array $input)
    {
        $model = $this->model->find($id);
        return $model->update($input);
    }

    /**
    * Return a new instance of the model.
    *
    * @param array $attributes
    * return \Illuminate\Database\Eloquent\Model
    */
    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}