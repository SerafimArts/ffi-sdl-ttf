<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

interface Style
{
    public const TTF_STYLE_NORMAL = 0x00;
    public const TTF_STYLE_BOLD = 0x01;
    public const TTF_STYLE_ITALIC = 0x02;
    public const TTF_STYLE_UNDERLINE = 0x04;
    public const TTF_STYLE_STRIKETHROUGH = 0x08;
}
