<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Filemanager',
	'Filemanager'
);

$pluginSignature = str_replace('_', '', $_EXTKEY) . '_' . filemanager;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_filemanager.xml');


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Frontend Filemanager');


t3lib_extMgm::addLLrefForTCAdescr('tx_grbzlbfile_domain_model_category', 'EXT:grb_zlbfile/Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbzlbfile_domain_model_category');
$TCA['tx_grbzlbfile_domain_model_category'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_category',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => true,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbzlbfile_domain_model_category.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbzlbfile_domain_model_document', 'EXT:grb_zlbfile/Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_document.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbzlbfile_domain_model_document');
$TCA['tx_grbzlbfile_domain_model_document'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document',
		'label' => 'headline',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => true,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Document.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbzlbfile_domain_model_document.gif'
	),
);

/*
t3lib_extMgm::addLLrefForTCAdescr('tx_grbzlbfile_domain_model_frontenduser', 'EXT:grb_zlbfile/Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_frontenduser.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbzlbfile_domain_model_frontenduser');
$TCA['tx_grbzlbfile_domain_model_frontenduser'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_frontenduser',
		'label' 			=> 'username',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FrontendUser.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbzlbfile_domain_model_frontenduser.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbzlbfile_domain_model_frontendusergroup', 'EXT:grb_zlbfile/Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_frontendusergroup.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbzlbfile_domain_model_frontendusergroup');
$TCA['tx_grbzlbfile_domain_model_frontendusergroup'] = array(
	'ctrl' => array(
		'title'				=> 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_frontendusergroup',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'dividers2tabs' => true,
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FrontendUserGroup.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbzlbfile_domain_model_frontendusergroup.gif'
	),
);
*/
?>