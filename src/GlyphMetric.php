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
 * Class GlyphMetric
 */
final class GlyphMetric
{
    /**
     * @var int
     */
    public int $minX    = 0;

    /**
     * @var int
     */
    public int $maxX    = 0;

    /**
     * @var int
     */
    public int $minY    = 0;

    /**
     * @var int
     */
    public int $maxY    = 0;

    /**
     * @var int
     */
    public int $advance = 0;

    /**
     * GlyphMetric constructor.
     *
     * @param int $minX
     * @param int $maxX
     * @param int $minY
     * @param int $maxY
     * @param int $advance
     */
    public function __construct(int $minX, int $maxX, int $minY, int $maxY, int $advance)
    {
        $this->minX = $minX;
        $this->maxX = $maxX;
        $this->minY = $minY;
        $this->maxY = $maxY;
        $this->advance = $advance;
    }
}
