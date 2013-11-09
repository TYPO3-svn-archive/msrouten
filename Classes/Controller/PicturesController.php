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
class Tx_Msrouten_Controller_PicturesController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * picturesRepository
	 *
	 * @var Tx_Msrouten_Domain_Repository_PicturesRepository
	 */
	protected $picturesRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$picturess = $this->picturesRepository->findAll();
		$this->view->assign('picturess', $picturess);
	}

	/**
	 * action show
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $pictures
	 * @return void
	 */
	public function showAction(Tx_Msrouten_Domain_Model_Pictures $pictures) {
		$this->view->assign('pictures', $pictures);
	}

	/**
	 * action new
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $newPictures
	 * @dontvalidate $newPictures
	 * @return void
	 */
	public function newAction(Tx_Msrouten_Domain_Model_Pictures $newPictures = NULL) {
		$this->view->assign('newPictures', $newPictures);
	}

	/**
	 * action create
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $newPictures
	 * @return void
	 */
	public function createAction(Tx_Msrouten_Domain_Model_Pictures $newPictures) {
		$this->picturesRepository->add($newPictures);
		$this->flashMessageContainer->add('Your new Pictures was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $pictures
	 * @return void
	 */
	public function editAction(Tx_Msrouten_Domain_Model_Pictures $pictures) {
		$this->view->assign('pictures', $pictures);
	}

	/**
	 * action update
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $pictures
	 * @return void
	 */
	public function updateAction(Tx_Msrouten_Domain_Model_Pictures $pictures) {
		$this->picturesRepository->update($pictures);
		$this->flashMessageContainer->add('Your Pictures was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $pictures
	 * @return void
	 */
	public function deleteAction(Tx_Msrouten_Domain_Model_Pictures $pictures) {
		$this->picturesRepository->remove($pictures);
		$this->flashMessageContainer->add('Your Pictures was removed.');
		$this->redirect('list');
	}

	/**
	 * injectPicturesRepository
	 *
	 * @param Tx_Msrouten_Domain_Repository_PicturesRepository $picturesRepository
	 * @return void
	 */
	public function injectPicturesRepository(Tx_Msrouten_Domain_Repository_PicturesRepository $picturesRepository) {
		$this->picturesRepository = $picturesRepository;
	}

}
?>