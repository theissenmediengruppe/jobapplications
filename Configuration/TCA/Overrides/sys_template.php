<?php
	defined('TYPO3_MODE') || die();
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jobs', 'Configuration/TypoScript', 'Jobs');

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		'jobs',
		'Configuration/TypoScript/IncludeBootstrap',
		'[Optional] Include Bootstrap for working default layout'
	);