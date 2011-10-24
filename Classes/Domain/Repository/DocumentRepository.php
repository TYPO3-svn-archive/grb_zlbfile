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
 * DocumentRepository.php
 *
 * $Id$
 */


/**
 * Repository for Tx_GrbZlbfile_Domain_Model_Document
 */
class Tx_GrbZlbfile_Domain_Repository_DocumentRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * findFavoritesByFeUserAndFrontendAccess
	 *
	 * @param integer $feUser
	 * @param integer $feUserGroup
	 * @return array
	 */
	public function findFavoritesByFeUserAndFrontendAccess($feUser, $feUserGroup) {
		$query = $this->createQuery();
		$query->matching(
			$query->contains('favoritedByFrontendUser', $feUser)
		);

		$query->setOrderings(array('headline' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
		$resultByFavorites = $query->execute();

		return $this->limitByFrontendAccess($resultByFavorites, $feUserGroup);
	}

	/**
	 * findByCategoriesAndFrontendAccess
	 *
	 * @param integer $category
	 * @param integer $feUserGroup
	 * @return array
	 */
	public function findByCategoriesAndFrontendAccess($category, $feUserGroup) {
		$query = $this->createQuery();
		$query->matching(
			$query->contains('categorys', $category)
		);

		$query->setOrderings(array('headline' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
		$resultByCategories = $query->execute();

		return $this->limitByFrontendAccess($resultByCategories, $feUserGroup);
	}

	/**
	 * limitByFrontendAccess
	 * 
	 * @param Tx_GrbZlbfile_Domain_Model_Document $documents
	 * @param array $feUserGroupArray
	 * @return array
	 */
	private function limitByFrontendAccess($documents, $feUserGroupArray) {
		$result = array();
		foreach ($documents as $document) {
				// 2011-10-21:Ralf Merz
				// if no group is selected show the document globally
			if (sizeof($document->getFrontendAccess()) == 0) {
				$result[] = $document;
			} else {
				foreach ($document->getFrontendAccess() as $access) {
					if (in_array($access->getUid(), $feUserGroupArray)) {
						$result[] = $document;
						break;
					}
				}
			}
		}
		return $result;
	}
}

?>