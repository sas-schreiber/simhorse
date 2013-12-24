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
 * Test case for class \Simhorse\Simhorse\Domain\Model\Horse.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Simhorse
 *
 */
class HorseTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Simhorse\Simhorse\Domain\Model\Horse
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Simhorse\Simhorse\Domain\Model\Horse();
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
	public function getPraefixReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPraefixForStringSetsPraefix() { 
		$this->fixture->setPraefix('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPraefix()
		);
	}
	
	/**
	 * @test
	 */
	public function getSuffixReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSuffixForStringSetsSuffix() { 
		$this->fixture->setSuffix('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSuffix()
		);
	}
	
	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGender()
		);
	}

	/**
	 * @test
	 */
	public function setGenderForIntegerSetsGender() { 
		$this->fixture->setGender(12);

		$this->assertSame(
			12,
			$this->fixture->getGender()
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
	public function getColorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setColorForStringSetsColor() { 
		$this->fixture->setColor('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getColor()
		);
	}
	
	/**
	 * @test
	 */
	public function getColorGeneticsReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setColorGeneticsForStringSetsColorGenetics() { 
		$this->fixture->setColorGenetics('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getColorGenetics()
		);
	}
	
	/**
	 * @test
	 */
	public function getBreedReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBreedForStringSetsBreed() { 
		$this->fixture->setBreed('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBreed()
		);
	}
	
	/**
	 * @test
	 */
	public function getYearOfBirthReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getYearOfBirth()
		);
	}

	/**
	 * @test
	 */
	public function setYearOfBirthForIntegerSetsYearOfBirth() { 
		$this->fixture->setYearOfBirth(12);

		$this->assertSame(
			12,
			$this->fixture->getYearOfBirth()
		);
	}
	
	/**
	 * @test
	 */
	public function getBreederReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBreederForStringSetsBreeder() { 
		$this->fixture->setBreeder('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBreeder()
		);
	}
	
	/**
	 * @test
	 */
	public function getPreviousOwnerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPreviousOwnerForStringSetsPreviousOwner() { 
		$this->fixture->setPreviousOwner('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPreviousOwner()
		);
	}
	
	/**
	 * @test
	 */
	public function getOpenForBreedingReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setOpenForBreedingForOoleanSetsOpenForBreeding() { }
	
	/**
	 * @test
	 */
	public function getBreedingFeeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBreedingFeeForStringSetsBreedingFee() { 
		$this->fixture->setBreedingFee('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBreedingFee()
		);
	}
	
	/**
	 * @test
	 */
	public function getLicensedForReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLicensedForForStringSetsLicensedFor() { 
		$this->fixture->setLicensedFor('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLicensedFor()
		);
	}
	
	/**
	 * @test
	 */
	public function getBreedingInformationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBreedingInformationForStringSetsBreedingInformation() { 
		$this->fixture->setBreedingInformation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBreedingInformation()
		);
	}
	
	/**
	 * @test
	 */
	public function getPedigreeEntryReturnsInitialValueForPedigree() { }

	/**
	 * @test
	 */
	public function setPedigreeEntryForPedigreeSetsPedigreeEntry() { }
	
	/**
	 * @test
	 */
	public function getTrainingReturnsInitialValueForTraining() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTraining()
		);
	}

	/**
	 * @test
	 */
	public function setTrainingForObjectStorageContainingTrainingSetsTraining() { 
		$training = new \Simhorse\Simhorse\Domain\Model\Training();
		$objectStorageHoldingExactlyOneTraining = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTraining->attach($training);
		$this->fixture->setTraining($objectStorageHoldingExactlyOneTraining);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTraining,
			$this->fixture->getTraining()
		);
	}
	
	/**
	 * @test
	 */
	public function addTrainingToObjectStorageHoldingTraining() {
		$training = new \Simhorse\Simhorse\Domain\Model\Training();
		$objectStorageHoldingExactlyOneTraining = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTraining->attach($training);
		$this->fixture->addTraining($training);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTraining,
			$this->fixture->getTraining()
		);
	}

	/**
	 * @test
	 */
	public function removeTrainingFromObjectStorageHoldingTraining() {
		$training = new \Simhorse\Simhorse\Domain\Model\Training();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($training);
		$localObjectStorage->detach($training);
		$this->fixture->addTraining($training);
		$this->fixture->removeTraining($training);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTraining()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompetitionEntriesReturnsInitialValueForCompetitionEntry() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCompetitionEntries()
		);
	}

	/**
	 * @test
	 */
	public function setCompetitionEntriesForObjectStorageContainingCompetitionEntrySetsCompetitionEntries() { 
		$competitionEntry = new \Simhorse\Simhorse\Domain\Model\CompetitionEntry();
		$objectStorageHoldingExactlyOneCompetitionEntries = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneCompetitionEntries->attach($competitionEntry);
		$this->fixture->setCompetitionEntries($objectStorageHoldingExactlyOneCompetitionEntries);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCompetitionEntries,
			$this->fixture->getCompetitionEntries()
		);
	}
	
	/**
	 * @test
	 */
	public function addCompetitionEntryToObjectStorageHoldingCompetitionEntries() {
		$competitionEntry = new \Simhorse\Simhorse\Domain\Model\CompetitionEntry();
		$objectStorageHoldingExactlyOneCompetitionEntry = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneCompetitionEntry->attach($competitionEntry);
		$this->fixture->addCompetitionEntry($competitionEntry);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCompetitionEntry,
			$this->fixture->getCompetitionEntries()
		);
	}

	/**
	 * @test
	 */
	public function removeCompetitionEntryFromObjectStorageHoldingCompetitionEntries() {
		$competitionEntry = new \Simhorse\Simhorse\Domain\Model\CompetitionEntry();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($competitionEntry);
		$localObjectStorage->detach($competitionEntry);
		$this->fixture->addCompetitionEntry($competitionEntry);
		$this->fixture->removeCompetitionEntry($competitionEntry);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCompetitionEntries()
		);
	}
	
}
?>