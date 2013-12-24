<?php
namespace Simhorse\Simhorse\Controller;

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
class HorseController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * horseRepository
	 *
	 * @var \Simhorse\Simhorse\Domain\Repository\HorseRepository
	 * @inject
	 */
	protected $horseRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$horses = $this->horseRepository->findAll();
		$this->view->assign('horses', $horses);
	}

	/**
	 * action show
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Horse $horse
	 * @return void
	 */
	public function showAction(\Simhorse\Simhorse\Domain\Model\Horse $horse) {
		$this->view->assign('horse', $horse);
	}

	/**
	 * action new
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Horse $newHorse
	 * @dontvalidate $newHorse
	 * @return void
	 */
	public function newAction(\Simhorse\Simhorse\Domain\Model\Horse $newHorse = NULL) {
		if ($newHorse == NULL) { // workaround for fluid bug ##5636
			$newHorse = t3lib_div::makeInstance('');
		}
		$this->view->assign('newHorse', $newHorse);
	}

	/**
	 * action create
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Horse $newHorse
	 * @return void
	 */
	public function createAction(\Simhorse\Simhorse\Domain\Model\Horse $newHorse) {
		$this->horseRepository->add($newHorse);
		$this->flashMessageContainer->add('Your new Horse was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Horse $horse
	 * @return void
	 */
	public function editAction(\Simhorse\Simhorse\Domain\Model\Horse $horse) {
		$this->view->assign('horse', $horse);
	}

	/**
	 * action update
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Horse $horse
	 * @return void
	 */
	public function updateAction(\Simhorse\Simhorse\Domain\Model\Horse $horse) {
		$this->horseRepository->update($horse);
		$this->flashMessageContainer->add('Your Horse was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\Horse $horse
	 * @return void
	 */
	public function deleteAction(\Simhorse\Simhorse\Domain\Model\Horse $horse) {
		$this->horseRepository->remove($horse);
		$this->flashMessageContainer->add('Your Horse was removed.');
		$this->redirect('list');
	}

}
?>