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
 * Test case for class Tx_Msrouten_Domain_Model_Walls.
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
class Tx_Msrouten_Domain_Model_WallsTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Msrouten_Domain_Model_Walls
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Msrouten_Domain_Model_Walls();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getWallNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWallNameForStringSetsWallName() { 
		$this->fixture->setWallName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWallName()
		);
	}
	
	/**
	 * @test
	 */
	public function getWallDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWallDescriptionForStringSetsWallDescription() { 
		$this->fixture->setWallDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWallDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getWallHeightReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getWallHeight()
		);
	}

	/**
	 * @test
	 */
	public function setWallHeightForIntegerSetsWallHeight() { 
		$this->fixture->setWallHeight(12);

		$this->assertSame(
			12,
			$this->fixture->getWallHeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getWallPicturesReturnsInitialValueForTx_Msrouten_Domain_Model_Pictures() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getWallPictures()
		);
	}

	/**
	 * @test
	 */
	public function setWallPicturesForTx_Msrouten_Domain_Model_PicturesSetsWallPictures() { 
		$dummyObject = new Tx_Msrouten_Domain_Model_Pictures();
		$this->fixture->setWallPictures($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getWallPictures()
		);
	}
	
	/**
	 * @test
	 */
	public function getMountsReturnsInitialValueForTx_Msrouten_Domain_Model_Mounts() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getMounts()
		);
	}

	/**
	 * @test
	 */
	public function setMountsForTx_Msrouten_Domain_Model_MountsSetsMounts() { 
		$dummyObject = new Tx_Msrouten_Domain_Model_Mounts();
		$this->fixture->setMounts($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getMounts()
		);
	}
	
}
?>