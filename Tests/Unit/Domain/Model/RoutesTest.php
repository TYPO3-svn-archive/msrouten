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
 * Test case for class Tx_Msrouten_Domain_Model_Routes.
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
class Tx_Msrouten_Domain_Model_RoutesTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Msrouten_Domain_Model_Routes
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Msrouten_Domain_Model_Routes();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getRoutenNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setRoutenNameForStringSetsRoutenName() { 
		$this->fixture->setRoutenName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getRoutenName()
		);
	}
	
	/**
	 * @test
	 */
	public function getLevelShortReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLevelShortForStringSetsLevelShort() { 
		$this->fixture->setLevelShort('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLevelShort()
		);
	}
	
	/**
	 * @test
	 */
	public function getErstbegeherReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setErstbegeherForStringSetsErstbegeher() { 
		$this->fixture->setErstbegeher('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getErstbegeher()
		);
	}
	
	/**
	 * @test
	 */
	public function getLevelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLevelForStringSetsLevel() { 
		$this->fixture->setLevel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLevel()
		);
	}
	
	/**
	 * @test
	 */
	public function getElevelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setElevelForStringSetsElevel() { 
		$this->fixture->setElevel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getElevel()
		);
	}
	
	/**
	 * @test
	 */
	public function getClimbtimeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setClimbtimeForStringSetsClimbtime() { 
		$this->fixture->setClimbtime('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getClimbtime()
		);
	}
	
	/**
	 * @test
	 */
	public function getClimbdistanceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setClimbdistanceForStringSetsClimbdistance() { 
		$this->fixture->setClimbdistance('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getClimbdistance()
		);
	}
	
	/**
	 * @test
	 */
	public function getExpositionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setExpositionForStringSetsExposition() { 
		$this->fixture->setExposition('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getExposition()
		);
	}
	
	/**
	 * @test
	 */
	public function getWandhoeheReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWandhoeheForStringSetsWandhoehe() { 
		$this->fixture->setWandhoehe('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWandhoehe()
		);
	}
	
	/**
	 * @test
	 */
	public function getMaterialReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMaterialForStringSetsMaterial() { 
		$this->fixture->setMaterial('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMaterial()
		);
	}
	
	/**
	 * @test
	 */
	public function getBeautyReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getBeauty()
		);
	}

	/**
	 * @test
	 */
	public function setBeautyForIntegerSetsBeauty() { 
		$this->fixture->setBeauty(12);

		$this->assertSame(
			12,
			$this->fixture->getBeauty()
		);
	}
	
	/**
	 * @test
	 */
	public function getFrequenzReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFrequenz()
		);
	}

	/**
	 * @test
	 */
	public function setFrequenzForIntegerSetsFrequenz() { 
		$this->fixture->setFrequenz(12);

		$this->assertSame(
			12,
			$this->fixture->getFrequenz()
		);
	}
	
	/**
	 * @test
	 */
	public function getRouteDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setRouteDescriptionForStringSetsRouteDescription() { 
		$this->fixture->setRouteDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getRouteDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getLevelLongReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLevelLongForStringSetsLevelLong() { 
		$this->fixture->setLevelLong('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLevelLong()
		);
	}
	
	/**
	 * @test
	 */
	public function getAbsicherungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAbsicherungForStringSetsAbsicherung() { 
		$this->fixture->setAbsicherung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAbsicherung()
		);
	}
	
	/**
	 * @test
	 */
	public function getZustiegReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setZustiegForStringSetsZustieg() { 
		$this->fixture->setZustieg('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getZustieg()
		);
	}
	
	/**
	 * @test
	 */
	public function getEinstiegReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEinstiegForStringSetsEinstieg() { 
		$this->fixture->setEinstieg('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEinstieg()
		);
	}
	
	/**
	 * @test
	 */
	public function getHuetteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHuetteForStringSetsHuette() { 
		$this->fixture->setHuette('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHuette()
		);
	}
	
	/**
	 * @test
	 */
	public function getHintsReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHintsForStringSetsHints() { 
		$this->fixture->setHints('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHints()
		);
	}
	
	/**
	 * @test
	 */
	public function getAbstiegReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAbstiegForStringSetsAbstieg() { 
		$this->fixture->setAbstieg('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAbstieg()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerlaufReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerlaufForStringSetsVerlauf() { 
		$this->fixture->setVerlauf('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerlauf()
		);
	}
	
	/**
	 * @test
	 */
	public function getErstbegeherLangReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setErstbegeherLangForStringSetsErstbegeherLang() { 
		$this->fixture->setErstbegeherLang('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getErstbegeherLang()
		);
	}
	
	/**
	 * @test
	 */
	public function getQuelleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setQuelleForStringSetsQuelle() { 
		$this->fixture->setQuelle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getQuelle()
		);
	}
	
	/**
	 * @test
	 */
	public function getTopoReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTopoForStringSetsTopo() { 
		$this->fixture->setTopo('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTopo()
		);
	}
	
	/**
	 * @test
	 */
	public function getTopoBuReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTopoBuForStringSetsTopoBu() { 
		$this->fixture->setTopoBu('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTopoBu()
		);
	}
	
	/**
	 * @test
	 */
	public function getTopoAltReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTopoAltForStringSetsTopoAlt() { 
		$this->fixture->setTopoAlt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTopoAlt()
		);
	}
	
	/**
	 * @test
	 */
	public function getTopoTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTopoTitleForStringSetsTopoTitle() { 
		$this->fixture->setTopoTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTopoTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getWandbildReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWandbildForStringSetsWandbild() { 
		$this->fixture->setWandbild('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWandbild()
		);
	}
	
	/**
	 * @test
	 */
	public function getWandbildBuReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWandbildBuForStringSetsWandbildBu() { 
		$this->fixture->setWandbildBu('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWandbildBu()
		);
	}
	
	/**
	 * @test
	 */
	public function getWandbildAltReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWandbildAltForStringSetsWandbildAlt() { 
		$this->fixture->setWandbildAlt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWandbildAlt()
		);
	}
	
	/**
	 * @test
	 */
	public function getWandbildTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWandbildTitleForStringSetsWandbildTitle() { 
		$this->fixture->setWandbildTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWandbildTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild1ForStringSetsActionBild1() { 
		$this->fixture->setActionBild1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild1()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild1BuReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild1BuForStringSetsActionBild1Bu() { 
		$this->fixture->setActionBild1Bu('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild1Bu()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild1AltReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild1AltForStringSetsActionBild1Alt() { 
		$this->fixture->setActionBild1Alt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild1Alt()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionbild1TitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionbild1TitleForStringSetsActionbild1Title() { 
		$this->fixture->setActionbild1Title('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionbild1Title()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild2ForStringSetsActionBild2() { 
		$this->fixture->setActionBild2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild2()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild2BuReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild2BuForStringSetsActionBild2Bu() { 
		$this->fixture->setActionBild2Bu('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild2Bu()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild2AltReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild2AltForStringSetsActionBild2Alt() { 
		$this->fixture->setActionBild2Alt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild2Alt()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild2TitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild2TitleForStringSetsActionBild2Title() { 
		$this->fixture->setActionBild2Title('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild2Title()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild3ForStringSetsActionBild3() { 
		$this->fixture->setActionBild3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild3()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild3BuReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild3BuForStringSetsActionBild3Bu() { 
		$this->fixture->setActionBild3Bu('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild3Bu()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild3AltReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild3AltForStringSetsActionBild3Alt() { 
		$this->fixture->setActionBild3Alt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild3Alt()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionBild3TitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setActionBild3TitleForStringSetsActionBild3Title() { 
		$this->fixture->setActionBild3Title('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getActionBild3Title()
		);
	}
	
	/**
	 * @test
	 */
	public function getGalerieReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGalerieForStringSetsGalerie() { 
		$this->fixture->setGalerie('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGalerie()
		);
	}
	
	/**
	 * @test
	 */
	public function getPdfReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPdfForStringSetsPdf() { 
		$this->fixture->setPdf('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPdf()
		);
	}
	
	/**
	 * @test
	 */
	public function getLinkexternReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLinkexternForStringSetsLinkextern() { 
		$this->fixture->setLinkextern('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLinkextern()
		);
	}
	
	/**
	 * @test
	 */
	public function getWallsReturnsInitialValueForTx_Msrouten_Domain_Model_Walls() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getWalls()
		);
	}

	/**
	 * @test
	 */
	public function setWallsForTx_Msrouten_Domain_Model_WallsSetsWalls() { 
		$dummyObject = new Tx_Msrouten_Domain_Model_Walls();
		$this->fixture->setWalls($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getWalls()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuideReturnsInitialValueForTx_Msrouten_Domain_Model_Guide() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getGuide()
		);
	}

	/**
	 * @test
	 */
	public function setGuideForTx_Msrouten_Domain_Model_GuideSetsGuide() { 
		$dummyObject = new Tx_Msrouten_Domain_Model_Guide();
		$this->fixture->setGuide($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getGuide()
		);
	}
	
}
?>