<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Response extends AbstractLibrary {

  /**
   * Grade.
   */
  protected $grade;

  /**
   * Applicant object.
   */
  protected $applicant;

  /**
   * Role object
   */
  protected $role;

  /**
   * Answer object.
   */
  protected $answer;

  public function __construct(array $components = []) {
    $this->grade = isset($components['grade']) ? $components['grade'] : '';
    $this->applicant = isset($components['applicant']) ? $components['applicant'] : '';
    $this->role = isset($components['role']) ? $components['role'] : '';
    $this->answer = isset($components['answer']) ? $components['answer'] : '';
  }
}
