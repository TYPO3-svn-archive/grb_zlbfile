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
 * FrontendUser
 */
class Tx_GrbZlbfile_Domain_Model_FrontendUser extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * username
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $username;

	/**
	 * feUserGroups
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUserGroup>
	 */
	protected $feUserGroups;

	/**
	 * frontendUser model constructor
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
		$this->feUserGroups = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * set username
	 *
	 * @param string $username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * get username
	 *
	 * @return string
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * set feUserGroups
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUserGroup> $feUserGroups
	 * @return void
	 */
	public function setFeUserGroups(Tx_Extbase_Persistence_ObjectStorage $feUserGroups) {
		$this->feUserGroups = $feUserGroups;
	}

	/**
	 * get feUserGroups
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbZlbfile_Domain_Model_FrontendUserGroup>
	 */
	public function getFeUserGroups() {
		return $this->feUserGroups;
	}

	/**
	 * add feUserGroup
	 * the FrontendUserGroup to be added
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $feUserGroup
	 * @return void
	 */
	public function addFeUserGroup(Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $feUserGroup) {
		$this->feUserGroups->attach($feUserGroup);
	}

	/**
	 * remove feUserGroup
	 * the FrontendUserGroup to be removed
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $feUserGroupToRemove
	 * @return void
	 */
	public function removeFeUserGroup(Tx_GrbZlbfile_Domain_Model_FrontendUserGroup $feUserGroupToRemove) {
		$this->feUserGroups->detach($feUserGroupToRemove);
	}

}

?>