<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH - www.greenbanana.ch
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
 * Testcase for class Tx_GrbZlbfile_Domain_Model_FrontendUser.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Frontend Filemanager
 *
 * @author Juerg Langhard <langhard@greenbanana.ch>
 */
class Tx_GrbZlbfile_Domain_Model_FrontendUserTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbZlbfile_Domain_Model_FrontendUser
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbZlbfile_Domain_Model_FrontendUser();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getUsernameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setUsernameForStringSetsUsername() { 
		$this->fixture->setUsername('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUsername()
		);
	}
	
	/**
	 * @test
	 */
	public function getFeUserGroupsReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserGroup() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFeUserGroups()
		);
	}

	/**
	 * @test
	 */
	public function setFeUserGroupsForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserGroupSetsFeUserGroups() { 
		$feUserGroup = new Tx_GrbZlbfile_Domain_Model_FrontendUserGroup();
		$objectStorageHoldingExactlyOneFeUserGroups = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFeUserGroups->attach($feUserGroup);
		$this->fixture->setFeUserGroups($objectStorageHoldingExactlyOneFeUserGroups);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFeUserGroups,
			$this->fixture->getFeUserGroups()
		);
	}
	
	/**
	 * @test
	 */
	public function addFeUserGroupToObjectStorageHoldingFeUserGroups() {
		$feUserGroup = new Tx_GrbZlbfile_Domain_Model_FrontendUserGroup();
		$objectStorageHoldingExactlyOneFeUserGroup = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFeUserGroup->attach($feUserGroup);
		$this->fixture->addFeUserGroup($feUserGroup);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFeUserGroup,
			$this->fixture->getFeUserGroups()
		);
	}

	/**
	 * @test
	 */
	public function removeFeUserGroupFromObjectStorageHoldingFeUserGroups() {
		$feUserGroup = new Tx_GrbZlbfile_Domain_Model_FrontendUserGroup();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($feUserGroup);
		$localObjectStorage->detach($feUserGroup);
		$this->fixture->addFeUserGroup($feUserGroup);
		$this->fixture->removeFeUserGroup($feUserGroup);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFeUserGroups()
		);
	}
	
}
?>