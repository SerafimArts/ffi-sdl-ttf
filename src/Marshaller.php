<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

use FFI\CData;

/**
 * @internal this is an internal library trait, please do not use it in your code
 * @psalm-internal Serafim\SDL\TTF
 *
 * @psalm-require-extends TTF
 *
 * @mixin TTF
 *
 * @property-read object $ffi
 */
trait Marshaller
{
    public function TTF_Linked_Version(): ?CData
    {
        $result = $this->ffi->TTF_Linked_Version();

        return $result !== null ? $this->sdl->cast('SDL_version*', $result) : null;
    }

    public function TTF_OpenFontRW(?CData $src, int $freesrc, int $ptsize): ?CData
    {
        return $this->ffi->TTF_OpenFontRW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $freesrc,
            $ptsize,
        );
    }

    public function TTF_OpenFontIndexRW(?CData $src, int $freesrc, int $ptsize, int $index): ?CData
    {
        return $this->ffi->TTF_OpenFontIndexRW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $freesrc,
            $ptsize,
            $index,
        );
    }

    public function TTF_OpenFontDPIRW(?CData $src, int $freesrc, int $ptsize, int $hdpi, int $vdpi): ?CData
    {
        return $this->ffi->TTF_OpenFontDPIRW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $freesrc,
            $ptsize,
            $hdpi,
            $vdpi,
        );
    }

    public function TTF_OpenFontIndexDPIRW(
        ?CData $src,
        int $freesrc,
        int $ptsize,
        int $index,
        int $hdpi,
        int $vdpi
    ): ?CData {
        return $this->ffi->TTF_OpenFontIndexDPIRW(
            $src === null ? null : $this->cast('SDL_RWops*', $src),
            $freesrc,
            $ptsize,
            $index,
            $hdpi,
            $vdpi,
        );
    }

    public function TTF_RenderText_Solid(?CData $font, string|CData $text, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderText_Solid(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_Solid(?CData $font, string|CData $text, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderUTF8_Solid(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_Solid(?CData $font, ?CData $text, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderUNICODE_Solid(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_Solid_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderText_Solid_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $wrapLength
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_Solid_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUTF8_Solid_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $wrapLength
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_Solid_Wrapped(
        ?CData $font,
        ?CData $text,
        ?CData $fg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUNICODE_Solid_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $wrapLength
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph_Solid(?CData $font, int $ch, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph_Solid(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg)
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph32_Solid(?CData $font, int $ch, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph32_Solid(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg)
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_Shaded(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg
    ): ?CData {
        $result = $this->ffi->TTF_RenderText_Shaded(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_Shaded(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg
    ): ?CData {
        $result = $this->ffi->TTF_RenderUTF8_Shaded(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_Shaded(
        ?CData $font,
        ?CData $text,
        ?CData $fg,
        ?CData $bg
    ): ?CData {
        $result = $this->ffi->TTF_RenderUNICODE_Shaded(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_Shaded_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderText_Shaded_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_Shaded_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUTF8_Shaded_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_Shaded_Wrapped(
        ?CData $font,
        ?CData $text,
        ?CData $fg,
        ?CData $bg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUNICODE_Shaded_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph_Shaded(?CData $font, int $ch, ?CData $fg, ?CData $bg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph_Shaded(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph32_Shaded(?CData $font, int $ch, ?CData $fg, ?CData $bg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph32_Shaded(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_Blended(?CData $font, string|CData $text, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderText_Blended(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_Blended(?CData $font, string|CData $text, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderUTF8_Blended(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_Blended(?CData $font, ?CData $text, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderUNICODE_Blended(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_Blended_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderText_Blended_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_Blended_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUTF8_Blended_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_Blended_Wrapped(
        ?CData $font,
        ?CData $text,
        ?CData $fg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUNICODE_Blended_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph_Blended(?CData $font, int $ch, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph_Blended(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph32_Blended(?CData $font, int $ch, ?CData $fg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph32_Blended(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_LCD(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg
    ): ?CData {
        $result = $this->ffi->TTF_RenderText_LCD(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_LCD(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg
    ): ?CData {
        $result = $this->ffi->TTF_RenderUTF8_LCD(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_LCD(
        ?CData $font,
        ?CData $text,
        ?CData $fg,
        ?CData $bg
    ): ?CData {
        $result = $this->ffi->TTF_RenderUNICODE_LCD(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderText_LCD_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderText_LCD_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUTF8_LCD_Wrapped(
        ?CData $font,
        string|CData $text,
        ?CData $fg,
        ?CData $bg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUTF8_LCD_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderUNICODE_LCD_Wrapped(
        ?CData $font,
        ?CData $text,
        ?CData $fg,
        ?CData $bg,
        int $wrapLength
    ): ?CData {
        $result = $this->ffi->TTF_RenderUNICODE_LCD_Wrapped(
            $font,
            $text,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
            $wrapLength,
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph_LCD(?CData $font, int $ch, ?CData $fg, ?CData $bg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph_LCD(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }

    public function TTF_RenderGlyph32_LCD(?CData $font, int $ch, ?CData $fg, ?CData $bg): ?CData
    {
        $result = $this->ffi->TTF_RenderGlyph32_LCD(
            $font,
            $ch,
            $fg === null ? null : $this->cast('SDL_Color', $fg),
            $bg === null ? null : $this->cast('SDL_Color', $bg),
        );

        return $result === null ? null : $this->cast('SDL_Surface*', $result);
    }
}
