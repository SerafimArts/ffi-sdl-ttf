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
 * Interface Style
 */
interface Style
{
    /**
     * @var int
     */
    public const TTF_STYLE_NORMAL = 0x00;

    /**
     * @var int
     */
    public const TTF_STYLE_BOLD = 0x01;

    /**
     * @var int
     */
    public const TTF_STYLE_ITALIC = 0x02;

    /**
     * @var int
     */
    public const TTF_STYLE_UNDERLINE = 0x04;

    /**
     * @var int
     */
    public const TTF_STYLE_STRIKETHROUGH = 0x08;
}
