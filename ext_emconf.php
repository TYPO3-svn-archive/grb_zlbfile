<?php

########################################################################
# Extension Manager/Repository config file for ext "grb_zlbfile".
#
# Auto generated 20-08-2011 08:49
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Frontend Filemanager',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Juerg Langhard',
	'author_email' => 'langhard@greenbanana.ch',
	'author_company' => 'GreenBanana GmbH - www.greenbanana.ch',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.2',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:51:{s:21:"ExtensionBuilder.json";s:4:"0679";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"d997";s:14:"ext_tables.php";s:4:"f4c1";s:14:"ext_tables.sql";s:4:"a8c9";s:41:"Classes/Controller/DocumentController.php";s:4:"9bb7";s:33:"Classes/Domain/Model/Category.php";s:4:"09f7";s:33:"Classes/Domain/Model/Document.php";s:4:"c772";s:37:"Classes/Domain/Model/FrontendUser.php";s:4:"f38b";s:42:"Classes/Domain/Model/FrontendUserGroup.php";s:4:"1b67";s:48:"Classes/Domain/Repository/DocumentRepository.php";s:4:"22ce";s:52:"Classes/Domain/Repository/FrontendUserRepository.php";s:4:"274a";s:48:"Configuration/FlexForms/flexform_filemanager.xml";s:4:"1423";s:30:"Configuration/TCA/Category.php";s:4:"93cd";s:30:"Configuration/TCA/Document.php";s:4:"e99a";s:34:"Configuration/TCA/FrontendUser.php";s:4:"75fe";s:39:"Configuration/TCA/FrontendUserGroup.php";s:4:"0b89";s:38:"Configuration/TypoScript/constants.txt";s:4:"f68a";s:34:"Configuration/TypoScript/setup.txt";s:4:"9c92";s:40:"Resources/Private/Language/locallang.xml";s:4:"6230";s:80:"Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_category.xml";s:4:"87c7";s:80:"Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_document.xml";s:4:"1c6d";s:84:"Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_frontenduser.xml";s:4:"0927";s:89:"Resources/Private/Language/locallang_csh_tx_grbzlbfile_domain_model_frontendusergroup.xml";s:4:"04c0";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"13bf";s:38:"Resources/Private/Layouts/Default.html";s:4:"4a32";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:51:"Resources/Private/Partials/Document/FormFields.html";s:4:"d2e2";s:51:"Resources/Private/Partials/Document/Properties.html";s:4:"35aa";s:46:"Resources/Private/Templates/Document/List.html";s:4:"5bb9";s:35:"Resources/Public/Icons/Download.png";s:4:"a00c";s:38:"Resources/Public/Icons/Favorit_Set.png";s:4:"bb2b";s:40:"Resources/Public/Icons/Favorit_Unset.png";s:4:"b985";s:31:"Resources/Public/Icons/Less.png";s:4:"a3ca";s:31:"Resources/Public/Icons/More.png";s:4:"e681";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:63:"Resources/Public/Icons/tx_grbfilemngr_domain_model_category.gif";s:4:"1103";s:63:"Resources/Public/Icons/tx_grbfilemngr_domain_model_document.gif";s:4:"905a";s:67:"Resources/Public/Icons/tx_grbfilemngr_domain_model_frontenduser.gif";s:4:"1103";s:72:"Resources/Public/Icons/tx_grbfilemngr_domain_model_frontendusergroup.gif";s:4:"1103";s:62:"Resources/Public/Icons/tx_grbzlbfile_domain_model_category.gif";s:4:"1103";s:62:"Resources/Public/Icons/tx_grbzlbfile_domain_model_document.gif";s:4:"1103";s:66:"Resources/Public/Icons/tx_grbzlbfile_domain_model_frontenduser.gif";s:4:"1103";s:71:"Resources/Public/Icons/tx_grbzlbfile_domain_model_frontendusergroup.gif";s:4:"1103";s:43:"Resources/Public/JavaScript/jquery-1.4.2.js";s:4:"df0f";s:44:"Resources/Public/JavaScript/tx_grbzlbfile.js";s:4:"a11e";s:40:"Resources/Public/Style/tx_grbzlbfile.css";s:4:"6c4b";s:35:"Tests/Domain/Model/CategoryTest.php";s:4:"d708";s:35:"Tests/Domain/Model/DocumentTest.php";s:4:"ddcd";s:44:"Tests/Domain/Model/FrontendUserGroupTest.php";s:4:"dad3";s:39:"Tests/Domain/Model/FrontendUserTest.php";s:4:"5dc7";}',
);

?>