<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

/**
 * Direction flags
 *
 * @see TTF::TTF_SetFontDirection()
 */
interface Direction
{
    /**
     * Left to Right
     */
    public const TTF_DIRECTION_LTR = 0;

    /**
     * Right to Left
     */
    public const TTF_DIRECTION_RTL = 1;

    /**
     * Top to Bottom
     */
    public const TTF_DIRECTION_TTB = 2;

    /**
     * Bottom to Top
     */
    public const TTF_DIRECTION_BTT = 3;
}
