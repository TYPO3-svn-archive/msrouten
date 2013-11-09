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
class Tx_Msrouten_Domain_Model_Walls extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * wallName
	 *
	 * @var string
	 */
	protected $wallName;

	/**
	 * wallDescription
	 *
	 * @var string
	 */
	protected $wallDescription;

	/**
	 * wallHeight
	 *
	 * @var integer
	 */
	protected $wallHeight;

	/**
	 * wallPictures
	 *
	 * @var Tx_Msrouten_Domain_Model_Pictures
	 */
	protected $wallPictures;

	/**
	 * mounts
	 *
	 * @var Tx_Msrouten_Domain_Model_Mounts
	 */
	protected $mounts;

	/**
	 * Returns the wallName
	 *
	 * @return string $wallName
	 */
	public function getWallName() {
		return $this->wallName;
	}

	/**
	 * Sets the wallName
	 *
	 * @param string $wallName
	 * @return void
	 */
	public function setWallName($wallName) {
		$this->wallName = $wallName;
	}

	/**
	 * Returns the wallDescription
	 *
	 * @return string $wallDescription
	 */
	public function getWallDescription() {
		return $this->wallDescription;
	}

	/**
	 * Sets the wallDescription
	 *
	 * @param string $wallDescription
	 * @return void
	 */
	public function setWallDescription($wallDescription) {
		$this->wallDescription = $wallDescription;
	}

	/**
	 * Returns the wallPictures
	 *
	 * @return Tx_Msrouten_Domain_Model_Pictures $wallPictures
	 */
	public function getWallPictures() {
		return $this->wallPictures;
	}

	/**
	 * Sets the wallPictures
	 *
	 * @param Tx_Msrouten_Domain_Model_Pictures $wallPictures
	 * @return void
	 */
	public function setWallPictures(Tx_Msrouten_Domain_Model_Pictures $wallPictures) {
		$this->wallPictures = $wallPictures;
	}

	/**
	 * Returns the wallHeight
	 *
	 * @return integer $wallHeight
	 */
	public function getWallHeight() {
		return $this->wallHeight;
	}

	/**
	 * Sets the wallHeight
	 *
	 * @param integer $wallHeight
	 * @return void
	 */
	public function setWallHeight($wallHeight) {
		$this->wallHeight = $wallHeight;
	}

	/**
	 * Returns the mounts
	 *
	 * @return Tx_Msrouten_Domain_Model_Mounts mounts
	 */
	public function getMounts() {
		return $this->mounts;
	}

	/**
	 * Sets the mounts
	 *
	 * @param Tx_Msrouten_Domain_Model_Mounts $mounts
	 * @return Tx_Msrouten_Domain_Model_Mounts mounts
	 */
	public function setMounts(Tx_Msrouten_Domain_Model_Mounts $mounts) {
		$this->mounts = $mounts;
	}

}
?>