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
 define("MSROUTEN_EINZELANSICHT_PFAD",     "alpinklettern_details.html?&tx_ttnews%5Btt_news%5D=");
class Tx_Msrouten_Domain_Model_Routes extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Routenname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $routenName;

	/**
	 * Schwierigkeit kurz
	 *
	 * @var string
	 */
	protected $levelShort;

	/**
	 * Erstbegeher
	 *
	 * @var string
	 */
	protected $erstbegeher;

	/**
	 * Schwierigkeit
	 *
	 * @var string
	 */
	protected $level;

	/**
	 * E-Bewertung
	 *
	 * @var string
	 */
	protected $elevel;

	/**
	 * Kletterzeit
	 *
	 * @var string
	 */
	protected $climbtime;

	/**
	 * Kletterlänge
	 *
	 * @var string
	 */
	protected $climbdistance;

	/**
	 * Exposition
	 *
	 * @var string
	 */
	protected $exposition;

	/**
	 * Wandhöhe
	 *
	 * @var string
	 */
	protected $wandhoehe;

	/**
	 * Ausrüstung
	 *
	 * @var string
	 */
	protected $material;

	/**
	 * Topo Bildunterschrift
	 *
	 * @var integer
	 */
	protected $beauty;

	/**
	 * Frequenz
	 *
	 * @var integer
	 */
	protected $frequenz;

	/**
	 * Charakter
	 *
	 * @var string
	 */
	protected $routeDescription;

	/**
	 * levelLong
	 *
	 * @var string
	 */
	protected $levelLong;
	
	
	/**
	 * alevel
	 *
	 * @var string
	 */
	protected $alevel;

	/**
	 * Absicherung
	 *
	 * @var string
	 */
	protected $absicherung;

	/**
	 * Zustieg
	 *
	 * @var string
	 */
	protected $zustieg;

	/**
	 * Einstieg
	 *
	 * @var string
	 */
	protected $einstieg;

	/**
	 * Stützpunkt
	 *
	 * @var string
	 */
	protected $huette;

	/**
	 * hints
	 *
	 * @var string
	 */
	protected $hints;

	/**
	 * Abstieg
	 *
	 * @var string
	 */
	protected $abstieg;

	/**
	 * Routenverlauf
	 *
	 * @var string
	 */
	protected $verlauf;

	/**
	 * Topo Bildunterschrift
	 *
	 * @var string
	 */
	protected $erstbegeherLang;

	/**
	 * Informationsquelle
	 *
	 * @var string
	 */
	protected $quelle;

	/**
	 * Topo
	 *
	 * @var string
	 */
	protected $topo;

	/**
	 * Topo Bildunterschrift
	 *
	 * @var string
	 */
	protected $topoBu;

	/**
	 * Topo AltText
	 *
	 * @var string
	 */
	protected $topoAlt;

	/**
	 * Topo TitleText
	 *
	 * @var string
	 */
	protected $topoTitle;

	/**
	 * Wandbild
	 *
	 * @var string
	 */
	protected $wandbild;

	/**
	 * Wandbild Bildunterschrift
	 *
	 * @var string
	 */
	protected $wandbildBu;

	/**
	 * Wandbild AltText
	 *
	 * @var string
	 */
	protected $wandbildAlt;

	/**
	 * Wandbild TitleText
	 *
	 * @var string
	 */
	protected $wandbildTitle;

	/**
	 * Actionbild 1
	 *
	 * @var string
	 */
	protected $actionBild1;

	/**
	 * Actionbild1 Bildunterschrift
	 *
	 * @var string
	 */
	protected $actionBild1Bu;

	/**
	 * Actionbild 1 AltText
	 *
	 * @var string
	 */
	protected $actionBild1Alt;

	/**
	 * Actionbild 1 TitleText
	 *
	 * @var string
	 */
	protected $actionbild1Title;

	/**
	 * Actionbild 2
	 *
	 * @var string
	 */
	protected $actionBild2;

	/**
	 * Actionbild 2 Bildunterschrift
	 *
	 * @var string
	 */
	protected $actionBild2Bu;

	/**
	 * Actionbild 2 AltText
	 *
	 * @var string
	 */
	protected $actionBild2Alt;

	/**
	 * Actionbild 2 TitleText
	 *
	 * @var string
	 */
	protected $actionBild2Title;

	/**
	 * Actionbild 3
	 *
	 * @var string
	 */
	protected $actionBild3;

	/**
	 * Actionbild 3 Bildunterschrift
	 *
	 * @var string
	 */
	protected $actionBild3Bu;

	/**
	 * Actionbild 3 AltText
	 *
	 * @var string
	 */
	protected $actionBild3Alt;

	/**
	 * Actionbild 3 TitleText
	 *
	 * @var string
	 */
	protected $actionBild3Title;

	/**
	 * Link zu Galerie
	 *
	 * @var string
	 */
	protected $galerie;

	/**
	 * PDF-Datei
	 *
	 * @var string
	 */
	protected $pdf;

	/**
	 * Externer Link
	 *
	 * @var string
	 */
	protected $linkextern;

	/**
	 * walls
	 *
	 * @var Tx_Msrouten_Domain_Model_Walls
	 * @lazy
	 */
	protected $walls;

	/**
	 * Führer
	 *
	 * @var Tx_Msrouten_Domain_Model_Guide
	 * @lazy
	 */
	protected $guide;

	/**
	 * Returns the routeDescription
	 *
	 * @return string $routeDescription
	 */
	public function getRouteDescription() {
		 $pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->routeDescription);
		
	}

	/**
	 * Sets the routeDescription
	 *
	 * @param string $routeDescription
	 * @return void
	 */
	public function setRouteDescription($routeDescription) {
		$this->routeDescription = $routeDescription;
	}

	/**
	 * Returns the level
	 *
	 * @return string $level
	 */
	public function getLevel() {
		return $this->level;
	}

	/**
	 * Sets the level
	 *
	 * @param string $level
	 * @return void
	 */
	public function setLevel($level) {
		$this->level = $level;
	}

	/**
	 * Returns the levelLong
	 *
	 * @return string $levelLong
	 */
	public function getLevelLong() {
		return $this->levelLong;
	}

	/**
	 * Sets the levelLong
	 *
	 * @param string $levelLong
	 * @return void
	 */
	public function setLevelLong($levelLong) {
		$this->levelLong = $levelLong;
	}
	
	/**
	 * Returns the alevel
	 *
	 * @return string $alevel
	 */
	public function getAlevel() {
		return $this->alevel;
	}

	/**
	 * Sets the alevel
	 *
	 * @param string $alevel
	 * @return void
	 */
	public function setAlevel( $alevel ) {
		$this->alevel = $alevel;
	}
	
	

	/**
	 * Returns the elevel
	 *
	 * @return string $elevel
	 */
	public function getElevel() {
		return $this->elevel;
	}

	/**
	 * Sets the elevel
	 *
	 * @param string $elevel
	 * @return void
	 */
	public function setElevel($elevel) {
		$this->elevel = $elevel;
	}

	/**
	 * Returns the pdf
	 *
	 * @return string $pdf
	 */
	public function getPdf() {
		return $this->pdf;
	}

	/**
	 * Sets the pdf
	 *
	 * @param string $pdf
	 * @return void
	 */
	public function setPdf($pdf) {
		$this->pdf = $pdf;
	}

	/**
	 * Returns the topo
	 *
	 * @return string topo
	 */
	public function getTopo() {
		return $this->topo;
	}

	/**
	 * Sets the topo
	 *
	 * @param string $topo
	 * @return string topo
	 */
	public function setTopo($topo) {
		$this->topo = $topo;
	}

	/**
	 * Returns the hints
	 *
	 * @return string $hints
	 */
	public function getHints() {
		$pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->hints);
		
	}

	/**
	 * Sets the hints
	 *
	 * @param string $hints
	 * @return void
	 */
	public function setHints($hints) {
		$this->hints = $hints;
	}

	/**
	 * Returns the guide
	 *
	 * @return Tx_Msrouten_Domain_Model_Guide $guide
	 */
	public function getGuide() {
		$pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->guide);
		
	}

	/**
	 * Sets the guide
	 *
	 * @param Tx_Msrouten_Domain_Model_Guide $guide
	 * @return void
	 */
	public function setGuide(Tx_Msrouten_Domain_Model_Guide $guide) {
		$this->guide = $guide;
	}

	/**
	 * Returns the climbtime
	 *
	 * @return string climbtime
	 */
	public function getClimbtime() {
		return $this->climbtime;
	}

	/**
	 * Sets the climbtime
	 *
	 * @param string $climbtime
	 * @return string climbtime
	 */
	public function setClimbtime($climbtime) {
		$this->climbtime = $climbtime;
	}

	/**
	 * Returns the climbdistance
	 *
	 * @return string climbdistance
	 */
	public function getClimbdistance() {
		return $this->climbdistance;
	}

	/**
	 * Sets the climbdistance
	 *
	 * @param string $climbdistance
	 * @return string climbdistance
	 */
	public function setClimbdistance($climbdistance) {
		$this->climbdistance = $climbdistance;
	}

	/**
	 * Returns the walls
	 *
	 * @return Tx_Msrouten_Domain_Model_Walls walls
	 */
	public function getWalls() {
		return $this->walls;
	}

	/**
	 * Sets the walls
	 *
	 * @param Tx_Msrouten_Domain_Model_Walls $walls
	 * @return Tx_Msrouten_Domain_Model_Walls walls
	 */
	public function setWalls(Tx_Msrouten_Domain_Model_Walls $walls) {
		$this->walls = $walls;
	}

	/**
	 * Returns the routenName
	 *
	 * @return string routenName
	 */
	public function getRoutenName() {
		return $this->routenName;
	}

	/**
	 * Sets the routenName
	 *
	 * @param string $routenName
	 * @return string routenName
	 */
	public function setRoutenName($routenName) {
		$this->routenName = $routenName;
	}

	/**
	 * Returns the erstbegeher
	 *
	 * @return string erstbegeher
	 */
	public function getErstbegeher() {
		return $this->erstbegeher;
	}

	/**
	 * Sets the erstbegeher
	 *
	 * @param string $erstbegeher
	 * @return string erstbegeher
	 */
	public function setErstbegeher($erstbegeher) {
		$this->erstbegeher = $erstbegeher;
	}

	/**
	 * Returns the levelShort
	 *
	 * @return string $levelShort
	 */
	public function getLevelShort() {
		return $this->levelShort;
	}

	/**
	 * Sets the levelShort
	 *
	 * @param string $levelShort
	 * @return void
	 */
	public function setLevelShort($levelShort) {
		$this->levelShort = $levelShort;
	}

	/**
	 * Returns the zustieg
	 *
	 * @return string zustieg
	 */
	public function getZustieg() {
		$pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->zustieg);
	}

	/**
	 * Sets the zustieg
	 *
	 * @param string $zustieg
	 * @return string zustieg
	 */
	public function setZustieg($zustieg) {
		$this->zustieg = $zustieg;
	}

	/**
	 * Returns the einstieg
	 *
	 * @return string einstieg
	 */
	public function getEinstieg() {
		$pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->einstieg);
		
	}

	/**
	 * Sets the einstieg
	 *
	 * @param string $einstieg
	 * @return string einstieg
	 */
	public function setEinstieg($einstieg) {
		$this->einstieg = $einstieg;
	}

	/**
	 * Returns the exposition
	 *
	 * @return string exposition
	 */
	public function getExposition() {
		return $this->exposition;
	}

	/**
	 * Sets the exposition
	 *
	 * @param string $exposition
	 * @return string exposition
	 */
	public function setExposition($exposition) {
		$this->exposition = $exposition;
	}

	/**
	 * Returns the wandhoehe
	 *
	 * @return string $wandhoehe
	 */
	public function getWandhoehe() {
		return $this->wandhoehe;
	}

	/**
	 * Sets the wandhoehe
	 *
	 * @param string $wandhoehe
	 * @return void
	 */
	public function setWandhoehe($wandhoehe) {
		$this->wandhoehe = $wandhoehe;
	}

	/**
	 * Returns the material
	 *
	 * @return string $material
	 */
	public function getMaterial() {
		return $this->material;
	}

	/**
	 * Sets the material
	 *
	 * @param string $material
	 * @return void
	 */
	public function setMaterial($material) {
		$this->material = $material;
	}

	/**
	 * Returns the beauty
	 *
	 * @return integer $beauty
	 */
	public function getBeauty() {
		return $this->beauty;
	}

	/**
	 * Sets the beauty
	 *
	 * @param integer $beauty
	 * @return void
	 */
	public function setBeauty($beauty) {
		$this->beauty = $beauty;
	}

	/**
	 * Returns the frequenz
	 *
	 * @return integer $frequenz
	 */
	public function getFrequenz() {
		return $this->frequenz;
	}

	/**
	 * Sets the frequenz
	 *
	 * @param integer $frequenz
	 * @return void
	 */
	public function setFrequenz($frequenz) {
		$this->frequenz = $frequenz;
	}

	/**
	 * Returns the absicherung
	 *
	 * @return string $absicherung
	 */
	public function getAbsicherung() {
		return $this->absicherung;
	}

	/**
	 * Sets the absicherung
	 *
	 * @param string $absicherung
	 * @return void
	 */
	public function setAbsicherung($absicherung) {
		$this->absicherung = $absicherung;
	}

	/**
	 * Returns the huette
	 *
	 * @return string $huette
	 */
	public function getHuette() {
		$pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->huette);
		
	}

	/**
	 * Sets the huette
	 *
	 * @param string $huette
	 * @return void
	 */
	public function setHuette($huette) {
		$this->huette = $huette;
	}

	/**
	 * Returns the verlauf
	 *
	 * @return string verlauf
	 */
	public function getVerlauf() {
		return $this->verlauf;
	}

	/**
	 * Sets the verlauf
	 *
	 * @param string $verlauf
	 * @return string verlauf
	 */
	public function setVerlauf($verlauf) {
		$this->verlauf = $verlauf;
	}

	/**
	 * Returns the abstieg
	 *
	 * @return string abstieg
	 */
	public function getAbstieg() {	
		$pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->abstieg);
		
	}

	/**
	 * Sets the abstieg
	 *
	 * @param string $abstieg
	 * @return string abstieg
	 */
	public function setAbstieg($abstieg) {
		$this->abstieg = $abstieg;
	}

	/**
	 * Returns the topoBu
	 *
	 * @return string topoBu
	 */
	public function getTopoBu() {
		 $pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->topoBu);
		
	}

	/**
	 * Sets the topoBu
	 *
	 * @param string $topoBu
	 * @return string topoBu
	 */
	public function setTopoBu($topoBu) {
		$this->topoBu = $topoBu;
	}

	/**
	 * Returns the erstbegeherLang
	 *
	 * @return string $erstbegeherLang
	 */
	public function getErstbegeherLang() {
		return $this->erstbegeherLang;
	}

	/**
	 * Sets the erstbegeherLang
	 *
	 * @param string $erstbegeherLang
	 * @return void
	 */
	public function setErstbegeherLang($erstbegeherLang) {
		$this->erstbegeherLang = $erstbegeherLang;
	}

	/**
	 * Returns the quelle
	 *
	 * @return string $quelle
	 */
	public function getQuelle() {
	        $pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->quelle);
	}

	/**
	 * Sets the quelle
	 *
	 * @param string $quelle
	 * @return void
	 */
	public function setQuelle($quelle) {
		$this->quelle = $quelle;
	}

	/**
	 * Returns the topoAlt
	 *
	 * @return string $topoAlt
	 */
	public function getTopoAlt() {
		return $this->topoAlt;
	}

	/**
	 * Sets the topoAlt
	 *
	 * @param string $topoAlt
	 * @return void
	 */
	public function setTopoAlt($topoAlt) {
		$this->topoAlt = $topoAlt;
	}

	/**
	 * Returns the topoTitle
	 *
	 * @return string $topoTitle
	 */
	public function getTopoTitle() {
		return $this->topoTitle;
	}

	/**
	 * Sets the topoTitle
	 *
	 * @param string $topoTitle
	 * @return void
	 */
	public function setTopoTitle($topoTitle) {
		$this->topoTitle = $topoTitle;
	}

	/**
	 * Returns the wandbild
	 *
	 * @return string $wandbild
	 */
	public function getWandbild() {
		return $this->wandbild;
	}

	/**
	 * Sets the wandbild
	 *
	 * @param string $wandbild
	 * @return void
	 */
	public function setWandbild($wandbild) {
		$this->wandbild = $wandbild;
	}

	/**
	 * Returns the wandbildBu
	 *
	 * @return string $wandbildBu
	 */
	public function getWandbildBu() {
		 $pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->wandbildBu);
		
	}

	/**
	 * Sets the wandbildBu
	 *
	 * @param string $wandbildBu
	 * @return void
	 */
	public function setWandbildBu($wandbildBu) {
		$this->wandbildBu = $wandbildBu;
	}

	/**
	 * Returns the wandbildAlt
	 *
	 * @return string $wandbildAlt
	 */
	public function getWandbildAlt() {
		return $this->wandbildAlt;
	}

	/**
	 * Sets the wandbildAlt
	 *
	 * @param string $wandbildAlt
	 * @return void
	 */
	public function setWandbildAlt($wandbildAlt) {
		$this->wandbildAlt = $wandbildAlt;
	}

	/**
	 * Returns the wandbildTitle
	 *
	 * @return string $wandbildTitle
	 */
	public function getWandbildTitle() {
		return $this->wandbildTitle;
	}

	/**
	 * Sets the wandbildTitle
	 *
	 * @param string $wandbildTitle
	 * @return void
	 */
	public function setWandbildTitle($wandbildTitle) {
		$this->wandbildTitle = $wandbildTitle;
	}

	/**
	 * Returns the actionBild1
	 *
	 * @return string $actionBild1
	 */
	public function getActionBild1() {
		return $this->actionBild1;
	}

	/**
	 * Sets the actionBild1
	 *
	 * @param string $actionBild1
	 * @return void
	 */
	public function setActionBild1($actionBild1) {
		$this->actionBild1 = $actionBild1;
	}

	/**
	 * Returns the actionBild1Bu
	 *
	 * @return string $actionBild1Bu
	 */
	public function getActionBild1Bu() {
		return $this->actionBild1Bu;
	}

	/**
	 * Sets the actionBild1Bu
	 *
	 * @param string $actionBild1Bu
	 * @return void
	 */
	public function setActionBild1Bu($actionBild1Bu) {
		$this->actionBild1Bu = $actionBild1Bu;
	}

	/**
	 * Returns the actionBild1Alt
	 *
	 * @return string $actionBild1Alt
	 */
	public function getActionBild1Alt() {
		return $this->actionBild1Alt;
	}

	/**
	 * Sets the actionBild1Alt
	 *
	 * @param string $actionBild1Alt
	 * @return void
	 */
	public function setActionBild1Alt($actionBild1Alt) {
		$this->actionBild1Alt = $actionBild1Alt;
	}

	/**
	 * Returns the actionbild1Title
	 *
	 * @return string $actionbild1Title
	 */
	public function getActionbild1Title() {
		return $this->actionbild1Title;
	}

	/**
	 * Sets the actionbild1Title
	 *
	 * @param string $actionbild1Title
	 * @return void
	 */
	public function setActionbild1Title($actionbild1Title) {
		$this->actionbild1Title = $actionbild1Title;
	}

	/**
	 * Returns the actionBild2
	 *
	 * @return string $actionBild2
	 */
	public function getActionBild2() {
		return $this->actionBild2;
	}

	/**
	 * Sets the actionBild2
	 *
	 * @param string $actionBild2
	 * @return void
	 */
	public function setActionBild2($actionBild2) {
		$this->actionBild2 = $actionBild2;
	}

	/**
	 * Returns the actionBild2Bu
	 *
	 * @return string $actionBild2Bu
	 */
	public function getActionBild2Bu() {
		return $this->actionBild2Bu;
	}

	/**
	 * Sets the actionBild2Bu
	 *
	 * @param string $actionBild2Bu
	 * @return void
	 */
	public function setActionBild2Bu($actionBild2Bu) {
		$this->actionBild2Bu = $actionBild2Bu;
	}

	/**
	 * Returns the actionBild2Alt
	 *
	 * @return string $actionBild2Alt
	 */
	public function getActionBild2Alt() {
		return $this->actionBild2Alt;
	}

	/**
	 * Sets the actionBild2Alt
	 *
	 * @param string $actionBild2Alt
	 * @return void
	 */
	public function setActionBild2Alt($actionBild2Alt) {
		$this->actionBild2Alt = $actionBild2Alt;
	}

	/**
	 * Returns the actionBild2Title
	 *
	 * @return string $actionBild2Title
	 */
	public function getActionBild2Title() {
		return $this->actionBild2Title;
	}

	/**
	 * Sets the actionBild2Title
	 *
	 * @param string $actionBild2Title
	 * @return void
	 */
	public function setActionBild2Title($actionBild2Title) {
		$this->actionBild2Title = $actionBild2Title;
	}

	/**
	 * Returns the actionBild3
	 *
	 * @return string $actionBild3
	 */
	public function getActionBild3() {
		return $this->actionBild3;
	}

	/**
	 * Sets the actionBild3
	 *
	 * @param string $actionBild3
	 * @return void
	 */
	public function setActionBild3($actionBild3) {
		$this->actionBild3 = $actionBild3;
	}

	/**
	 * Returns the actionBild3Bu
	 *
	 * @return string $actionBild3Bu
	 */
	public function getActionBild3Bu() {
		return $this->actionBild3Bu;
	}

	/**
	 * Sets the actionBild3Bu
	 *
	 * @param string $actionBild3Bu
	 * @return void
	 */
	public function setActionBild3Bu($actionBild3Bu) {
		$this->actionBild3Bu = $actionBild3Bu;
	}

	/**
	 * Returns the actionBild3Alt
	 *
	 * @return string $actionBild3Alt
	 */
	public function getActionBild3Alt() {
		return $this->actionBild3Alt;
	}

	/**
	 * Sets the actionBild3Alt
	 *
	 * @param string $actionBild3Alt
	 * @return void
	 */
	public function setActionBild3Alt($actionBild3Alt) {
		$this->actionBild3Alt = $actionBild3Alt;
	}

	/**
	 * Returns the actionBild3Title
	 *
	 * @return string $actionBild3Title
	 */
	public function getActionBild3Title() {
		return $this->actionBild3Title;
	}

	/**
	 * Sets the actionBild3Title
	 *
	 * @param string $actionBild3Title
	 * @return void
	 */
	public function setActionBild3Title($actionBild3Title) {
		$this->actionBild3Title = $actionBild3Title;
	}

	/**
	 * Returns the galerie
	 *
	 * @return string $galerie
	 */
	public function getGalerie() {
		return $this->galerie;
	}

	/**
	 * Sets the galerie
	 *
	 * @param string $galerie
	 * @return void
	 */
	public function setGalerie($galerie) {
		$this->galerie = $galerie;
	}

	/**
	 * Returns the linkextern
	 *
	 * @return string $linkextern
	 */
	public function getLinkextern() {
		 $pfad = MSROUTEN_EINZELANSICHT_PFAD;
		return str_replace ( 'record:tt_news:', $pfad ,$this->linkextern);
		
	}

	/**
	 * Sets the linkextern
	 *
	 * @param string $linkextern
	 * @return void
	 */
	public function setLinkextern($linkextern) {
		
		$this->linkextern = $linkextern;
	}

}
?>