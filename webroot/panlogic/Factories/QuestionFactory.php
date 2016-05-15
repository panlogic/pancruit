<?php

namespace Panlogic\Factories;

use Panlogic\Interfaces\FactoryInterface;
use Panlogic\Libraries\Question;

class QuestionFactory implements FactoryInterface {

    function make($components) {
        return new Question($components);
    }

}
