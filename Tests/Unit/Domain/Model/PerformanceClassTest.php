<?php

namespace Simhorse\Simhorse\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Simhorse\Simhorse\Domain\Model\PerformanceClass.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Simhorse
 *
 */
class PerformanceClassTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Simhorse\Simhorse\Domain\Model\PerformanceClass
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Simhorse\Simhorse\Domain\Model\PerformanceClass();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getPerformanceLevelsReturnsInitialValueForPerformanceLevel() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPerformanceLevels()
		);
	}

	/**
	 * @test
	 */
	public function setPerformanceLevelsForObjectStorageContainingPerformanceLevelSetsPerformanceLevels() { 
		$performanceLevel = new \Simhorse\Simhorse\Domain\Model\PerformanceLevel();
		$objectStorageHoldingExactlyOnePerformanceLevels = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOnePerformanceLevels->attach($performanceLevel);
		$this->fixture->setPerformanceLevels($objectStorageHoldingExactlyOnePerformanceLevels);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePerformanceLevels,
			$this->fixture->getPerformanceLevels()
		);
	}
	
	/**
	 * @test
	 */
	public function addPerformanceLevelToObjectStorageHoldingPerformanceLevels() {
		$performanceLevel = new \Simhorse\Simhorse\Domain\Model\PerformanceLevel();
		$objectStorageHoldingExactlyOnePerformanceLevel = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOnePerformanceLevel->attach($performanceLevel);
		$this->fixture->addPerformanceLevel($performanceLevel);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePerformanceLevel,
			$this->fixture->getPerformanceLevels()
		);
	}

	/**
	 * @test
	 */
	public function removePerformanceLevelFromObjectStorageHoldingPerformanceLevels() {
		$performanceLevel = new \Simhorse\Simhorse\Domain\Model\PerformanceLevel();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($performanceLevel);
		$localObjectStorage->detach($performanceLevel);
		$this->fixture->addPerformanceLevel($performanceLevel);
		$this->fixture->removePerformanceLevel($performanceLevel);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPerformanceLevels()
		);
	}
	
}
?>