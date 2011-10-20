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
 * Testcase for class Tx_GrbZlbfile_Domain_Model_Document.
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
class Tx_GrbZlbfile_Domain_Model_DocumentTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbZlbfile_Domain_Model_Document
	 */
	protected $fixture;

	/**
	 * setUp
	 *
	 * @return void
	 */
	public function setUp() {
		$this->fixture = new Tx_GrbZlbfile_Domain_Model_Document();
	}

	/**
	 * tearDown
	 *
	 * @return void
	 */
	public function tearDown() {
		unset($this->fixture);
	}


	/**
	 * getHeadlineReturnsInitialValueForString
	 *
	 * @test
	 * @return void
	 */
	public function getHeadlineReturnsInitialValueForString() {
	}

	/**
	 * setHeadlineForStringSetsHeadline
	 *
	 * @test
	 * @return void
	 */
	public function setHeadlineForStringSetsHeadline() {
		$this->fixture->setHeadline('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHeadline()
		);
	}

	/**
	 * getOwnerReturnsInitialValueForString
	 *
	 * @test
	 * @return void
	 */
	public function getOwnerReturnsInitialValueForString() {
	}

	/**
	 * setOwnerForStringSetsOwner
	 *
	 * @test
	 * @return void
	 */
	public function setOwnerForStringSetsOwner() {
		$this->fixture->setOwner('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOwner()
		);
	}

	/**
	 * getDescriptionReturnsInitialValueForString
	 *
	 * @test
	 * @return void
	 */
	public function getDescriptionReturnsInitialValueForString() {
	}

	/**
	 * setDescriptionForStringSetsDescription
	 *
	 * @test
	 * @return void
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}

	/**
	 * getFileReturnsInitialValueForString
	 *
	 * @test
	 * @return void
	 */
	public function getFileReturnsInitialValueForString() {
	}

	/**
	 * setFileForStringSetsFile
	 *
	 * @test
	 * @return void
	 */
	public function setFileForStringSetsFile() {
		$this->fixture->setFile('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFile()
		);
	}

	/**
	 * getFrontendAccessReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserGroup
	 *
	 * @test
	 * @return void
	 */
	public function getFrontendAccessReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserGroup() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFrontendAccess()
		);
	}

	/**
	 * setFrontendAccessForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserGroupSetsFrontendAccess
	 *
	 * @test
	 * return void
	 */
	public function setFrontendAccessForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserGroupSetsFrontendAccess() {
		$frontendAcces = new Tx_GrbZlbfile_Domain_Model_FrontendUserGroup();
		$objectStorageHoldingExactlyOneFrontendAccess = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFrontendAccess->attach($frontendAcces);
		$this->fixture->setFrontendAccess($objectStorageHoldingExactlyOneFrontendAccess);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFrontendAccess,
			$this->fixture->getFrontendAccess()
		);
	}

	/**
	 * addFrontendAccesToObjectStorageHoldingFrontendAccess
	 *
	 * @test
	 * @return void
	 */
	public function addFrontendAccesToObjectStorageHoldingFrontendAccess() {
		$frontendAcces = new Tx_GrbZlbfile_Domain_Model_FrontendUserGroup();
		$objectStorageHoldingExactlyOneFrontendAcces = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFrontendAcces->attach($frontendAcces);
		$this->fixture->addFrontendAcces($frontendAcces);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFrontendAcces,
			$this->fixture->getFrontendAccess()
		);
	}

	/**
	 * removeFrontendAccesFromObjectStorageHoldingFrontendAccess
	 *
	 * @test
	 * @return void
	 */
	public function removeFrontendAccesFromObjectStorageHoldingFrontendAccess() {
		$frontendAcces = new Tx_GrbZlbfile_Domain_Model_FrontendUserGroup();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($frontendAcces);
		$localObjectStorage->detach($frontendAcces);
		$this->fixture->addFrontendAcces($frontendAcces);
		$this->fixture->removeFrontendAcces($frontendAcces);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFrontendAccess()
		);
	}

	/**
	 * getFavoritedByFrontendUserReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUser
	 *
	 * @test
	 * @return void
	 */
	public function getFavoritedByFrontendUserReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUser() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFavoritedByFrontendUser()
		);
	}

	/**
	 * setFavoritedByFrontendUserForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserSetsFavoritedByFrontendUser
	 *
	 * @test
	 * @return void
	 */
	public function setFavoritedByFrontendUserForObjectStorageContainingTx_GrbZlbfile_Domain_Model_FrontendUserSetsFavoritedByFrontendUser() {
		$favoritedByFrontendUser = new Tx_GrbZlbfile_Domain_Model_FrontendUser();
		$objectStorageHoldingExactlyOneFavoritedByFrontendUser = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFavoritedByFrontendUser->attach($favoritedByFrontendUser);
		$this->fixture->setFavoritedByFrontendUser($objectStorageHoldingExactlyOneFavoritedByFrontendUser);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFavoritedByFrontendUser,
			$this->fixture->getFavoritedByFrontendUser()
		);
	}

	/**
	 * addFavoritedByFrontendUserToObjectStorageHoldingFavoritedByFrontendUser
	 *
	 * @test
	 * @return void
	 */
	public function addFavoritedByFrontendUserToObjectStorageHoldingFavoritedByFrontendUser() {
		$favoritedByFrontendUser = new Tx_GrbZlbfile_Domain_Model_FrontendUser();
		$objectStorageHoldingExactlyOneFavoritedByFrontendUser = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFavoritedByFrontendUser->attach($favoritedByFrontendUser);
		$this->fixture->addFavoritedByFrontendUser($favoritedByFrontendUser);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFavoritedByFrontendUser,
			$this->fixture->getFavoritedByFrontendUser()
		);
	}

	/**
	 * removeFavoritedByFrontendUserFromObjectStorageHoldingFavoritedByFrontendUser
	 *
	 * @test
	 * @return void
	 */
	public function removeFavoritedByFrontendUserFromObjectStorageHoldingFavoritedByFrontendUser() {
		$favoritedByFrontendUser = new Tx_GrbZlbfile_Domain_Model_FrontendUser();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($favoritedByFrontendUser);
		$localObjectStorage->detach($favoritedByFrontendUser);
		$this->fixture->addFavoritedByFrontendUser($favoritedByFrontendUser);
		$this->fixture->removeFavoritedByFrontendUser($favoritedByFrontendUser);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFavoritedByFrontendUser()
		);
	}

	/**
	 * getCategorysReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_Category
	 *
	 * @test
	 * @return void
	 */
	public function getCategorysReturnsInitialValueForObjectStorageContainingTx_GrbZlbfile_Domain_Model_Category() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategorys()
		);
	}

	/**
	 * setCategorysForObjectStorageContainingTx_GrbZlbfile_Domain_Model_CategorySetsCategorys
	 *
	 * @test
	 * @return void
	 */
	public function setCategorysForObjectStorageContainingTx_GrbZlbfile_Domain_Model_CategorySetsCategorys() {
		$category = new Tx_GrbZlbfile_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategorys = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategorys->attach($category);
		$this->fixture->setCategorys($objectStorageHoldingExactlyOneCategorys);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategorys,
			$this->fixture->getCategorys()
		);
	}

	/**
	 * addCategoryToObjectStorageHoldingCategorys
	 *
	 * @test
	 * @return void
	 */
	public function addCategoryToObjectStorageHoldingCategorys() {
		$category = new Tx_GrbZlbfile_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategorys()
		);
	}

	/**
	 * removeCategoryFromObjectStorageHoldingCategorys
	 *
	 * @test
	 * @return void
	 */
	public function removeCategoryFromObjectStorageHoldingCategorys() {
		$category = new Tx_GrbZlbfile_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategorys()
		);
	}

}

?>