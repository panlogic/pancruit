<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Question extends AbstractLibrary {

  protected $enabled;
  protected $name;
  protected $content;
  protected $role;
  protected $type;
  protected $answer;

  public function __construct(array $components = []) {
    $this->enabled = isset($components['enabled']) ? $components['enabled'] : '';
    $this->name = isset($components['name']) ? $components['name'] : '';
    $this->content = isset($components['content']) ? $components['content'] : '';
    $this->role = isset($components['role']) ? $components['role'] : '';
    $this->type = isset($components['type']) ? $components['type'] : '';
    $this->answer = isset($components['answer']) ? $components['answer'] : '';
  }
}
