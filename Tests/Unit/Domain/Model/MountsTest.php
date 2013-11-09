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
 * Test case for class Tx_Msrouten_Domain_Model_Mounts.
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
class Tx_Msrouten_Domain_Model_MountsTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Msrouten_Domain_Model_Mounts
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Msrouten_Domain_Model_Mounts();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getMountNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMountNameForStringSetsMountName() { 
		$this->fixture->setMountName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMountName()
		);
	}
	
	/**
	 * @test
	 */
	public function getMountDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMountDescriptionForStringSetsMountDescription() { 
		$this->fixture->setMountDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMountDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getHeightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHeightForStringSetsHeight() { 
		$this->fixture->setHeight('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getMountLocationNReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMountLocationN()
		);
	}

	/**
	 * @test
	 */
	public function setMountLocationNForIntegerSetsMountLocationN() { 
		$this->fixture->setMountLocationN(12);

		$this->assertSame(
			12,
			$this->fixture->getMountLocationN()
		);
	}
	
	/**
	 * @test
	 */
	public function getMountLocationOReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMountLocationO()
		);
	}

	/**
	 * @test
	 */
	public function setMountLocationOForIntegerSetsMountLocationO() { 
		$this->fixture->setMountLocationO(12);

		$this->assertSame(
			12,
			$this->fixture->getMountLocationO()
		);
	}
	
	/**
	 * @test
	 */
	public function getMountWayToTopReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMountWayToTopForStringSetsMountWayToTop() { 
		$this->fixture->setMountWayToTop('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMountWayToTop()
		);
	}
	
	/**
	 * @test
	 */
	public function getMountWayToBotReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMountWayToBotForStringSetsMountWayToBot() { 
		$this->fixture->setMountWayToBot('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMountWayToBot()
		);
	}
	
	/**
	 * @test
	 */
	public function getGebirgeReturnsInitialValueForTx_Msrouten_Domain_Model_Gebirge() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getGebirge()
		);
	}

	/**
	 * @test
	 */
	public function setGebirgeForTx_Msrouten_Domain_Model_GebirgeSetsGebirge() { 
		$dummyObject = new Tx_Msrouten_Domain_Model_Gebirge();
		$this->fixture->setGebirge($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getGebirge()
		);
	}
	
	/**
	 * @test
	 */
	public function getKarteReturnsInitialValueForTx_Msrouten_Domain_Model_Karten() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getKarte()
		);
	}

	/**
	 * @test
	 */
	public function setKarteForTx_Msrouten_Domain_Model_KartenSetsKarte() { 
		$dummyObject = new Tx_Msrouten_Domain_Model_Karten();
		$this->fixture->setKarte($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getKarte()
		);
	}
	
}
?>