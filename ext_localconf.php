<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Simhorse.' . $_EXTKEY,
	'List',
	array(
		'Horse' => 'list',
		
	),
	// non-cacheable actions
	array(
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Simhorse.' . $_EXTKEY,
	'Single',
	array(
		'Horse' => 'show',
		
	),
	// non-cacheable actions
	array(
		
	)
);

?>