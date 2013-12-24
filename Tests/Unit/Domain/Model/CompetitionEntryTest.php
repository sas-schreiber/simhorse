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
 * Test case for class \Simhorse\Simhorse\Domain\Model\CompetitionEntry.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Simhorse
 *
 */
class CompetitionEntryTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Simhorse\Simhorse\Domain\Model\CompetitionEntry
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Simhorse\Simhorse\Domain\Model\CompetitionEntry();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate() { }
	
	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() { 
		$this->fixture->setLocation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLocation()
		);
	}
	
	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink() { 
		$this->fixture->setLink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLink()
		);
	}
	
	/**
	 * @test
	 */
	public function getShowNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setShowNameForStringSetsShowName() { 
		$this->fixture->setShowName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getShowName()
		);
	}
	
	/**
	 * @test
	 */
	public function getPlaceReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPlace()
		);
	}

	/**
	 * @test
	 */
	public function setPlaceForIntegerSetsPlace() { 
		$this->fixture->setPlace(12);

		$this->assertSame(
			12,
			$this->fixture->getPlace()
		);
	}
	
	/**
	 * @test
	 */
	public function getSpecialTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSpecialTitleForStringSetsSpecialTitle() { 
		$this->fixture->setSpecialTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSpecialTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getAssociationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAssociationForStringSetsAssociation() { 
		$this->fixture->setAssociation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAssociation()
		);
	}
	
	/**
	 * @test
	 */
	public function getAssociationPointsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAssociationPoints()
		);
	}

	/**
	 * @test
	 */
	public function setAssociationPointsForIntegerSetsAssociationPoints() { 
		$this->fixture->setAssociationPoints(12);

		$this->assertSame(
			12,
			$this->fixture->getAssociationPoints()
		);
	}
	
	/**
	 * @test
	 */
	public function getEarningsReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getEarnings()
		);
	}

	/**
	 * @test
	 */
	public function setEarningsForFloatSetsEarnings() { 
		$this->fixture->setEarnings(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getEarnings()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getClassReturnsInitialValueForPerformanceClass() { }

	/**
	 * @test
	 */
	public function setClassForPerformanceClassSetsClass() { }
	
	/**
	 * @test
	 */
	public function getLevelReturnsInitialValueForPerformanceLevel() { }

	/**
	 * @test
	 */
	public function setLevelForPerformanceLevelSetsLevel() { }
	
}
?>