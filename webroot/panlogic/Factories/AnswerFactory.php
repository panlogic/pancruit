<?php

namespace Panlogic\Factories;

use Panlogic\Interfaces\FactoryInterface;
use Panlogic\Libraries\Answer;

class AnswerFactory implements FactoryInterface {

    function make($components) {
        return new Answer($components);
    }

}
