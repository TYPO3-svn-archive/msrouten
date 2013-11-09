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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Msrouten_Domain_Model_Guide.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage MS Routen
 *
 * @author Sebastian B. <info@buzted.de>
 */
class Tx_Msrouten_Domain_Model_GuideTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Msrouten_Domain_Model_Guide
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Msrouten_Domain_Model_Guide();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getGuideNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGuideNameForStringSetsGuideName() { 
		$this->fixture->setGuideName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGuideName()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuideDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGuideDescriptionForStringSetsGuideDescription() { 
		$this->fixture->setGuideDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGuideDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuideAuthorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGuideAuthorForStringSetsGuideAuthor() { 
		$this->fixture->setGuideAuthor('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGuideAuthor()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuideISBNReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGuideISBN()
		);
	}

	/**
	 * @test
	 */
	public function setGuideISBNForIntegerSetsGuideISBN() { 
		$this->fixture->setGuideISBN(12);

		$this->assertSame(
			12,
			$this->fixture->getGuideISBN()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuidePriceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGuidePriceForStringSetsGuidePrice() { 
		$this->fixture->setGuidePrice('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGuidePrice()
		);
	}
	
}
?>