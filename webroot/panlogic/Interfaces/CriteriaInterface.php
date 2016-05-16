<?php

namespace Panlogic\Interfaces;

use Panlogic\Libraries\AbstractCriteria as Criteria;

interface CriteriaInterface {

	/**
     * @param bool $status
     * @return $this
     */
	public function skipCriteria($status = false);

	/**
     * @return $this
     */
	public function getCriteria();

	/**
     * @param Criteria $criteria
     * @return $this
     */
	public function getByCriteria(Criteria $criteria);

	/**
     * @param Criteria $criteria
     * @return $this
     */
   	public function pushCriteria(Criteria $criteria);

	/**
     * @return $this
     */
	public function applyCriteria();
}