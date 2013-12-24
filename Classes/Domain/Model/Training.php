<?php
namespace Simhorse\Simhorse\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package simhorse
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Training extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * status
	 *
	 * @var \integer
	 */
	protected $status;

	/**
	 * trainingClass
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\PerformanceClass
	 * @lazy
	 */
	protected $trainingClass;

	/**
	 * trainingLevel
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\PerformanceLevel
	 * @lazy
	 */
	protected $trainingLevel;

	/**
	 * Returns the status
	 *
	 * @return \integer $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets the status
	 *
	 * @param \integer $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Returns the trainingClass
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\PerformanceClass $trainingClass
	 */
	public function getTrainingClass() {
		return $this->trainingClass;
	}

	/**
	 * Sets the trainingClass
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\PerformanceClass $trainingClass
	 * @return void
	 */
	public function setTrainingClass(\Simhorse\Simhorse\Domain\Model\PerformanceClass $trainingClass) {
		$this->trainingClass = $trainingClass;
	}

	/**
	 * Returns the trainingLevel
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\PerformanceLevel $trainingLevel
	 */
	public function getTrainingLevel() {
		return $this->trainingLevel;
	}

	/**
	 * Sets the trainingLevel
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\PerformanceLevel $trainingLevel
	 * @return void
	 */
	public function setTrainingLevel(\Simhorse\Simhorse\Domain\Model\PerformanceLevel $trainingLevel) {
		$this->trainingLevel = $trainingLevel;
	}

}
?>