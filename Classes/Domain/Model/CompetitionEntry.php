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
class CompetitionEntry extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * date
	 *
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * location
	 *
	 * @var \string
	 */
	protected $location;

	/**
	 * link
	 *
	 * @var \string
	 */
	protected $link;

	/**
	 * showName
	 *
	 * @var \string
	 */
	protected $showName;

	/**
	 * place
	 *
	 * @var \integer
	 */
	protected $place;

	/**
	 * specialTitle
	 *
	 * @var \string
	 */
	protected $specialTitle;

	/**
	 * association
	 *
	 * @var \string
	 */
	protected $association;

	/**
	 * associationPoints
	 *
	 * @var \integer
	 */
	protected $associationPoints;

	/**
	 * earnings
	 *
	 * @var \float
	 */
	protected $earnings;

	/**
	 * image
	 *
	 * @var \string
	 */
	protected $image;

	/**
	 * class
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\PerformanceClass
	 * @lazy
	 */
	protected $class;

	/**
	 * level
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\PerformanceLevel
	 * @lazy
	 */
	protected $level;

	/**
	 * Returns the date
	 *
	 * @return \DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Returns the location
	 *
	 * @return \string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the link
	 *
	 * @return \string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param \string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the showName
	 *
	 * @return \string $showName
	 */
	public function getShowName() {
		return $this->showName;
	}

	/**
	 * Sets the showName
	 *
	 * @param \string $showName
	 * @return void
	 */
	public function setShowName($showName) {
		$this->showName = $showName;
	}

	/**
	 * Returns the place
	 *
	 * @return \integer $place
	 */
	public function getPlace() {
		return $this->place;
	}

	/**
	 * Sets the place
	 *
	 * @param \integer $place
	 * @return void
	 */
	public function setPlace($place) {
		$this->place = $place;
	}

	/**
	 * Returns the specialTitle
	 *
	 * @return \string $specialTitle
	 */
	public function getSpecialTitle() {
		return $this->specialTitle;
	}

	/**
	 * Sets the specialTitle
	 *
	 * @param \string $specialTitle
	 * @return void
	 */
	public function setSpecialTitle($specialTitle) {
		$this->specialTitle = $specialTitle;
	}

	/**
	 * Returns the association
	 *
	 * @return \string $association
	 */
	public function getAssociation() {
		return $this->association;
	}

	/**
	 * Sets the association
	 *
	 * @param \string $association
	 * @return void
	 */
	public function setAssociation($association) {
		$this->association = $association;
	}

	/**
	 * Returns the associationPoints
	 *
	 * @return \integer $associationPoints
	 */
	public function getAssociationPoints() {
		return $this->associationPoints;
	}

	/**
	 * Sets the associationPoints
	 *
	 * @param \integer $associationPoints
	 * @return void
	 */
	public function setAssociationPoints($associationPoints) {
		$this->associationPoints = $associationPoints;
	}

	/**
	 * Returns the earnings
	 *
	 * @return \float $earnings
	 */
	public function getEarnings() {
		return $this->earnings;
	}

	/**
	 * Sets the earnings
	 *
	 * @param \float $earnings
	 * @return void
	 */
	public function setEarnings($earnings) {
		$this->earnings = $earnings;
	}

	/**
	 * Returns the image
	 *
	 * @return \string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the class
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\PerformanceClass $class
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * Sets the class
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\PerformanceClass $class
	 * @return void
	 */
	public function setClass(\Simhorse\Simhorse\Domain\Model\PerformanceClass $class) {
		$this->class = $class;
	}

	/**
	 * Returns the level
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\PerformanceLevel $level
	 */
	public function getLevel() {
		return $this->level;
	}

	/**
	 * Sets the level
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\PerformanceLevel $level
	 * @return void
	 */
	public function setLevel(\Simhorse\Simhorse\Domain\Model\PerformanceLevel $level) {
		$this->level = $level;
	}

}
?>