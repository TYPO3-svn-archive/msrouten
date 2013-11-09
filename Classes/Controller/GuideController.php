<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Sebastian B. <info@buzted.de>, buzted.de
 *  
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
 * @package msrouten
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Msrouten_Controller_GuideController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * guideRepository
	 *
	 * @var Tx_Msrouten_Domain_Repository_GuideRepository
	 */
	protected $guideRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$guides = $this->guideRepository->findAll();
		$this->view->assign('guides', $guides);
	}

	/**
	 * action show
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $guide
	 * @return void
	 */
	public function showAction(Tx_Msrouten_Domain_Model_Guide $guide) {
		$this->view->assign('guide', $guide);
	}

	/**
	 * action new
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $newGuide
	 * @dontvalidate $newGuide
	 * @return void
	 */
	public function newAction(Tx_Msrouten_Domain_Model_Guide $newGuide = NULL) {
		$this->view->assign('newGuide', $newGuide);
	}

	/**
	 * action create
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $newGuide
	 * @return void
	 */
	public function createAction(Tx_Msrouten_Domain_Model_Guide $newGuide) {
		$this->guideRepository->add($newGuide);
		$this->flashMessageContainer->add('Your new Guide was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $guide
	 * @return void
	 */
	public function editAction(Tx_Msrouten_Domain_Model_Guide $guide) {
		$this->view->assign('guide', $guide);
	}

	/**
	 * action update
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $guide
	 * @return void
	 */
	public function updateAction(Tx_Msrouten_Domain_Model_Guide $guide) {
		$this->guideRepository->update($guide);
		$this->flashMessageContainer->add('Your Guide was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $guide
	 * @return void
	 */
	public function deleteAction(Tx_Msrouten_Domain_Model_Guide $guide) {
		$this->guideRepository->remove($guide);
		$this->flashMessageContainer->add('Your Guide was removed.');
		$this->redirect('list');
	}

	/**
	 * injectGuideRepository
	 *
	 * @param Tx_Msrouten_Domain_Repository_GuideRepository $guideRepository
	 * @return void
	 */
	public function injectGuideRepository(Tx_Msrouten_Domain_Repository_GuideRepository $guideRepository) {
		$this->guideRepository = $guideRepository;
	}

}
?>