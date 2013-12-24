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
 * Test case for class \Simhorse\Simhorse\Domain\Model\Breeding.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Simhorse
 *
 */
class BreedingTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Simhorse\Simhorse\Domain\Model\Breeding
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Simhorse\Simhorse\Domain\Model\Breeding();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getBreedingDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setBreedingDateForDateTimeSetsBreedingDate() { }
	
	/**
	 * @test
	 */
	public function getFoalingDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setFoalingDateForDateTimeSetsFoalingDate() { }
	
	/**
	 * @test
	 */
	public function getOwnerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOwnerForStringSetsOwner() { 
		$this->fixture->setOwner('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOwner()
		);
	}
	
	/**
	 * @test
	 */
	public function getApprovedReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setApprovedForOoleanSetsApproved() { }
	
	/**
	 * @test
	 */
	public function getPedigreeEntryReturnsInitialValueForPedigree() { }

	/**
	 * @test
	 */
	public function setPedigreeEntryForPedigreeSetsPedigreeEntry() { }
	
}
?>