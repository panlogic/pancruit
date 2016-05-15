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

  public function setQuestion($question = '') {
    $this->question = $question;
  }

  public function setResponse($response = '') {
    $this->response = $response;
  }

  public function setContent($content = '') {
    $this->content = $content;
  }

  public function getQuestion() {
    return $this->question;
  }

  public function getResponse() {
    return $this->response;
  }

  public function getContent() {
    return $this->content;
  }
}
