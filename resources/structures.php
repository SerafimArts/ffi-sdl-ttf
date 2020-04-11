<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\TTF;

use FFI\CData;
use FFI\CPtr;
use FFI\CScalar;
use FFI\CStruct;

/**
 * @mixin CStruct
 */
final class Font extends CData
{
}

/**
 * @mixin CStruct
 * @mixin CPtr
 * @mixin Font
 */
final class FontPtr extends CData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): Font
    {
    }

    private function offsetSet(int $i, Font $d): void
    {
    }
}
