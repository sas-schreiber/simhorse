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
class PerformanceClass extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * performanceLevels
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\PerformanceLevel>
	 * @lazy
	 */
	protected $performanceLevels;

	/**
	 * __construct
	 *
	 * @return PerformanceClass
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->performanceLevels = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a PerformanceLevel
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\PerformanceLevel $performanceLevel
	 * @return void
	 */
	public function addPerformanceLevel(\Simhorse\Simhorse\Domain\Model\PerformanceLevel $performanceLevel) {
		$this->performanceLevels->attach($performanceLevel);
	}

	/**
	 * Removes a PerformanceLevel
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\PerformanceLevel $performanceLevelToRemove The PerformanceLevel to be removed
	 * @return void
	 */
	public function removePerformanceLevel(\Simhorse\Simhorse\Domain\Model\PerformanceLevel $performanceLevelToRemove) {
		$this->performanceLevels->detach($performanceLevelToRemove);
	}

	/**
	 * Returns the performanceLevels
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\PerformanceLevel> $performanceLevels
	 */
	public function getPerformanceLevels() {
		return $this->performanceLevels;
	}

	/**
	 * Sets the performanceLevels
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\PerformanceLevel> $performanceLevels
	 * @return void
	 */
	public function setPerformanceLevels(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $performanceLevels) {
		$this->performanceLevels = $performanceLevels;
	}

}
?>