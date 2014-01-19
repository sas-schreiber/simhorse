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
class Horse extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * praefix
	 *
	 * @var \string
	 */
	protected $praefix;

	/**
	 * imagePraefix
	 *
	 * @var \string
	 */
	protected $imagePraefix;


	/**
	 * suffix
	 *
	 * @var \string
	 */
	protected $suffix;

	/**
	 * gender
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $gender;

	/**
	 * description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * trainingText
	 *
	 * @var \string
	 */
	protected $trainingText;

	/**
	 * color
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $color;

	/**
	 * colorGenetics
	 *
	 * @var \string
	 */
	protected $colorGenetics;

	/**
	 * breed
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $breed;

	/**
	 * yearOfBirth
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $yearOfBirth;

	/**
	 * breeder
	 *
	 * @var \string
	 */
	protected $breeder;

	/**
	 * previousOwner
	 *
	 * @var \string
	 */
	protected $previousOwner;

	/**
	 * openForBreeding
	 *
	 * @var boolean
	 */
	protected $openForBreeding = FALSE;

	/**
	 * breedingFee
	 *
	 * @var \string
	 */
	protected $breedingFee;

	/**
	 * licensedFor
	 *
	 * @var \string
	 */
	protected $licensedFor;

	/**
	 * breedingInformation
	 *
	 * @var \string
	 */
	protected $breedingInformation;

	/**
	 * pedigreeEntry
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\Pedigree
	 */
	protected $pedigreeEntry;

	/**
	 * training
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\Training>
	 * @lazy
	 */
	protected $training;

	/**
	 * competitionEntries
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\CompetitionEntry>
	 * @lazy
	 */
	protected $competitionEntries;

	/**
	 * __construct
	 *
	 * @return Horse
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
		$this->training = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->competitionEntries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the praefix
	 *
	 * @return \string $praefix
	 */
	public function getPraefix() {
		return $this->praefix;
	}

	/**
	 * Sets the praefix
	 *
	 * @param \string $praefix
	 * @return void
	 */
	public function setPraefix($praefix) {
		$this->praefix = $praefix;
	}

	/**
	 * Returns the suffix
	 *
	 * @return \string $suffix
	 */
	public function getSuffix() {
		return $this->suffix;
	}

	/**
	 * Sets the suffix
	 *
	 * @param \string $suffix
	 * @return void
	 */
	public function setSuffix($suffix) {
		$this->suffix = $suffix;
	}

	/**
	 * Returns the gender
	 *
	 * @return \integer $gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Sets the gender
	 *
	 * @param \integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
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
	 * Returns the trainingText
	 *
	 * @return \string $trainingText
	 */
	public function getTrainingText() {
		return $this->trainingText;
	}

	/**
	 * Sets the trainingText
	 *
	 * @param \string $trainingText
	 * @return void
	 */
	public function setTrainingText($trainingText) {
		$this->trainingText = $trainingText;
	}


	/**
	 * Returns the color
	 *
	 * @return \string $color
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Sets the color
	 *
	 * @param \string $color
	 * @return void
	 */
	public function setColor($color) {
		$this->color = $color;
	}

	/**
	 * Returns the colorGenetics
	 *
	 * @return \string $colorGenetics
	 */
	public function getColorGenetics() {
		return $this->colorGenetics;
	}

	/**
	 * Sets the colorGenetics
	 *
	 * @param \string $colorGenetics
	 * @return void
	 */
	public function setColorGenetics($colorGenetics) {
		$this->colorGenetics = $colorGenetics;
	}

	/**
	 * Returns the breed
	 *
	 * @return \string $breed
	 */
	public function getBreed() {
		return $this->breed;
	}

	/**
	 * Sets the breed
	 *
	 * @param \string $breed
	 * @return void
	 */
	public function setBreed($breed) {
		$this->breed = $breed;
	}

	/**
	 * Returns the yearOfBirth
	 *
	 * @return \integer $yearOfBirth
	 */
	public function getYearOfBirth() {
		return $this->yearOfBirth;
	}

	/**
	 * Sets the yearOfBirth
	 *
	 * @param \integer $yearOfBirth
	 * @return void
	 */
	public function setYearOfBirth($yearOfBirth) {
		$this->yearOfBirth = $yearOfBirth;
	}

	/**
	 * Returns the breeder
	 *
	 * @return \string $breeder
	 */
	public function getBreeder() {
		return $this->breeder;
	}

	/**
	 * Sets the breeder
	 *
	 * @param \string $breeder
	 * @return void
	 */
	public function setBreeder($breeder) {
		$this->breeder = $breeder;
	}

	/**
	 * Returns the imagePraefix
	 *
	 * @return \string $imagePraefix
	 */
	public function getImagePraefix() {
		return $this->imagePraefix;
	}

	/**
	 * Sets the imagePraefix
	 *
	 * @param \string $imagePraefix
	 * @return void
	 */
	public function setImagePraefix($imagePraefix) {
		$this->imagePraefix = $imagePraefix;
	}

	/**
	 * Returns the previousOwner
	 *
	 * @return \string $previousOwner
	 */
	public function getPreviousOwner() {
		return $this->previousOwner;
	}

	/**
	 * Sets the previousOwner
	 *
	 * @param \string $previousOwner
	 * @return void
	 */
	public function setPreviousOwner($previousOwner) {
		$this->previousOwner = $previousOwner;
	}

	/**
	 * Returns the openForBreeding
	 *
	 * @return boolean $openForBreeding
	 */
	public function getOpenForBreeding() {
		return $this->openForBreeding;
	}

	/**
	 * Sets the openForBreeding
	 *
	 * @param boolean $openForBreeding
	 * @return void
	 */
	public function setOpenForBreeding($openForBreeding) {
		$this->openForBreeding = $openForBreeding;
	}

	/**
	 * Returns the boolean state of openForBreeding
	 *
	 * @return boolean
	 */
	public function isOpenForBreeding() {
		return $this->getOpenForBreeding();
	}

	/**
	 * Returns the breedingFee
	 *
	 * @return \string $breedingFee
	 */
	public function getBreedingFee() {
		return $this->breedingFee;
	}

	/**
	 * Sets the breedingFee
	 *
	 * @param \string $breedingFee
	 * @return void
	 */
	public function setBreedingFee($breedingFee) {
		$this->breedingFee = $breedingFee;
	}

	/**
	 * Returns the licensedFor
	 *
	 * @return \string $licensedFor
	 */
	public function getLicensedFor() {
		return $this->licensedFor;
	}

	/**
	 * Sets the licensedFor
	 *
	 * @param \string $licensedFor
	 * @return void
	 */
	public function setLicensedFor($licensedFor) {
		$this->licensedFor = $licensedFor;
	}

	/**
	 * Returns the breedingInformation
	 *
	 * @return \string $breedingInformation
	 */
	public function getBreedingInformation() {
		return $this->breedingInformation;
	}

	/**
	 * Sets the breedingInformation
	 *
	 * @param \string $breedingInformation
	 * @return void
	 */
	public function setBreedingInformation($breedingInformation) {
		$this->breedingInformation = $breedingInformation;
	}

	/**
	 * Returns the pedigreeEntry
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\Pedigree $pedigreeEntry
	 */
	public function getPedigreeEntry() {
		return $this->pedigreeEntry;
	}

	/**
	 * Sets the pedigreeEntry
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Pedigree $pedigreeEntry
	 * @return void
	 */
	public function setPedigreeEntry(\Simhorse\Simhorse\Domain\Model\Pedigree $pedigreeEntry) {
		$this->pedigreeEntry = $pedigreeEntry;
	}

	/**
	 * Adds a Training
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Training $training
	 * @return void
	 */
	public function addTraining(\Simhorse\Simhorse\Domain\Model\Training $training) {
		$this->training->attach($training);
	}

	/**
	 * Removes a Training
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Training $trainingToRemove The Training to be removed
	 * @return void
	 */
	public function removeTraining(\Simhorse\Simhorse\Domain\Model\Training $trainingToRemove) {
		$this->training->detach($trainingToRemove);
	}

	/**
	 * Returns the training
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\Training> $training
	 */
	public function getTraining() {
		return $this->training;
	}

	/**
	 * Sets the training
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\Training> $training
	 * @return void
	 */
	public function setTraining(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $training) {
		$this->training = $training;
	}

	/**
	 * Adds a CompetitionEntry
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry
	 * @return void
	 */
	public function addCompetitionEntry(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry) {
		$this->competitionEntries->attach($competitionEntry);
	}

	/**
	 * Removes a CompetitionEntry
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntryToRemove The CompetitionEntry to be removed
	 * @return void
	 */
	public function removeCompetitionEntry(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntryToRemove) {
		$this->competitionEntries->detach($competitionEntryToRemove);
	}

	/**
	 * Returns the competitionEntries
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\CompetitionEntry> $competitionEntries
	 */
	public function getCompetitionEntries() {
		return $this->competitionEntries;
	}

	/**
	 * Sets the competitionEntries
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simhorse\Simhorse\Domain\Model\CompetitionEntry> $competitionEntries
	 * @return void
	 */
	public function setCompetitionEntries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $competitionEntries) {
		$this->competitionEntries = $competitionEntries;
	}

}
?>