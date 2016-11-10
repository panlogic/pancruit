<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Answer extends AbstractLibrary {

  protected $question;
  protected $response;
  protected $content;

  public function __construct(array $components = []) {
    $this->question = isset($components['question']) ? $components['question'] : '';
    $this->response = isset($components['response']) ? $components['response'] : '';
    $this->content = isset($components['content']) ? $components['content'] : '';
  }
}
