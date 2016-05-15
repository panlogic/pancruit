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

  public function setEnabled($enabled = '') {
    $this->enabled = $enabled;
  }

  public function setName($name = '') {
    $this->name = $name;
  }

  public function setContent($content = '') {
    $this->content = $content;
  }

  public function setRole($role = '') {
    $this->role = $role;
  }

  public function setType($type = '') {
    $this->type = $type;
  }

  public function setAnswer($answer = '') {
    $this->answer = $answer;
  }

  public function isEnabled() {
    return $this->enabled;
  }

  public function getName() {
    return $this->name;
  }

  public function getContent() {
    return $this->content;
  }

  public function getRole() {
    return $this->role;
  }

  public function getType() {
    return $this->type;
  }

  public function getAnswer() {
    return $this->answer;
  }
}
