<?php
namespace Madj2k\CoreExtended\Domain\Repository;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Madj2k\CoreExtended\Utility\GeneralUtility;

/**
 * Class StoragePidAwareAbstractRepository
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Steffen Kroggel
 * @package Madj2k_CoreExtended
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
abstract class StoragePidAwareAbstractRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @const string
     */
    const extensionNameForStoragePid = '';


    /**
     * Some important things on init
     *
     * @return void
     * @throws \TYPO3\CMS\Extbase\Configuration\Exception\InvalidConfigurationTypeException
     */
    public function initializeObject(): void
    {

        // Fix: always use your own storagePid - even if called through another extension
        // This is important since the calling parameters (e.g. from opt-in) decide which storagePid takes precedence
        // Per default the storagePid of the calling extension is used
        $objectNamespace = $this->objectType;
        $namespaceParts = explode('\\', $objectNamespace);
        $extensionName = lcfirst($namespaceParts[1]);

        if (self::extensionNameForStoragePid) {
            $extensionName = self::extensionNameForStoragePid;
        }

        $settings = GeneralUtility::getTypoScriptConfiguration(
            $extensionName,
            \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK
        );

        $storagePids = GeneralUtility::intExplode(
            ',',
            $settings['persistence']['storagePid'] ?? ''
        );

        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setStoragePageIds($storagePids);
        $this->setDefaultQuerySettings($querySettings);

    }
}
