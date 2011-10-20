<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH
 *  www.greenbanana.ch
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
 * Document
 */
class Tx_GrbZlbfile_Domain_Model_Document extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * tstamp
	 *
	 * @var DateTime
	 */
	protected $tstamp;

	/**
	 * headline
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $headline;

	/**
	 * owner
	 *
	 * @var string
	 */
	protected $owner;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * file
	 *
	 * @var string
	 */
	protected $file;

	/**
	 * frontendAccess
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUserGroup>
	 */
	protected $frontendAccess;

	/**
	 * favoritedByFrontendUser
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUser>
	 */
	protected $favoritedByFrontendUser;

	/**
	 * favoritedByCurrentFrontendUser
	 *
	 * @var string
	 */
	protected $favoritedByCurrentFrontendUser;

	/**
	 * categorys
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_Category>
	 */
	protected $categorys;


	/**
	 * document model constructor
	 *
	 * @return void
	 */
	public function __construct() {
			// Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->frontendAccess = new Tx_Extbase_Persistence_ObjectStorage();

		$this->favoritedByFrontendUser = new Tx_Extbase_Persistence_ObjectStorage();

		$this->categorys = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * get Tstamp
	 *
	 * @return DateTime
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * set headLine
	 *
	 * @param string $headline
	 * @return void
	 */
	public function setHeadline($headline) {
		$this->headline = $headline;
	}

	/**
	 * get headLine
	 *
	 * @return string
	 */
	public function getHeadline() {
		return $this->headline;
	}

	/**
	 * set owner
	 *
	 * @param string $owner
	 * @return void
	 */
	public function setOwner($owner) {
		$this->owner = $owner;
	}

	/**
	 * get owner
	 *
	 * @return string
	 */
	public function getOwner() {
		return $this->owner;
	}

	/**
	 * set description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * set file
	 *
	 * @param string $file
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * get file
	 *
	 * @return string
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * set frontendAccess
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUserGroup> $frontendAccess
	 * @return void
	 */
	public function setFrontendAccess(Tx_Extbase_Persistence_ObjectStorage $frontendAccess) {
		$this->frontendAccess = $frontendAccess;
	}

	/**
	 * get frontendAccess
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUserGroup>
	 */
	public function getFrontendAccess() {
		return $this->frontendAccess;
	}

	/**
	 * add frontendAcces
	 * the FrontendUserGroup to be added
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $frontendAcces
	 * @return void
	 */
	public function addFrontendAcces(Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $frontendAcces) {
		$this->frontendAccess->attach($frontendAcces);
	}

	/**
	 * remove frontendAcces
	 * the FrontendUserGroup to be removed
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $frontendAccesToRemove
	 * @return void
	 */
	public function removeFrontendAcces(Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $frontendAccesToRemove) {
		$this->frontendAccess->detach($frontendAccesToRemove);
	}

	/**
	 * set favoritedByFrontendUser
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUser> $favoritedByFrontendUser
	 * @return void
	 */
	public function setFavoritedByFrontendUser(Tx_Extbase_Persistence_ObjectStorage $favoritedByFrontendUser) {
		$this->favoritedByFrontendUser = $favoritedByFrontendUser;
	}

	/**
	 * get favoritedByFrontendUser
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUser>
	 */
	public function getFavoritedByFrontendUser() {
		return $this->favoritedByFrontendUser;
	}

	/**
	 * get favoritedByCurrentFrontendUser
	 *
	 * @return string
	 */
	public function getFavoritedByCurrentFrontendUser() {
		foreach ($this->favoritedByFrontendUser as $favorited) {
			if ($favorited->uid == $GLOBALS['TSFE']->fe_user->user['uid']) {
				return TRUE;
			}
		}
		return FALSE;
	}

	/**
	 * add favoritedByFrontendUser
	 * the FrontendUser to be added
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_FrontendUser $favoritedByFrontendUser
	 * @return void
	 */
	public function addFavoritedByFrontendUser(Tx_GrbZlbfile_Domain_Model_FrontendUser $favoritedByFrontendUser) {
		$this->favoritedByFrontendUser->attach($favoritedByFrontendUser);
	}

	/**
	 * remove favoritedByFrontendUser
	 * the FrontendUser to be removed
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_FrontendUser $favoritedByFrontendUserToRemove
	 * @return void
	 */
	public function removeFavoritedByFrontendUser(Tx_GrbZlbfile_Domain_Model_FrontendUser $favoritedByFrontendUserToRemove) {
		$this->favoritedByFrontendUser->detach($favoritedByFrontendUserToRemove);
	}

	/**
	 * set categorys
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_Category> $categorys
	 * @return void
	 */
	public function setCategorys(Tx_Extbase_Persistence_ObjectStorage $categorys) {
		$this->categorys = $categorys;
	}

	/**
	 * get categorys
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_Category>
	 */
	public function getCategorys() {
		return $this->categorys;
	}

	/**
	 * add category
	 * the Category to be added
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_Category $category
	 * @return void
	 */
	public function addCategory(Tx_GrbZlbfile_Domain_Model_Category $category) {
		$this->categorys->attach($category);
	}

	/**
	 * remove category
	 * the Category to be removed
	 * 
	 * @param Tx_GrbZlbfile_Domain_Model_Category $categoryToRemove
	 * @return void
	 */
	public function removeCategory(Tx_GrbZlbfile_Domain_Model_Category $categoryToRemove) {
		$this->categorys->detach($categoryToRemove);
	}

}

?>