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
 * Interface Hinting
 */
interface Hinting
{
    /**
     * @var int
     */
    public const TTF_HINTING_NORMAL = 0;

    /**
     * @var int
     */
    public const TTF_HINTING_LIGHT = 1;

    /**
     * @var int
     */
    public const TTF_HINTING_MONO = 2;

    /**
     * @var int
     */
    public const TTF_HINTING_NONE = 3;
}
