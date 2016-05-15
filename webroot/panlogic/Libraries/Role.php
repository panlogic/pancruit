<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Role extends AbstractLibrary {

  /**
   * Role name.
   */
  protected $name;

  /**
   * Role content.
   */
  protected $content;

  /**
   * Is role enabled?
   */
  protected $enabled;

  public function __construct(array $components = []) {
    $this->name = isset($components['name']) ? $components['name'] : '';
    $this->content = isset($components['content']) ? $components['content'] : '';
    $this->enabled = isset($components['enabled']) ? $components['enabled'] : '';
  }

  public function setName($name = '') {
    $this->name = $name;
  }

  public function setEnabled($enabled = false) {
    $this->enabled = $enabled;
  }

  public function setContent($content = '') {
    $this->content = $content;
  }

  public function getName() {
    return $this->name;
  }

  public function getContent() {
    return $this->content;
  }

  public function isEnabled() {
    return $this->enabled;
  }
}
