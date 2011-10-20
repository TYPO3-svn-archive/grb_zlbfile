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
 * Controller for the Document object
 */
class Tx_GrbZlbfile_Controller_DocumentController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_GrbZlbfile_Domain_Repository_DocumentRepository
	 */
	protected $documentRepository;

	/**
	 * @var Tx_GrbZlbfile_Domain_Repository_FrontendUserRepository
	 */
	protected $frontendUserRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->documentRepository = t3lib_div::makeInstance('Tx_GrbZlbfile_Domain_Repository_DocumentRepository');
		$this->frontendUserRepository = t3lib_div::makeInstance('Tx_GrbZlbfile_Domain_Repository_FrontendUserRepository');
	}

	/**
	 * Displays all Documents
	 *
	 * @return void
	 */
	public function listAction() {
		if ($this->settings['flexform']['show']['favorit']) {
			$documents = $this->documentRepository->findFavoritesByFeUserAndFrontendAccess($GLOBALS['TSFE']->fe_user->user['uid'], $GLOBALS['TSFE']->fe_user->groupData['uid']);

			if (count($documents) > 0) {
				$this->view->assign('showDocuments', TRUE);
			} else {
				$this->view->assign('showNoFavorites', TRUE);
			}
		} else {
			$documents = $this->documentRepository->findByCategoriesAndFrontendAccess($this->settings['flexform']['show']['category'], $GLOBALS['TSFE']->fe_user->groupData['uid']);

			if (count($documents) > 0) {
				$this->view->assign('showDocuments', TRUE);
			} else {
				$this->view->assign('showNoDocuments', TRUE);
			}
		}

		$recordData = $this->request->getContentObjectData();
		$this->view->assign('ce_uid', $recordData['uid']);
		$this->view->assign('documents', $documents);
	}

	/**
	 * Updates an existing Document and forwards to the list action afterwards.
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_Document $document
	 * @return void
	 */
	public function addToFavoriteAction(Tx_GrbZlbfile_Domain_Model_Document $document) {
		$document->addFavoritedByFrontendUser($this->frontendUserRepository->findByUid($GLOBALS['TSFE']->fe_user->user['uid']));
		$this->documentRepository->update($document);
		$this->redirect('list');
	}

	/**
	 * Updates an existing Document and forwards to the list action afterwards.
	 *
	 * @param Tx_GrbZlbfile_Domain_Model_Document $document
	 * @return void
	 */
	public function removeFromFavoriteAction(Tx_GrbZlbfile_Domain_Model_Document $document) {
		$document->removeFavoritedByFrontendUser($this->frontendUserRepository->findByUid($GLOBALS['TSFE']->fe_user->user['uid']));
		$this->documentRepository->update($document);
		$this->redirect('list');
	}


}

?>