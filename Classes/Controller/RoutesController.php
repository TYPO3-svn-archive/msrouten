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
class Tx_Msrouten_Controller_RoutesController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * routesRepository
	 *
	 * @var Tx_Msrouten_Domain_Repository_RoutesRepository
	 */
	protected $routesRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$gebirge= (int) $this->settings['flexform']['gebirge'];
		$mount= (int) $this->settings['flexform']['mount'];
		$wall=   (int)$this->settings['flexform']['walls'];
		$singlePID=   (int)$this->settings['flexform']['singlePID'];
		if ( $singlePID <1)  $singlePID = 1518;
				
		//$routes = $this->routesRepository->findAll();
		$routes =   $this->routesRepository->findAllOrt( $gebirge, $mount, $wall);
		$this->view->assign('routess', $routes);
		$this->view->assign('singlePID', $singlePID);
	}
	
	/**
	 * action listGebirge
	 *
	 * @return void
	 */
	public function listGebirgeAction() {
		
		$gebirge= (int) $this->settings['flexform']['gebirge'];
		$mount= (int) $this->settings['flexform']['mount'];
		$wall=   (int)$this->settings['flexform']['walls'];
		$singlePID=   (int)$this->settings['flexform']['singlePID'];
				
		//$routes = $this->routesRepository->findAll();
		$routes =   $this->routesRepository->findAllOrt( $gebirge, $mount, $wall);
		foreach ( $routes as $route ){		
			$berge[ $route->getWalls()->getMounts()->getUid() ] = array(  'name'	=>  $route->getWalls()->getMounts()->getMountName(), 
												'uid' 		=>  $route->getWalls()->getMounts()->getUid(),
												'height' 		=>  $route->getWalls()->getMounts()->getHeight()
									);
		}
		$this->view->assign('singlePID', $singlePID);
		$this->view->assign('mounts', $berge);
		$this->view->assign('routess', $routes);
	}
	
	

	/**
	 * action show
	 *
	 * @param Tx_Msrouten_Domain_Model_Routes $routes
	 * @param boolean $pdf
	 * @return void
	 */
	public function showAction(Tx_Msrouten_Domain_Model_Routes $routes, $pdf=FALSE) {	
		$this->view->assign('routes', $routes);
		$this->view->assign('pdf', $pdf);
	}

	/**
	 * action new
	 *
	 * @param Tx_Msrouten_Domain_Model_Routes $newRoutes
	 * @dontvalidate $newRoutes
	 * @return void
	 */
	public function newAction(Tx_Msrouten_Domain_Model_Routes $newRoutes = NULL) {
		$this->view->assign('newRoutes', $newRoutes);
	}

	/**
	 * action create
	 *
	 * @param Tx_Msrouten_Domain_Model_Routes $newRoutes
	 * @return void
	 */
	public function createAction(Tx_Msrouten_Domain_Model_Routes $newRoutes) {
		$this->routesRepository->add($newRoutes);
		$this->flashMessageContainer->add('Your new Routes was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Tx_Msrouten_Domain_Model_Routes $routes
	 * @return void
	 */
	public function editAction(Tx_Msrouten_Domain_Model_Routes $routes) {
		$this->view->assign('routes', $routes);
	}

	/**
	 * action update
	 *
	 * @param Tx_Msrouten_Domain_Model_Routes $routes
	 * @return void
	 */
	public function updateAction(Tx_Msrouten_Domain_Model_Routes $routes) {
		$this->routesRepository->update($routes);
		$this->flashMessageContainer->add('Your Routes was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Tx_Msrouten_Domain_Model_Routes $routes
	 * @return void
	 */
	public function deleteAction(Tx_Msrouten_Domain_Model_Routes $routes) {
		$this->routesRepository->remove($routes);
		$this->flashMessageContainer->add('Your Routes was removed.');
		$this->redirect('list');
	}

	/**
	 * injectRoutesRepository
	 *
	 * @param Tx_Msrouten_Domain_Repository_RoutesRepository $routesRepository
	 * @return void
	 */
	public function injectRoutesRepository(Tx_Msrouten_Domain_Repository_RoutesRepository $routesRepository) {
		$this->routesRepository = $routesRepository;
	}

}
?>