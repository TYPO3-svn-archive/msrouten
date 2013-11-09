<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Sebastian B. <info@buzted.de>, buzted.de
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
class Tx_Msrouten_Domain_Model_Karten extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Karten Bezeichnung
	 *
	 * @var string
	 */
	protected $kartenName;

	/**
	 * VerlagsNummer
	 *
	 * @var string
	 */
	protected $nummer;

	/**
	 * Maßstab
	 *
	 * @var string
	 */
	protected $massstab;

	/**
	 * Land
	 *
	 * @var string
	 */
	protected $land;

	/**
	 * ISBN-13 Nummer
	 *
	 * @var string
	 */
	protected $isbn13;

	/**
	 * Amazon-ASIN, bzw. ISBN 10
	 *
	 * @var string
	 */
	protected $asin;

	/**
	 * Bearbeitungsstand
	 *
	 * @var string
	 */
	protected $stand;

	/**
	 * UTM-Zone
	 *
	 * @var integer
	 */
	protected $zone;

	/**
	 * Eckkoordinaten links unten, Rechtswert
	 *
	 * @var integer
	 */
	protected $liUntenUtmRechts;

	/**
	 * Eckkoordinaten links unten, Hochwert
	 *
	 * @var integer
	 */
	protected $uliUntenUtmHoch;

	/**
	 * Eckkoordinaten links oben, Rechtswert
	 *
	 * @var integer
	 */
	protected $liObenUtmRechts;

	/**
	 * Eckkoordinaten links oben, Hochwert
	 *
	 * @var integer
	 */
	protected $liObenUtmHoch;

	/**
	 * Eckkoordinaten rechts oben, Rechtswert
	 *
	 * @var integer
	 */
	protected $reObenUtmRechts;

	/**
	 * Eckkoordinaten rechts oben, Hochwert
	 *
	 * @var integer
	 */
	protected $reObenUtmHoch;

	/**
	 * Eckkoordinaten rechts unten, Rechtswert
	 *
	 * @var integer
	 */
	protected $reUntenUtmRechts;

	/**
	 * Eckkoordinaten rechts unten, Hochwert
	 *
	 * @var integer
	 */
	protected $reUntenUtmHoch;

	/**
	 * Rückseite Zone
	 *
	 * @var integer
	 */
	protected $zone2;

	/**
	 * Rückseite Eckkoordinaten links unten, Rechtswert
	 *
	 * @var integer
	 */
	protected $liUntenUtmRechts2;

	/**
	 * Rückseite Eckkoordinaten links unten, Hochwert
	 *
	 * @var integer
	 */
	protected $liUntenUtmHoch2;

	/**
	 * Rückseite Eckkoordinaten links oben, Rechtswert
	 *
	 * @var integer
	 */
	protected $liObenUtmRechts2;

	/**
	 * Rückseite Eckkoordinaten links oben, Hochwert
	 *
	 * @var integer
	 */
	protected $liObenUtmHoch2;

	/**
	 * Rückseite Eckkoordinaten rechts oben, Rechtswert
	 *
	 * @var integer
	 */
	protected $reObenUtmRechts2;

	/**
	 * Rückseite Eckkoordinaten rechts oben, Hochwert
	 *
	 * @var integer
	 */
	protected $reObenUtmHoch2;

	/**
	 * Rückseite Eckkoordinaten rechts unten, Rechtswert
	 *
	 * @var integer
	 */
	protected $reUntenUtmRechts2;

	/**
	 * Rückseite Eckkoordinaten rechts unten, Hochwert
	 *
	 * @var integer
	 */
	protected $reUntenUtmHoch2;

	/**
	 * Returns the kartenName
	 *
	 * @return string $kartenName
	 */
	public function getKartenName() {
		return $this->kartenName;
	}

	/**
	 * Sets the kartenName
	 *
	 * @param string $kartenName
	 * @return void
	 */
	public function setKartenName($kartenName) {
		$this->kartenName = $kartenName;
	}

	/**
	 * Returns the nummer
	 *
	 * @return string $nummer
	 */
	public function getNummer() {
		return $this->nummer;
	}

	/**
	 * Sets the nummer
	 *
	 * @param string $nummer
	 * @return void
	 */
	public function setNummer($nummer) {
		$this->nummer = $nummer;
	}

	/**
	 * Returns the massstab
	 *
	 * @return string $massstab
	 */
	public function getMassstab() {
		return $this->massstab;
	}

	/**
	 * Sets the massstab
	 *
	 * @param string $massstab
	 * @return void
	 */
	public function setMassstab($massstab) {
		$this->massstab = $massstab;
	}

	/**
	 * Returns the isbn13
	 *
	 * @return string $isbn13
	 */
	public function getIsbn13() {
		return $this->isbn13;
	}

	/**
	 * Sets the isbn13
	 *
	 * @param string $isbn13
	 * @return void
	 */
	public function setIsbn13($isbn13) {
		$this->isbn13 = $isbn13;
	}

	/**
	 * Returns the asin
	 *
	 * @return string $asin
	 */
	public function getAsin() {
		return $this->asin;
	}

	/**
	 * Sets the asin
	 *
	 * @param string $asin
	 * @return void
	 */
	public function setAsin($asin) {
		$this->asin = $asin;
	}

	/**
	 * Returns the stand
	 *
	 * @return string $stand
	 */
	public function getStand() {
		return $this->stand;
	}

	/**
	 * Sets the stand
	 *
	 * @param string $stand
	 * @return void
	 */
	public function setStand($stand) {
		$this->stand = $stand;
	}

	/**
	 * Returns the zone
	 *
	 * @return integer $zone
	 */
	public function getZone() {
		return $this->zone;
	}

	/**
	 * Sets the zone
	 *
	 * @param integer $zone
	 * @return void
	 */
	public function setZone($zone) {
		$this->zone = $zone;
	}

	/**
	 * Returns the liUntenUtmRechts
	 *
	 * @return integer $liUntenUtmRechts
	 */
	public function getLiUntenUtmRechts() {
		return $this->liUntenUtmRechts;
	}

	/**
	 * Sets the liUntenUtmRechts
	 *
	 * @param integer $liUntenUtmRechts
	 * @return void
	 */
	public function setLiUntenUtmRechts($liUntenUtmRechts) {
		$this->liUntenUtmRechts = $liUntenUtmRechts;
	}

	/**
	 * Returns the uliUntenUtmHoch
	 *
	 * @return integer $uliUntenUtmHoch
	 */
	public function getUliUntenUtmHoch() {
		return $this->uliUntenUtmHoch;
	}

	/**
	 * Sets the uliUntenUtmHoch
	 *
	 * @param integer $uliUntenUtmHoch
	 * @return void
	 */
	public function setUliUntenUtmHoch($uliUntenUtmHoch) {
		$this->uliUntenUtmHoch = $uliUntenUtmHoch;
	}

	/**
	 * Returns the liObenUtmRechts
	 *
	 * @return integer $liObenUtmRechts
	 */
	public function getLiObenUtmRechts() {
		return $this->liObenUtmRechts;
	}

	/**
	 * Sets the liObenUtmRechts
	 *
	 * @param integer $liObenUtmRechts
	 * @return void
	 */
	public function setLiObenUtmRechts($liObenUtmRechts) {
		$this->liObenUtmRechts = $liObenUtmRechts;
	}

	/**
	 * Returns the liObenUtmHoch
	 *
	 * @return integer $liObenUtmHoch
	 */
	public function getLiObenUtmHoch() {
		return $this->liObenUtmHoch;
	}

	/**
	 * Sets the liObenUtmHoch
	 *
	 * @param integer $liObenUtmHoch
	 * @return void
	 */
	public function setLiObenUtmHoch($liObenUtmHoch) {
		$this->liObenUtmHoch = $liObenUtmHoch;
	}

	/**
	 * Returns the reObenUtmRechts
	 *
	 * @return integer $reObenUtmRechts
	 */
	public function getReObenUtmRechts() {
		return $this->reObenUtmRechts;
	}

	/**
	 * Sets the reObenUtmRechts
	 *
	 * @param integer $reObenUtmRechts
	 * @return void
	 */
	public function setReObenUtmRechts($reObenUtmRechts) {
		$this->reObenUtmRechts = $reObenUtmRechts;
	}

	/**
	 * Returns the reObenUtmHoch
	 *
	 * @return integer $reObenUtmHoch
	 */
	public function getReObenUtmHoch() {
		return $this->reObenUtmHoch;
	}

	/**
	 * Sets the reObenUtmHoch
	 *
	 * @param integer $reObenUtmHoch
	 * @return void
	 */
	public function setReObenUtmHoch($reObenUtmHoch) {
		$this->reObenUtmHoch = $reObenUtmHoch;
	}

	/**
	 * Returns the reUntenUtmRechts
	 *
	 * @return integer $reUntenUtmRechts
	 */
	public function getReUntenUtmRechts() {
		return $this->reUntenUtmRechts;
	}

	/**
	 * Sets the reUntenUtmRechts
	 *
	 * @param integer $reUntenUtmRechts
	 * @return void
	 */
	public function setReUntenUtmRechts($reUntenUtmRechts) {
		$this->reUntenUtmRechts = $reUntenUtmRechts;
	}

	/**
	 * Returns the reUntenUtmHoch
	 *
	 * @return integer $reUntenUtmHoch
	 */
	public function getReUntenUtmHoch() {
		return $this->reUntenUtmHoch;
	}

	/**
	 * Sets the reUntenUtmHoch
	 *
	 * @param integer $reUntenUtmHoch
	 * @return void
	 */
	public function setReUntenUtmHoch($reUntenUtmHoch) {
		$this->reUntenUtmHoch = $reUntenUtmHoch;
	}

	/**
	 * Returns the zone2
	 *
	 * @return integer $zone2
	 */
	public function getZone2() {
		return $this->zone2;
	}

	/**
	 * Sets the zone2
	 *
	 * @param integer $zone2
	 * @return void
	 */
	public function setZone2($zone2) {
		$this->zone2 = $zone2;
	}

	/**
	 * Returns the liUntenUtmRechts2
	 *
	 * @return integer $liUntenUtmRechts2
	 */
	public function getLiUntenUtmRechts2() {
		return $this->liUntenUtmRechts2;
	}

	/**
	 * Sets the liUntenUtmRechts2
	 *
	 * @param integer $liUntenUtmRechts2
	 * @return void
	 */
	public function setLiUntenUtmRechts2($liUntenUtmRechts2) {
		$this->liUntenUtmRechts2 = $liUntenUtmRechts2;
	}

	/**
	 * Returns the liUntenUtmHoch2
	 *
	 * @return integer $liUntenUtmHoch2
	 */
	public function getLiUntenUtmHoch2() {
		return $this->liUntenUtmHoch2;
	}

	/**
	 * Sets the liUntenUtmHoch2
	 *
	 * @param integer $liUntenUtmHoch2
	 * @return void
	 */
	public function setLiUntenUtmHoch2($liUntenUtmHoch2) {
		$this->liUntenUtmHoch2 = $liUntenUtmHoch2;
	}

	/**
	 * Returns the liObenUtmRechts2
	 *
	 * @return integer $liObenUtmRechts2
	 */
	public function getLiObenUtmRechts2() {
		return $this->liObenUtmRechts2;
	}

	/**
	 * Sets the liObenUtmRechts2
	 *
	 * @param integer $liObenUtmRechts2
	 * @return void
	 */
	public function setLiObenUtmRechts2($liObenUtmRechts2) {
		$this->liObenUtmRechts2 = $liObenUtmRechts2;
	}

	/**
	 * Returns the liObenUtmHoch2
	 *
	 * @return integer $liObenUtmHoch2
	 */
	public function getLiObenUtmHoch2() {
		return $this->liObenUtmHoch2;
	}

	/**
	 * Sets the liObenUtmHoch2
	 *
	 * @param integer $liObenUtmHoch2
	 * @return void
	 */
	public function setLiObenUtmHoch2($liObenUtmHoch2) {
		$this->liObenUtmHoch2 = $liObenUtmHoch2;
	}

	/**
	 * Returns the reObenUtmRechts2
	 *
	 * @return integer $reObenUtmRechts2
	 */
	public function getReObenUtmRechts2() {
		return $this->reObenUtmRechts2;
	}

	/**
	 * Sets the reObenUtmRechts2
	 *
	 * @param integer $reObenUtmRechts2
	 * @return void
	 */
	public function setReObenUtmRechts2($reObenUtmRechts2) {
		$this->reObenUtmRechts2 = $reObenUtmRechts2;
	}

	/**
	 * Returns the reObenUtmHoch2
	 *
	 * @return integer $reObenUtmHoch2
	 */
	public function getReObenUtmHoch2() {
		return $this->reObenUtmHoch2;
	}

	/**
	 * Sets the reObenUtmHoch2
	 *
	 * @param integer $reObenUtmHoch2
	 * @return void
	 */
	public function setReObenUtmHoch2($reObenUtmHoch2) {
		$this->reObenUtmHoch2 = $reObenUtmHoch2;
	}

	/**
	 * Returns the reUntenUtmRechts2
	 *
	 * @return integer $reUntenUtmRechts2
	 */
	public function getReUntenUtmRechts2() {
		return $this->reUntenUtmRechts2;
	}

	/**
	 * Sets the reUntenUtmRechts2
	 *
	 * @param integer $reUntenUtmRechts2
	 * @return void
	 */
	public function setReUntenUtmRechts2($reUntenUtmRechts2) {
		$this->reUntenUtmRechts2 = $reUntenUtmRechts2;
	}

	/**
	 * Returns the reUntenUtmHoch2
	 *
	 * @return integer $reUntenUtmHoch2
	 */
	public function getReUntenUtmHoch2() {
		return $this->reUntenUtmHoch2;
	}

	/**
	 * Sets the reUntenUtmHoch2
	 *
	 * @param integer $reUntenUtmHoch2
	 * @return void
	 */
	public function setReUntenUtmHoch2($reUntenUtmHoch2) {
		$this->reUntenUtmHoch2 = $reUntenUtmHoch2;
	}

	/**
	 * Returns the land
	 *
	 * @return string $land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * Sets the land
	 *
	 * @param string $land
	 * @return void
	 */
	public function setLand($land) {
		$this->land = $land;
	}

}
?>