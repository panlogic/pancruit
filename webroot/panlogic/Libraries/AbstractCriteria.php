<?php

namespace Panlogic\Libraries;

abstract class AbstractCriteria {

    /**
     * @param $model
     * @return mixed
     */
    public abstract function apply($model);
}