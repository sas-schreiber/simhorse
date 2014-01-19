<?php
namespace Simhorse\Simhorse\Domain\Repository;

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
class HorseRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	* import from the old database z_pferde
	* 
	* @return integer $status
	**/
	public function importOldData() {

		$horse = $this->findByUid(1);

		//\TYPO3\CMS\Core\Utility\DebugUtility::debug($horse);


			$query = $this->createQuery();


			//Bilddaten transferieren
			$query->statement("SELECT bild1 FROM z_pferde WHERE name = '" . $horse->getName() . "';");
			$result = $query->execute();
			//\TYPO3\CMS\Core\Utility\DebugUtility::debug($result);
			if ($result['bild1']) {
				$imagePraefix = explode($result['bild1'], "01");
				$imagePraefix = $imagePraefix[0];
				$horse->setImagePraefix($imagePraefix);
				$this->update($horse); 
			}
		return 1;





	}

}
?>