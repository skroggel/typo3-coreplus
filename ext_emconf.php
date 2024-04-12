<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "accelerator"
 *
 * Auto generated by Extension Builder 2014-02-19
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'TYPO3 Core Extended',
	'description' => 'Extension with some basic extensions for the core installation',
	'category' => 'FE',
	'author' => 'Steffen Kroggel',
	'author_email' => 'developer@steffenkroggel.de',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '9.5.1002',
    'constraints' => [
		'depends' => [
			'typo3' => '9.5.0-10.4.99',
            'filemetadata' => '9.5.0.0-10.4.99',
            'dr_seo' => '9.5.4-12.4.99',
        ],
		'conflicts' => [
		],
		'suggests' => [
            'sr_freecap' => '2.5.0-2.5.99',
        ],
	],
];
