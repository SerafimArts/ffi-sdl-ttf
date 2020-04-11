<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @noinspection PhpInconsistentReturnPointsInspection
 */

declare(strict_types=1);

namespace Serafim\SDL\TTF;

use FFI\CCharPtr;
use FFI\CCharPtrPtr;
use FFI\CIntPtr;
use Serafim\SDL\Color;
use Serafim\SDL\RWopsPtr;
use Serafim\SDL\SurfacePtr;
use Serafim\SDL\VersionPtr;

/**
 * @formatter:off
 * @method VersionPtr TTF_Linked_Version()
 * @method void TTF_ByteSwappedUNICODE(int $swapped)
 * @method int TTF_Init()
 * @method FontPtr TTF_OpenFont(string|CCharPtr $file, int $ptSize)
 * @method FontPtr TTF_OpenFontIndex(string|CCharPtr $file, int $ptSize, int $index)
 * @method FontPtr TTF_OpenFontRW(RWopsPtr $src, int $freeSrc, int $ptSize)
 * @method FontPtr TTF_OpenFontIndexRW(RWopsPtr $src, int $freeSrc, int $ptSize, int $index)
 * @method int TTF_GetFontStyle(FontPtr $font)
 * @method void TTF_SetFontStyle(FontPtr $font, int $style)
 * @method int TTF_GetFontOutline(FontPtr $font)
 * @method void TTF_SetFontOutline(FontPtr $font, int $outline)
 * @method int TTF_GetFontHinting(FontPtr $font)
 * @method void TTF_SetFontHinting(FontPtr $font, int $hinting)
 * @method int TTF_FontHeight(FontPtr $font)
 * @method int TTF_FontAscent(FontPtr $font)
 * @method int TTF_FontDescent(FontPtr $font)
 * @method int TTF_FontLineSkip(FontPtr $font)
 * @method int TTF_GetFontKerning(FontPtr $font)
 * @method void TTF_SetFontKerning(FontPtr $font, int $allowed)
 * @method int TTF_FontFaces(FontPtr $font)
 * @method int TTF_FontFaceIsFixedWidth(FontPtr $font)
 * @method string|CCharPtr TTF_FontFaceFamilyName(FontPtr $font)
 * @method string|CCharPtr TTF_FontFaceStyleName(FontPtr $font)
 * @method int TTF_GlyphIsProvided(FontPtr $font, int $ch)
 * @method int TTF_GlyphMetrics(FontPtr $font, int $ch, int|CIntPtr $minx, int|CIntPtr $maxx, int|CIntPtr $miny, int|CIntPtr $maxy, int|CIntPtr $advance)
 * @method int TTF_SizeText(FontPtr $font, string|CCharPtr $text, int|CIntPtr $w, int|CIntPtr $h)
 * @method int TTF_SizeUTF8(FontPtr $font, string|CCharPtr $text, int|CIntPtr $w, int|CIntPtr $h)
 * @method int TTF_SizeUNICODE(FontPtr $font, array|int[] $text, int|CIntPtr $w, int|CIntPtr $h)
 * @method SurfacePtr TTF_RenderText_Solid(FontPtr $font, string|CCharPtr $text, Color $fg)
 * @method SurfacePtr TTF_RenderUTF8_Solid(FontPtr $font, string|CCharPtr $text, Color $fg)
 * @method SurfacePtr TTF_RenderUNICODE_Solid(FontPtr $font, array|int[] $text, Color $fg)
 * @method SurfacePtr TTF_RenderGlyph_Solid(FontPtr $font, int $ch, Color $fg)
 * @method SurfacePtr TTF_RenderText_Shaded(FontPtr $font, string|CCharPtr $text, Color $fg, Color $bg)
 * @method SurfacePtr TTF_RenderUTF8_Shaded(FontPtr $font, string|CCharPtr $text, Color $fg, Color $bg)
 * @method SurfacePtr TTF_RenderUNICODE_Shaded(FontPtr $font, array|int[] $text, Color $fg, Color $bg)
 * @method SurfacePtr TTF_RenderGlyph_Shaded(FontPtr $font, int $ch, Color $fg, Color $bg)
 * @method SurfacePtr TTF_RenderText_Blended(FontPtr $font, string|CCharPtr $text, Color $fg)
 * @method SurfacePtr TTF_RenderUTF8_Blended(FontPtr $font, string|CCharPtr $text, Color $fg)
 * @method SurfacePtr TTF_RenderUNICODE_Blended(FontPtr $font, array|int[] $text, Color $fg)
 * @method SurfacePtr TTF_RenderGlyph_Blended(FontPtr $font, int $ch, Color $fg)
 * @method SurfacePtr TTF_RenderText_Blended_Wrapped(FontPtr $font, string|CCharPtr $text, Color $fg, int $wrapLength)
 * @method SurfacePtr TTF_RenderUTF8_Blended_Wrapped(FontPtr $font, string|CCharPtr $text, Color $fg, int $wrapLength)
 * @method SurfacePtr TTF_RenderUNICODE_Blended_Wrapped(FontPtr $font, array|int[] $text, Color $fg, int $wrapLength)
 * @method void TTF_CloseFont(FontPtr $font)
 * @method void TTF_Quit()
 * @method int TTF_WasInit()
 * @method int TTF_GetFontKerningSize(FontPtr $font, int $prevIndex, int $index)
 * @method int TTF_GetFontKerningSizeGlyphs(FontPtr $font, int $previousCh, int $ch)
 * @formatter:on
 */
interface SDLTTFNativeApiAutocomplete
{
}
