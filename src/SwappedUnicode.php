<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\TTF;

/**
 * Interface SwappedUnicode
 */
interface SwappedUnicode
{
    /**
     * @var int
     */
    public const UNICODE_BOM_NATIVE = 0xFEFF;

    /**
     * @var int
     */
    public const UNICODE_BOM_SWAPPED = 0xFFFE;
}
