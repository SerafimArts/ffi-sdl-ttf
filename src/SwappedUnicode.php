<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

interface SwappedUnicode
{
    public const UNICODE_BOM_NATIVE = 0xFEFF;
    public const UNICODE_BOM_SWAPPED = 0xFFFE;
}
