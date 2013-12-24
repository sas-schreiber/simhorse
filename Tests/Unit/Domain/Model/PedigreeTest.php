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
 * Test case for class \Simhorse\Simhorse\Domain\Model\Pedigree.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Simhorse
 *
 */
class PedigreeTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Simhorse\Simhorse\Domain\Model\Pedigree
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Simhorse\Simhorse\Domain\Model\Pedigree();
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
	public function getExternalLinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setExternalLinkForStringSetsExternalLink() { 
		$this->fixture->setExternalLink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getExternalLink()
		);
	}
	
	/**
	 * @test
	 */
	public function getSireReturnsInitialValueForPedigree() { }

	/**
	 * @test
	 */
	public function setSireForPedigreeSetsSire() { }
	
	/**
	 * @test
	 */
	public function getDamReturnsInitialValueForPedigree() { }

	/**
	 * @test
	 */
	public function setDamForPedigreeSetsDam() { }
	
}
?>