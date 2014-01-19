<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_simhorse_domain_model_horse'] = array(
	'ctrl' => $TCA['tx_simhorse_domain_model_horse']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, praefix, suffix, gender, image_praefix, description, color, color_genetics, breed, year_of_birth, breeder, previous_owner, open_for_breeding, breeding_fee, licensed_for, breeding_information, pedigree_entry, training, competition_entries, training_text',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, praefix, suffix, gender, image_praefix, description, color, color_genetics, breed, year_of_birth, breeder, previous_owner, open_for_breeding, breeding_fee, licensed_for, breeding_information, pedigree_entry, training, competition_entries, training_text, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_simhorse_domain_model_horse',
				'foreign_table_where' => 'AND tx_simhorse_domain_model_horse.pid=###CURRENT_PID### AND tx_simhorse_domain_model_horse.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
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
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
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
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'praefix' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.praefix',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'suffix' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.suffix',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gender' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.gender',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'image_praefix' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.image_praefix',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'color' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.color',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'color_genetics' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.color_genetics',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'breed' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.breed',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'year_of_birth' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.year_of_birth',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'breeder' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.breeder',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'previous_owner' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.previous_owner',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'open_for_breeding' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.open_for_breeding',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'breeding_fee' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.breeding_fee',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'licensed_for' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.licensed_for',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'breeding_information' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.breeding_information',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'pedigree_entry' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.pedigree_entry',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_simhorse_domain_model_pedigree',
				'foreign_table_where' => 'ORDER BY name ASC',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'training' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.training',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_simhorse_domain_model_training',
				'MM' => 'tx_simhorse_horse_training_mm',
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
							'table' => 'tx_simhorse_domain_model_training',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),

		'training_text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.training_text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'competition_entries' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_horse.competition_entries',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_simhorse_domain_model_competitionentry',
				'foreign_field' => 'horse',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
	),
);

?>