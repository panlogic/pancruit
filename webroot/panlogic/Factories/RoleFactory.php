<?php

namespace Panlogic\Factories;

use Panlogic\Interfaces\FactoryInterface;
use Panlogic\Libraries\Role;

class RoleFactory implements FactoryInterface {

    function make($components) {
        return new Role($components);
    }

}
