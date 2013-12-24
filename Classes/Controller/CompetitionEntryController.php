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
class CompetitionEntryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * competitionEntryRepository
	 *
	 * @var \Simhorse\Simhorse\Domain\Repository\CompetitionEntryRepository
	 * @inject
	 */
	protected $competitionEntryRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$competitionEntries = $this->competitionEntryRepository->findAll();
		$this->view->assign('competitionEntries', $competitionEntries);
	}

	/**
	 * action show
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry
	 * @return void
	 */
	public function showAction(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry) {
		$this->view->assign('competitionEntry', $competitionEntry);
	}

	/**
	 * action new
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $newCompetitionEntry
	 * @dontvalidate $newCompetitionEntry
	 * @return void
	 */
	public function newAction(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $newCompetitionEntry = NULL) {
		$this->view->assign('newCompetitionEntry', $newCompetitionEntry);
	}

	/**
	 * action create
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $newCompetitionEntry
	 * @return void
	 */
	public function createAction(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $newCompetitionEntry) {
		$this->competitionEntryRepository->add($newCompetitionEntry);
		$this->flashMessageContainer->add('Your new CompetitionEntry was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry
	 * @return void
	 */
	public function editAction(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry) {
		$this->view->assign('competitionEntry', $competitionEntry);
	}

	/**
	 * action update
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry
	 * @return void
	 */
	public function updateAction(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry) {
		$this->competitionEntryRepository->update($competitionEntry);
		$this->flashMessageContainer->add('Your CompetitionEntry was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry
	 * @return void
	 */
	public function deleteAction(\Simhorse\Simhorse\Domain\Model\CompetitionEntry $competitionEntry) {
		$this->competitionEntryRepository->remove($competitionEntry);
		$this->flashMessageContainer->add('Your CompetitionEntry was removed.');
		$this->redirect('list');
	}

}
?>