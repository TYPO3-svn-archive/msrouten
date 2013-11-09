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
class Tx_Msrouten_Domain_Model_Guide extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Name führer
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $guideName;

	/**
	 * guideDescription
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $guideDescription;

	/**
	 * Autor
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $guideAuthor;

	/**
	 * guideISBN
	 *
	 * @var integer
	 */
	protected $guideISBN;

	/**
	 * guidePrice
	 *
	 * @var string
	 */
	protected $guidePrice;

	/**
	 * Returns the guideName
	 *
	 * @return string $guideName
	 */
	public function getGuideName() {
		return $this->guideName;
	}

	/**
	 * Sets the guideName
	 *
	 * @param string $guideName
	 * @return void
	 */
	public function setGuideName($guideName) {
		$this->guideName = $guideName;
	}

	/**
	 * Returns the guideDescription
	 *
	 * @return string $guideDescription
	 */
	public function getGuideDescription() {
		return $this->guideDescription;
	}

	/**
	 * Sets the guideDescription
	 *
	 * @param string $guideDescription
	 * @return void
	 */
	public function setGuideDescription($guideDescription) {
		$this->guideDescription = $guideDescription;
	}

	/**
	 * Returns the guideAuthor
	 *
	 * @return string $guideAuthor
	 */
	public function getGuideAuthor() {
		return $this->guideAuthor;
	}

	/**
	 * Sets the guideAuthor
	 *
	 * @param string $guideAuthor
	 * @return void
	 */
	public function setGuideAuthor($guideAuthor) {
		$this->guideAuthor = $guideAuthor;
	}

	/**
	 * Returns the guideISBN
	 *
	 * @return integer $guideISBN
	 */
	public function getGuideISBN() {
		return $this->guideISBN;
	}

	/**
	 * Sets the guideISBN
	 *
	 * @param integer $guideISBN
	 * @return void
	 */
	public function setGuideISBN($guideISBN) {
		$this->guideISBN = $guideISBN;
	}

	/**
	 * Returns the guidePrice
	 *
	 * @return string $guidePrice
	 */
	public function getGuidePrice() {
		return $this->guidePrice;
	}

	/**
	 * Sets the guidePrice
	 *
	 * @param string $guidePrice
	 * @return void
	 */
	public function setGuidePrice($guidePrice) {
		$this->guidePrice = $guidePrice;
	}

}
?>