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
class Tx_Msrouten_Domain_Model_Pictures extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Bild der Wand
	 *
	 * @var string
	 */
	protected $pictureWall;

	/**
	 * Bildunterschrift Wandbild
	 *
	 * @var string
	 */
	protected $wallPicBu;

	/**
	 * Alt-Text Wandbild
	 *
	 * @var string
	 */
	protected $wallPicAlt;

	/**
	 * TitleText Wandbild
	 *
	 * @var string
	 */
	protected $wallPicTitle;

	/**
	 * Returns the pictureWall
	 *
	 * @return string $pictureWall
	 */
	public function getPictureWall() {
		return $this->pictureWall;
	}

	/**
	 * Sets the pictureWall
	 *
	 * @param string $pictureWall
	 * @return void
	 */
	public function setPictureWall($pictureWall) {
		$this->pictureWall = $pictureWall;
	}

	/**
	 * Returns the wallPicBu
	 *
	 * @return string $wallPicBu
	 */
	public function getWallPicBu() {
		return $this->wallPicBu;
	}

	/**
	 * Sets the wallPicBu
	 *
	 * @param string $wallPicBu
	 * @return void
	 */
	public function setWallPicBu($wallPicBu) {
		$this->wallPicBu = $wallPicBu;
	}

	/**
	 * Returns the wallPicAlt
	 *
	 * @return string $wallPicAlt
	 */
	public function getWallPicAlt() {
		return $this->wallPicAlt;
	}

	/**
	 * Sets the wallPicAlt
	 *
	 * @param string $wallPicAlt
	 * @return void
	 */
	public function setWallPicAlt($wallPicAlt) {
		$this->wallPicAlt = $wallPicAlt;
	}

	/**
	 * Returns the wallPicTitle
	 *
	 * @return string $wallPicTitle
	 */
	public function getWallPicTitle() {
		return $this->wallPicTitle;
	}

	/**
	 * Sets the wallPicTitle
	 *
	 * @param string $wallPicTitle
	 * @return void
	 */
	public function setWallPicTitle($wallPicTitle) {
		$this->wallPicTitle = $wallPicTitle;
	}

}
?>