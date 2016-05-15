<?php

namespace Panlogic\Factories;

use Panlogic\Interfaces\FactoryInterface;
use Panlogic\Libraries\Response;

class ResponseFactory implements FactoryInterface {

    function make($components) {
        return new Response($components);
    }

}
