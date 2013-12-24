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
class Breeding extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * breedingDate
	 *
	 * @var \DateTime
	 */
	protected $breedingDate;

	/**
	 * foalingDate
	 *
	 * @var \DateTime
	 */
	protected $foalingDate;

	/**
	 * owner
	 *
	 * @var \string
	 */
	protected $owner;

	/**
	 * approved
	 *
	 * @var boolean
	 */
	protected $approved = FALSE;

	/**
	 * pedigreeEntry
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\Pedigree
	 */
	protected $pedigreeEntry;

	/**
	 * Returns the breedingDate
	 *
	 * @return \DateTime $breedingDate
	 */
	public function getBreedingDate() {
		return $this->breedingDate;
	}

	/**
	 * Sets the breedingDate
	 *
	 * @param \DateTime $breedingDate
	 * @return void
	 */
	public function setBreedingDate($breedingDate) {
		$this->breedingDate = $breedingDate;
	}

	/**
	 * Returns the foalingDate
	 *
	 * @return \DateTime $foalingDate
	 */
	public function getFoalingDate() {
		return $this->foalingDate;
	}

	/**
	 * Sets the foalingDate
	 *
	 * @param \DateTime $foalingDate
	 * @return void
	 */
	public function setFoalingDate($foalingDate) {
		$this->foalingDate = $foalingDate;
	}

	/**
	 * Returns the owner
	 *
	 * @return \string $owner
	 */
	public function getOwner() {
		return $this->owner;
	}

	/**
	 * Sets the owner
	 *
	 * @param \string $owner
	 * @return void
	 */
	public function setOwner($owner) {
		$this->owner = $owner;
	}

	/**
	 * Returns the approved
	 *
	 * @return boolean $approved
	 */
	public function getApproved() {
		return $this->approved;
	}

	/**
	 * Sets the approved
	 *
	 * @param boolean $approved
	 * @return void
	 */
	public function setApproved($approved) {
		$this->approved = $approved;
	}

	/**
	 * Returns the boolean state of approved
	 *
	 * @return boolean
	 */
	public function isApproved() {
		return $this->getApproved();
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

}
?>