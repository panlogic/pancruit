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

}
