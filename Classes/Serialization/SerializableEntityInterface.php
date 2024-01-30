<?php
declare(strict_types=1);

namespace Madj2k\CoreExtended\Serialization;

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

/**
 * Class SerializableEntityInterface
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Steffen Kroggel
 * @package Madj2k_CoreExtended
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
interface SerializableEntityInterface
{
    /**
     * @return array
     */
    public function __serialize(): array;

    /**
     * @param $data
     * @return void
     */
    public function __unserialize($data): void;

    /**
     * @return void
     */
    public function initializeObject(): void;
}
