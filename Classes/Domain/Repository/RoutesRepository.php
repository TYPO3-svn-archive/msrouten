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
class Tx_Msrouten_Domain_Repository_RoutesRepository extends Tx_Extbase_Persistence_Repository {

/**
	 * holt die Routen aus der Db nach Ortsfilter
	 * 
	 * @param int $gebirge
	 * @param int $mount 
	 * @param int $wall 
	 *
	 * @return void
	 */
	public function findAllOrt( $gebirge = 0, $mount=0, $wall=0){
	      
	        
		$query = $this->createQuery();
		
		  if ($wall>0 )  $constraints[] = $query->equals('walls.uid', $wall);
		   if ($mount>0 )  $constraints[] = $query->equals('walls.mounts.uid', $mount);
		    if ($gebirge >0 )  $constraints[] = $query->equals('walls.mounts.gebirge.uid', $gebirge );
		  
		  
		$result = $query->matching( $query->logicalAnd(  $constraints )  )->execute();
		return $result;
	}

}
?>