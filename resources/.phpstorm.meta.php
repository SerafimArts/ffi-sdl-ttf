<?php

declare(strict_types=1);

namespace PHPSTORM_META {

    registerArgumentsSet(
        'ffi_sdl_ttf_ttf_font_hinting',
        \Serafim\SDL\TTF\Hinting::TTF_HINTING_NORMAL,
        \Serafim\SDL\TTF\Hinting::TTF_HINTING_LIGHT,
        \Serafim\SDL\TTF\Hinting::TTF_HINTING_MONO,
        \Serafim\SDL\TTF\Hinting::TTF_HINTING_NONE,
        \Serafim\SDL\TTF\Hinting::TTF_HINTING_LIGHT_SUBPIXEL
    );

    expectedArguments(\Serafim\SDL\TTF\TTF::TTF_SetFontHinting(), 0, argumentsSet('ffi_sdl_ttf_ttf_font_hinting'));
    expectedReturnValues(\Serafim\SDL\TTF\TTF::TTF_GetFontHinting(), argumentsSet('ffi_sdl_ttf_ttf_font_hinting'));

    registerArgumentsSet(
        'ffi_sdl_ttf_ttf_font_style',
        \Serafim\SDL\TTF\Style::TTF_STYLE_NORMAL,
        \Serafim\SDL\TTF\Style::TTF_STYLE_BOLD,
        \Serafim\SDL\TTF\Style::TTF_STYLE_ITALIC,
        \Serafim\SDL\TTF\Style::TTF_STYLE_UNDERLINE,
        \Serafim\SDL\TTF\Style::TTF_STYLE_STRIKETHROUGH
    );

    expectedArguments(\Serafim\SDL\TTF\TTF::TTF_SetFontStyle(), 1, argumentsSet('ffi_sdl_ttf_ttf_font_style'));
    expectedReturnValues(\Serafim\SDL\TTF\TTF::TTF_GetFontStyle(), argumentsSet('ffi_sdl_ttf_ttf_font_style'));

    registerArgumentsSet(
        'ffi_sdl_ttf_ttf_swapped_unicode',
        \Serafim\SDL\TTF\SwappedUnicode::UNICODE_BOM_NATIVE,
        \Serafim\SDL\TTF\SwappedUnicode::UNICODE_BOM_SWAPPED
    );

    expectedArguments(\Serafim\SDL\TTF\TTF::TTF_ByteSwappedUNICODE(), 0, argumentsSet('ffi_sdl_ttf_ttf_swapped_unicode'));

    registerArgumentsSet(
        'ffi_sdl_ttf_ttf_wrapped_align',
        \Serafim\SDL\TTF\WrappedAlign::TTF_WRAPPED_ALIGN_LEFT,
        \Serafim\SDL\TTF\WrappedAlign::TTF_WRAPPED_ALIGN_CENTER,
        \Serafim\SDL\TTF\WrappedAlign::TTF_WRAPPED_ALIGN_RIGHT
    );

    expectedArguments(\Serafim\SDL\TTF\TTF::TTF_SetFontWrappedAlign(), 1, argumentsSet('ffi_sdl_ttf_ttf_wrapped_align'));
    expectedReturnValues(\Serafim\SDL\TTF\TTF::TTF_GetFontWrappedAlign(), argumentsSet('ffi_sdl_ttf_ttf_wrapped_align'));

}
