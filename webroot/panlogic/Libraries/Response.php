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

  public function __construct(array $components = []) {
    $this->grade = isset($components['grade']) ? $components['grade'] : '';
    $this->applicant = isset($components['applicant']) ? $components['applicant'] : '';
    $this->role = isset($components['role']) ? $components['role'] : '';
  }

  public function setGrade($grade = '') {
    $this->grade = $grade;
  }

  public function setApplicant($applicant = '') {
    $this->applicant = $applicant;
  }

  public function setRole($role = '') {
    $this->role = $role;
  }

  public function getGrade() {
    return $this->grade;
  }

  public function getApplicant() {
    return $this->applicant;
  }

  public function getRole() {
    return $this->role;
  }
}
