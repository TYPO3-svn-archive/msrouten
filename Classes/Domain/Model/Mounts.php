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
class Tx_Msrouten_Domain_Model_Mounts extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Name des Berges
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $mountName;

	/**
	 * Beschreibung des Berges
	 *
	 * @var string
	 */
	protected $mountDescription;

	/**
	 * Höhe
	 *
	 * @var string
	 */
	protected $height;

	/**
	 * Location N
	 *
	 * @var string
	 */
	protected $mountLocationN;

	/**
	 * Location O
	 *
	 * @var string
	 */
	protected $mountLocationO;

	/**
	 * Normaleweg zum Gipfel
	 *
	 * @var string
	 */
	protected $mountWayToTop;

	/**
	 * Abstieg
	 *
	 * @var string
	 */
	protected $mountWayToBot;

	/**
	 * gebirge
	 *
	 * @var Tx_Msrouten_Domain_Model_Gebirge
	 */
	protected $gebirge;

	/**
	 * karte
	 *
	 * @var Tx_Msrouten_Domain_Model_Karten
	 */
	protected $karte;

	/**
	 * Returns the mountName
	 *
	 * @return string $mountName
	 */
	public function getMountName() {
		return $this->mountName;
	}

	/**
	 * Sets the mountName
	 *
	 * @param string $mountName
	 * @return void
	 */
	public function setMountName($mountName) {
		$this->mountName = $mountName;
	}

	/**
	 * Returns the mountDescription
	 *
	 * @return string $mountDescription
	 */
	public function getMountDescription() {
		return $this->mountDescription;
	}

	/**
	 * Sets the mountDescription
	 *
	 * @param string $mountDescription
	 * @return void
	 */
	public function setMountDescription($mountDescription) {
		$this->mountDescription = $mountDescription;
	}

	/**
	 * Returns the mountLocationN
	 *
	 * @return string $mountLocationN
	 */
	public function getMountLocationN() {
		return $this->mountLocationN;
	}

	/**
	 * Sets the mountLocationN
	 *
	 * @param string $mountLocationN
	 * @return void
	 */
	public function setMountLocationN($mountLocationN) {
		$this->mountLocationN = $mountLocationN;
	}

	/**
	 * Returns the mountLocationO
	 *
	 * @return string $mountLocationO
	 */
	public function getMountLocationO() {
		return $this->mountLocationO;
	}

	/**
	 * Sets the mountLocationO
	 *
	 * @param string $mountLocationO
	 * @return void
	 */
	public function setMountLocationO($mountLocationO) {
		$this->mountLocationO = $mountLocationO;
	}

	/**
	 * Returns the mountWayToTop
	 *
	 * @return string $mountWayToTop
	 */
	public function getMountWayToTop() {
		return $this->mountWayToTop;
	}

	/**
	 * Sets the mountWayToTop
	 *
	 * @param string $mountWayToTop
	 * @return void
	 */
	public function setMountWayToTop($mountWayToTop) {
		$this->mountWayToTop = $mountWayToTop;
	}

	/**
	 * Returns the mountWayToBot
	 *
	 * @return string $mountWayToBot
	 */
	public function getMountWayToBot() {
		return $this->mountWayToBot;
	}

	/**
	 * Sets the mountWayToBot
	 *
	 * @param string $mountWayToBot
	 * @return void
	 */
	public function setMountWayToBot($mountWayToBot) {
		$this->mountWayToBot = $mountWayToBot;
	}

	/**
	 * Returns the gebirge
	 *
	 * @return Tx_Msrouten_Domain_Model_Gebirge gebirge
	 */
	public function getGebirge() {
		return $this->gebirge;
	}

	/**
	 * Sets the gebirge
	 *
	 * @param Tx_Msrouten_Domain_Model_Gebirge $gebirge
	 * @return Tx_Msrouten_Domain_Model_Gebirge gebirge
	 */
	public function setGebirge($gebirge) {
		$this->gebirge = $gebirge;
	}

	/**
	 * Returns the karte
	 *
	 * @return Tx_Msrouten_Domain_Model_Karten $karte
	 */
	public function getKarte() {
		return $this->karte;
	}

	/**
	 * Sets the karte
	 *
	 * @param Tx_Msrouten_Domain_Model_Karten $karte
	 * @return void
	 */
	public function setKarte(Tx_Msrouten_Domain_Model_Karten $karte) {
		$this->karte = $karte;
	}

	/**
	 * Returns the height
	 *
	 * @return string height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Sets the height
	 *
	 * @param string $height
	 * @return string height
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

}
?>