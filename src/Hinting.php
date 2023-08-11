<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

interface Hinting
{
    public const TTF_HINTING_NORMAL = 0;
    public const TTF_HINTING_LIGHT = 1;
    public const TTF_HINTING_MONO = 2;
    public const TTF_HINTING_NONE = 3;
    public const TTF_HINTING_LIGHT_SUBPIXEL = 4;
}
