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
class Pedigree extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 */
	protected $name;

	/**
	 * externalLink
	 *
	 * @var \string
	 */
	protected $externalLink;

	/**
	 * sire
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\Pedigree
	 */
	protected $sire;

	/**
	 * dam
	 *
	 * @var \Simhorse\Simhorse\Domain\Model\Pedigree
	 */
	protected $dam;

	/**
	*
	* @var \Simhorse\Simhorse\Domain\Model\Horse
	*/
	protected $horse;

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
	 * Returns the externalLink
	 *
	 * @return \string $externalLink
	 */
	public function getExternalLink() {
		return $this->externalLink;
	}

	/**
	 * Sets the externalLink
	 *
	 * @param \string $externalLink
	 * @return void
	 */
	public function setExternalLink($externalLink) {
		$this->externalLink = $externalLink;
	}

	/**
	 * Returns the sire
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\Pedigree $sire
	 */
	public function getSire() {
		return $this->sire;
	}

	/**
	 * Sets the sire
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Pedigree $sire
	 * @return void
	 */
	public function setSire(\Simhorse\Simhorse\Domain\Model\Pedigree $sire) {
		$this->sire = $sire;
	}

	/**
	 * Returns the dam
	 *
	 * @return \Simhorse\Simhorse\Domain\Model\Pedigree $dam
	 */
	public function getDam() {
		return $this->dam;
	}

	/**
	 * Sets the dam
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Pedigree $dam
	 * @return void
	 */
	public function setDam(\Simhorse\Simhorse\Domain\Model\Pedigree $dam) {
		$this->dam = $dam;
	}


	/**
	*
	* @return \Simhorse\Simhorse\Domain\Model\Horse $horse
	*/
	public function getHorse() {
		return $this->horse;
	}

	/**
	*
	* @param \Simhorse\Simhorse\Domain\Model\Horse $horse
	* @return void
	*/
	public function setHorse(\Simhorse\Simhorse\Domain\Model\Horse $horse) {
		$this->horse = $horse;
	}
}
?>