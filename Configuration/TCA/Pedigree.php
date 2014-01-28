<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_simhorse_domain_model_pedigree'] = array(
	'ctrl' => $TCA['tx_simhorse_domain_model_pedigree']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, external_link, sire, dam, horse',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, external_link, sire, dam, horse, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_simhorse_domain_model_pedigree',
				'foreign_table_where' => 'AND tx_simhorse_domain_model_pedigree.pid=###CURRENT_PID### AND tx_simhorse_domain_model_pedigree.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_pedigree.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'external_link' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_pedigree.external_link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sire' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_pedigree.sire',
			'config' => array(
				'type' => 'select',
		        'items' => Array (
		                Array("",0),
		            ), 				
				'foreign_table' => 'tx_simhorse_domain_model_pedigree',
				'foreign_table_where' => 'ORDER BY name ASC',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'dam' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_pedigree.dam',
			'config' => array(
				'type' => 'select',
		        'items' => Array (
		                Array("",0),
		            ),   
				'foreign_table' => 'tx_simhorse_domain_model_pedigree',
				'foreign_table_where' => 'ORDER BY name ASC',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
		'horse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simhorse/Resources/Private/Language/locallang_db.xlf:tx_simhorse_domain_model_pedigree.horse',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_simhorse_domain_model_horse',
				'foreign_table_where' => 'ORDER BY name ASC',
				'maxitems'      => 1,
				'minitems'		=> 0,
				'items' => array(
						Array("",0),

					),
			),
		),
		
	),
);

?>