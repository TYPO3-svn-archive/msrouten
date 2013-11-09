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
 * Test case for class Tx_Msrouten_Domain_Model_Karten.
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
class Tx_Msrouten_Domain_Model_KartenTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Msrouten_Domain_Model_Karten
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Msrouten_Domain_Model_Karten();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getKartenNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKartenNameForStringSetsKartenName() { 
		$this->fixture->setKartenName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKartenName()
		);
	}
	
	/**
	 * @test
	 */
	public function getNummerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNummerForStringSetsNummer() { 
		$this->fixture->setNummer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNummer()
		);
	}
	
	/**
	 * @test
	 */
	public function getMassstabReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMassstabForStringSetsMassstab() { 
		$this->fixture->setMassstab('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMassstab()
		);
	}
	
	/**
	 * @test
	 */
	public function getLandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLandForStringSetsLand() { 
		$this->fixture->setLand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLand()
		);
	}
	
	/**
	 * @test
	 */
	public function getIsbn13ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIsbn13ForStringSetsIsbn13() { 
		$this->fixture->setIsbn13('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIsbn13()
		);
	}
	
	/**
	 * @test
	 */
	public function getAsinReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAsinForStringSetsAsin() { 
		$this->fixture->setAsin('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAsin()
		);
	}
	
	/**
	 * @test
	 */
	public function getStandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStandForStringSetsStand() { 
		$this->fixture->setStand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStand()
		);
	}
	
	/**
	 * @test
	 */
	public function getZoneReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZone()
		);
	}

	/**
	 * @test
	 */
	public function setZoneForIntegerSetsZone() { 
		$this->fixture->setZone(12);

		$this->assertSame(
			12,
			$this->fixture->getZone()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiUntenUtmRechtsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiUntenUtmRechts()
		);
	}

	/**
	 * @test
	 */
	public function setLiUntenUtmRechtsForIntegerSetsLiUntenUtmRechts() { 
		$this->fixture->setLiUntenUtmRechts(12);

		$this->assertSame(
			12,
			$this->fixture->getLiUntenUtmRechts()
		);
	}
	
	/**
	 * @test
	 */
	public function getUliUntenUtmHochReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getUliUntenUtmHoch()
		);
	}

	/**
	 * @test
	 */
	public function setUliUntenUtmHochForIntegerSetsUliUntenUtmHoch() { 
		$this->fixture->setUliUntenUtmHoch(12);

		$this->assertSame(
			12,
			$this->fixture->getUliUntenUtmHoch()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiObenUtmRechtsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiObenUtmRechts()
		);
	}

	/**
	 * @test
	 */
	public function setLiObenUtmRechtsForIntegerSetsLiObenUtmRechts() { 
		$this->fixture->setLiObenUtmRechts(12);

		$this->assertSame(
			12,
			$this->fixture->getLiObenUtmRechts()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiObenUtmHochReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiObenUtmHoch()
		);
	}

	/**
	 * @test
	 */
	public function setLiObenUtmHochForIntegerSetsLiObenUtmHoch() { 
		$this->fixture->setLiObenUtmHoch(12);

		$this->assertSame(
			12,
			$this->fixture->getLiObenUtmHoch()
		);
	}
	
	/**
	 * @test
	 */
	public function getReObenUtmRechtsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReObenUtmRechts()
		);
	}

	/**
	 * @test
	 */
	public function setReObenUtmRechtsForIntegerSetsReObenUtmRechts() { 
		$this->fixture->setReObenUtmRechts(12);

		$this->assertSame(
			12,
			$this->fixture->getReObenUtmRechts()
		);
	}
	
	/**
	 * @test
	 */
	public function getReObenUtmHochReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReObenUtmHoch()
		);
	}

	/**
	 * @test
	 */
	public function setReObenUtmHochForIntegerSetsReObenUtmHoch() { 
		$this->fixture->setReObenUtmHoch(12);

		$this->assertSame(
			12,
			$this->fixture->getReObenUtmHoch()
		);
	}
	
	/**
	 * @test
	 */
	public function getReUntenUtmRechtsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReUntenUtmRechts()
		);
	}

	/**
	 * @test
	 */
	public function setReUntenUtmRechtsForIntegerSetsReUntenUtmRechts() { 
		$this->fixture->setReUntenUtmRechts(12);

		$this->assertSame(
			12,
			$this->fixture->getReUntenUtmRechts()
		);
	}
	
	/**
	 * @test
	 */
	public function getReUntenUtmHochReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReUntenUtmHoch()
		);
	}

	/**
	 * @test
	 */
	public function setReUntenUtmHochForIntegerSetsReUntenUtmHoch() { 
		$this->fixture->setReUntenUtmHoch(12);

		$this->assertSame(
			12,
			$this->fixture->getReUntenUtmHoch()
		);
	}
	
	/**
	 * @test
	 */
	public function getZone2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZone2()
		);
	}

	/**
	 * @test
	 */
	public function setZone2ForIntegerSetsZone2() { 
		$this->fixture->setZone2(12);

		$this->assertSame(
			12,
			$this->fixture->getZone2()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiUntenUtmRechts2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiUntenUtmRechts2()
		);
	}

	/**
	 * @test
	 */
	public function setLiUntenUtmRechts2ForIntegerSetsLiUntenUtmRechts2() { 
		$this->fixture->setLiUntenUtmRechts2(12);

		$this->assertSame(
			12,
			$this->fixture->getLiUntenUtmRechts2()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiUntenUtmHoch2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiUntenUtmHoch2()
		);
	}

	/**
	 * @test
	 */
	public function setLiUntenUtmHoch2ForIntegerSetsLiUntenUtmHoch2() { 
		$this->fixture->setLiUntenUtmHoch2(12);

		$this->assertSame(
			12,
			$this->fixture->getLiUntenUtmHoch2()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiObenUtmRechts2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiObenUtmRechts2()
		);
	}

	/**
	 * @test
	 */
	public function setLiObenUtmRechts2ForIntegerSetsLiObenUtmRechts2() { 
		$this->fixture->setLiObenUtmRechts2(12);

		$this->assertSame(
			12,
			$this->fixture->getLiObenUtmRechts2()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiObenUtmHoch2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLiObenUtmHoch2()
		);
	}

	/**
	 * @test
	 */
	public function setLiObenUtmHoch2ForIntegerSetsLiObenUtmHoch2() { 
		$this->fixture->setLiObenUtmHoch2(12);

		$this->assertSame(
			12,
			$this->fixture->getLiObenUtmHoch2()
		);
	}
	
	/**
	 * @test
	 */
	public function getReObenUtmRechts2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReObenUtmRechts2()
		);
	}

	/**
	 * @test
	 */
	public function setReObenUtmRechts2ForIntegerSetsReObenUtmRechts2() { 
		$this->fixture->setReObenUtmRechts2(12);

		$this->assertSame(
			12,
			$this->fixture->getReObenUtmRechts2()
		);
	}
	
	/**
	 * @test
	 */
	public function getReObenUtmHoch2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReObenUtmHoch2()
		);
	}

	/**
	 * @test
	 */
	public function setReObenUtmHoch2ForIntegerSetsReObenUtmHoch2() { 
		$this->fixture->setReObenUtmHoch2(12);

		$this->assertSame(
			12,
			$this->fixture->getReObenUtmHoch2()
		);
	}
	
	/**
	 * @test
	 */
	public function getReUntenUtmRechts2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReUntenUtmRechts2()
		);
	}

	/**
	 * @test
	 */
	public function setReUntenUtmRechts2ForIntegerSetsReUntenUtmRechts2() { 
		$this->fixture->setReUntenUtmRechts2(12);

		$this->assertSame(
			12,
			$this->fixture->getReUntenUtmRechts2()
		);
	}
	
	/**
	 * @test
	 */
	public function getReUntenUtmHoch2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getReUntenUtmHoch2()
		);
	}

	/**
	 * @test
	 */
	public function setReUntenUtmHoch2ForIntegerSetsReUntenUtmHoch2() { 
		$this->fixture->setReUntenUtmHoch2(12);

		$this->assertSame(
			12,
			$this->fixture->getReUntenUtmHoch2()
		);
	}
	
}
?>