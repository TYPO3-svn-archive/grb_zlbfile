<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_grbzlbfile_domain_model_document'] = array(
	'ctrl' => $TCA['tx_grbzlbfile_domain_model_document']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, headline, owner, description, file, frontend_access, favorited_by_frontend_user, categorys',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, headline, owner, description, file, frontend_access, favorited_by_frontend_user, categorys,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_grbzlbfile_domain_model_document',
				'foreign_table_where' => 'AND tx_grbzlbfile_domain_model_document.pid=###CURRENT_PID### AND tx_grbzlbfile_domain_model_document.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' =>array(
				'type' =>'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
			'type' => 'input',
			'size' => 30,
			'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'headline' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.headline',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		
		'tstamp' => Array (
		        'exclude' => 0,
		        'label' => 'Edit date',
		        'config' => Array (
		                'type' => 'none',
		                'format' => 'date',
		                'eval' => 'date',
		         )
		),		
		
		'owner' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.owner',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
 		'description' => array (        
            'exclude' => 0,        
            'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.description',        
            'config' => array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => array(
                    '_PADDING' => 2,
                    'RTE' => array(
                        'notNewRecords' => 1,
                        'RTEonly'       => 1,
                        'type'          => 'script',
                        'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon'          => 'wizard_rte2.gif',
                        'script'        => 'wizard_rte.php',
                    ),
                ),
            ),
            'defaultExtras' => 'richtext[*]'
        ),		
		'file' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.file',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_grbzlbfile',
				'allowed' => '*',
				'disallowed' => 'php',
				'size' => 5,
			),
		),
		'frontend_access' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.frontend_access',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'fe_groups',
				'MM' => 'tx_grbzlbfile_document_frontendusergroup_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=>'tx_grbzlbfile_domain_model_frontendusergroup',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'favorited_by_frontend_user' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.favorited_by_frontend_user',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'fe_users',
				'MM' => 'tx_grbzlbfile_document_frontenduser_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=>'tx_grbzlbfile_domain_model_frontenduser',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'categorys' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_zlbfile/Resources/Private/Language/locallang_db.xml:tx_grbzlbfile_domain_model_document.categorys',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_grbzlbfile_domain_model_category',
				'MM' => 'tx_grbzlbfile_document_category_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=>'tx_grbzlbfile_domain_model_category',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);
?>