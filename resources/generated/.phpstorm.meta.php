<?php

// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for FFI, to provide autocomplete information to your IDE
 * Generated for FFI {@see Serafim\SDL\TTF\TTF}.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Nesmeyanov Kirill <nesk@xakep.ru>
 * @see https://github.com/php-ffi/ide-helper-generator
 *
 * @psalm-suppress all
 */

declare (strict_types=1);
namespace PHPSTORM_META {
    registerArgumentsSet(
        // List of "TTF_Direction" enum cases
        'ffi_sdl_ttf_ttf_direction',
        \Serafim\SDL\TTF\Direction::TTF_DIRECTION_LTR,
        \Serafim\SDL\TTF\Direction::TTF_DIRECTION_RTL,
        \Serafim\SDL\TTF\Direction::TTF_DIRECTION_TTB,
        \Serafim\SDL\TTF\Direction::TTF_DIRECTION_BTT
    );
    expectedArguments(\Serafim\SDL\TTF\TTF::TTF_SetFontDirection(), 1, argumentsSet('ffi_sdl_ttf_ttf_direction'));
    registerArgumentsSet(
        // List of available FFI type names
        'ffi_sdl_ttf_types_list',
        'void *',
        'bool',
        'float',
        'double',
        'long double',
        'char',
        'signed char',
        'unsigned char',
        'short',
        'short int',
        'signed short',
        'signed short int',
        'unsigned short',
        'unsigned short int',
        'int',
        'signed int',
        'unsigned int',
        'long',
        'long int',
        'signed long',
        'signed long int',
        'unsigned long',
        'unsigned long int',
        'long long',
        'long long int',
        'signed long long',
        'signed long long int',
        'unsigned long long',
        'unsigned long long int',
        'intptr_t',
        'uintptr_t',
        'size_t',
        'ssize_t',
        'ptrdiff_t',
        'off_t',
        'va_list',
        '__builtin_va_list',
        '__gnuc_va_list',
        'int8_t',
        'uint8_t',
        'int16_t',
        'uint16_t',
        'int32_t',
        'uint32_t',
        'int64_t',
        'uint64_t',
        '__NSConstantString',
        '__NSConstantString*',
        '__NSConstantString**',
        '__NSConstantString_tag',
        'SDL_version',
        'SDL_version*',
        'SDL_version**',
        'SDL_RWops',
        'SDL_RWops*',
        'SDL_RWops**',
        'SDL_Surface',
        'SDL_Surface*',
        'SDL_Surface**',
        'SDL_Color',
        'SDL_Color*',
        'SDL_Color**',
        'TTF_Font',
        'TTF_Font*',
        'TTF_Font**',
        '_TTF_Font'
    );
    expectedArguments(\Serafim\SDL\TTF\TTF::new(), 0, argumentsSet('ffi_sdl_ttf_types_list'));
    expectedArguments(\Serafim\SDL\TTF\TTF::cast(), 0, argumentsSet('ffi_sdl_ttf_types_list'));
    expectedArguments(\Serafim\SDL\TTF\TTF::type(), 0, argumentsSet('ffi_sdl_ttf_types_list'));
    override(\Serafim\SDL\TTF\TTF::new(), map([
        // structures autocompletion
        '' => '\PHPSTORM_META\@',
        '__NSConstantString' => '\PHPSTORM_META\NSConstantString',
        '__NSConstantString*' => '\PHPSTORM_META\NSConstantString[]',
        '__NSConstantString*' => '\PHPSTORM_META\NSConstantString',
        '__NSConstantString**' => '\PHPSTORM_META\NSConstantString[][]',
        '__NSConstantString**' => '\PHPSTORM_META\NSConstantString[]',
        '__NSConstantString**' => '\PHPSTORM_META\NSConstantString',
        'SDL_version' => '\PHPSTORM_META\SDLVersion',
        'SDL_version*' => '\PHPSTORM_META\SDLVersion[]',
        'SDL_version*' => '\PHPSTORM_META\SDLVersion',
        'SDL_version**' => '\PHPSTORM_META\SDLVersion[][]',
        'SDL_version**' => '\PHPSTORM_META\SDLVersion[]',
        'SDL_version**' => '\PHPSTORM_META\SDLVersion',
        'SDL_RWops' => '\PHPSTORM_META\SDLRWops',
        'SDL_RWops*' => '\PHPSTORM_META\SDLRWops[]',
        'SDL_RWops*' => '\PHPSTORM_META\SDLRWops',
        'SDL_RWops**' => '\PHPSTORM_META\SDLRWops[][]',
        'SDL_RWops**' => '\PHPSTORM_META\SDLRWops[]',
        'SDL_RWops**' => '\PHPSTORM_META\SDLRWops',
        'SDL_Surface' => '\PHPSTORM_META\SDLSurface',
        'SDL_Surface*' => '\PHPSTORM_META\SDLSurface[]',
        'SDL_Surface*' => '\PHPSTORM_META\SDLSurface',
        'SDL_Surface**' => '\PHPSTORM_META\SDLSurface[][]',
        'SDL_Surface**' => '\PHPSTORM_META\SDLSurface[]',
        'SDL_Surface**' => '\PHPSTORM_META\SDLSurface',
        'SDL_Color' => '\PHPSTORM_META\SDLColor',
        'SDL_Color*' => '\PHPSTORM_META\SDLColor[]',
        'SDL_Color*' => '\PHPSTORM_META\SDLColor',
        'SDL_Color**' => '\PHPSTORM_META\SDLColor[][]',
        'SDL_Color**' => '\PHPSTORM_META\SDLColor[]',
        'SDL_Color**' => '\PHPSTORM_META\SDLColor',
        'TTF_Font' => '\PHPSTORM_META\TTFFont',
        'TTF_Font*' => '\PHPSTORM_META\TTFFont[]',
        'TTF_Font*' => '\PHPSTORM_META\TTFFont',
        'TTF_Font**' => '\PHPSTORM_META\TTFFont[][]',
        'TTF_Font**' => '\PHPSTORM_META\TTFFont[]',
        'TTF_Font**' => '\PHPSTORM_META\TTFFont',
    ]));
    /**
     * Generated "__NSConstantString" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class NSConstantString extends \FFI\CData
    {
        /**
         * @var null|\FFI\CData<int<-2147483648, 2147483647>>
         */
        public ?\FFI\CData $isa;
        /**
         * @var int<-2147483648, 2147483647>
         */
        public int $flags;
        public string|\FFI\CData $str;
        /**
         * @var int<min, max>
         */
        public int $length;
        /**
         * @internal Please use {@see \Serafim\SDL\TTF\TTF::new()} with '__NSConstantString' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_version" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLVersion extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\TTF\TTF::new()} with 'SDL_version' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_RWops" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLRWops extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\TTF\TTF::new()} with 'SDL_RWops' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Surface" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLSurface extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\TTF\TTF::new()} with 'SDL_Surface' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "SDL_Color" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class SDLColor extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\TTF\TTF::new()} with 'SDL_Color' argument instead.
         */
        private function __construct()
        {
        }
    }
    /**
     * Generated "TTF_Font" structure layout.
     *
     * @ignore
     * @internal Internal interface to ensure precise type inference.
     */
    final class TTFFont extends \FFI\CData
    {
        /**
         * @internal Please use {@see \Serafim\SDL\TTF\TTF::new()} with 'TTF_Font' argument instead.
         */
        private function __construct()
        {
        }
    }
}
namespace Serafim\SDL\TTF {
    interface TTF
    {
        /**
         * @return null|\FFI\CData<\PHPSTORM_META\SDLVersion>
         */
        public function TTF_Linked_Version(): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $major
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $minor
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $patch
         */
        public function TTF_GetFreeTypeVersion(?\FFI\CData $major, ?\FFI\CData $minor, ?\FFI\CData $patch): void;
        /**
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $major
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $minor
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $patch
         */
        public function TTF_GetHarfBuzzVersion(?\FFI\CData $major, ?\FFI\CData $minor, ?\FFI\CData $patch): void;
        /**
         * @param int<-2147483648, 2147483647> $swapped
         */
        public function TTF_ByteSwappedUNICODE(int $swapped): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_Init(): int;
        /**
         * @param int<-2147483648, 2147483647> $ptsize
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFont(string|\FFI\CData $file, int $ptsize): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<min, max> $index
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontIndex(string|\FFI\CData $file, int $ptsize, int $index): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @param int<-2147483648, 2147483647> $ptsize
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontRW(?\FFI\CData $src, int $freesrc, int $ptsize): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<min, max> $index
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontIndexRW(?\FFI\CData $src, int $freesrc, int $ptsize, int $index): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<0, 4294967296> $hdpi
         * @param int<0, 4294967296> $vdpi
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontDPI(string|\FFI\CData $file, int $ptsize, int $hdpi, int $vdpi): ?\FFI\CData;
        /**
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<min, max> $index
         * @param int<0, 4294967296> $hdpi
         * @param int<0, 4294967296> $vdpi
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontIndexDPI(string|\FFI\CData $file, int $ptsize, int $index, int $hdpi, int $vdpi): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<0, 4294967296> $hdpi
         * @param int<0, 4294967296> $vdpi
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontDPIRW(?\FFI\CData $src, int $freesrc, int $ptsize, int $hdpi, int $vdpi): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\SDLRWops> $src
         * @param int<-2147483648, 2147483647> $freesrc
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<min, max> $index
         * @param int<0, 4294967296> $hdpi
         * @param int<0, 4294967296> $vdpi
         * @return null|\FFI\CData<\PHPSTORM_META\TTFFont>
         */
        public function TTF_OpenFontIndexDPIRW(?\FFI\CData $src, int $freesrc, int $ptsize, int $index, int $hdpi, int $vdpi): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $ptsize
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetFontSize(?\FFI\CData $font, int $ptsize): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $ptsize
         * @param int<0, 4294967296> $hdpi
         * @param int<0, 4294967296> $vdpi
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetFontSizeDPI(?\FFI\CData $font, int $ptsize, int $hdpi, int $vdpi): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontStyle(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $style
         */
        public function TTF_SetFontStyle(?\FFI\CData $font, int $style): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontOutline(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $outline
         */
        public function TTF_SetFontOutline(?\FFI\CData $font, int $outline): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontHinting(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $hinting
         */
        public function TTF_SetFontHinting(?\FFI\CData $font, int $hinting): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontWrappedAlign(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $align
         */
        public function TTF_SetFontWrappedAlign(?\FFI\CData $font, int $align): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_FontHeight(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_FontAscent(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_FontDescent(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_FontLineSkip(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontKerning(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $allowed
         */
        public function TTF_SetFontKerning(?\FFI\CData $font, int $allowed): void;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<min, max>
         */
        public function TTF_FontFaces(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_FontFaceIsFixedWidth(?\FFI\CData $font): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         */
        public function TTF_FontFaceFamilyName(?\FFI\CData $font): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         */
        public function TTF_FontFaceStyleName(?\FFI\CData $font): string|\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $ch
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GlyphIsProvided(?\FFI\CData $font, int $ch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $ch
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GlyphIsProvided32(?\FFI\CData $font, int $ch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $ch
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $minx
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $maxx
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $miny
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $maxy
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $advance
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GlyphMetrics(?\FFI\CData $font, int $ch, ?\FFI\CData $minx, ?\FFI\CData $maxx, ?\FFI\CData $miny, ?\FFI\CData $maxy, ?\FFI\CData $advance): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $ch
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $minx
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $maxx
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $miny
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $maxy
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $advance
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GlyphMetrics32(?\FFI\CData $font, int $ch, ?\FFI\CData $minx, ?\FFI\CData $maxx, ?\FFI\CData $miny, ?\FFI\CData $maxy, ?\FFI\CData $advance): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SizeText(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $w, ?\FFI\CData $h): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SizeUTF8(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $w, ?\FFI\CData $h): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $w
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $h
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SizeUNICODE(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $w, ?\FFI\CData $h): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $measure_width
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $extent
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $count
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_MeasureText(?\FFI\CData $font, string|\FFI\CData $text, int $measure_width, ?\FFI\CData $extent, ?\FFI\CData $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $measure_width
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $extent
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $count
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_MeasureUTF8(?\FFI\CData $font, string|\FFI\CData $text, int $measure_width, ?\FFI\CData $extent, ?\FFI\CData $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param int<-2147483648, 2147483647> $measure_width
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $extent
         * @param null|\FFI\CData<int<-2147483648, 2147483647>> $count
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_MeasureUNICODE(?\FFI\CData $font, ?\FFI\CData $text, int $measure_width, ?\FFI\CData $extent, ?\FFI\CData $count): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_Solid(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_Solid(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_Solid(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_Solid_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_Solid_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_Solid_Wrapped(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph_Solid(?\FFI\CData $font, int $ch, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph32_Solid(?\FFI\CData $font, int $ch, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_Shaded(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_Shaded(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_Shaded(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_Shaded_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_Shaded_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_Shaded_Wrapped(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph_Shaded(?\FFI\CData $font, int $ch, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph32_Shaded(?\FFI\CData $font, int $ch, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_Blended(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_Blended(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_Blended(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_Blended_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_Blended_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_Blended_Wrapped(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph_Blended(?\FFI\CData $font, int $ch, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph32_Blended(?\FFI\CData $font, int $ch, ?\FFI\CData $fg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_LCD(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_LCD(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_LCD(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderText_LCD_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUTF8_LCD_Wrapped(?\FFI\CData $font, string|\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param null|\FFI\CData<int<0, 65536>> $text
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @param int<0, 4294967296> $wrapLength
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderUNICODE_LCD_Wrapped(?\FFI\CData $font, ?\FFI\CData $text, ?\FFI\CData $fg, ?\FFI\CData $bg, int $wrapLength): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph_LCD(?\FFI\CData $font, int $ch, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $ch
         * @param \PHPSTORM_META\SDLColor $fg
         * @param \PHPSTORM_META\SDLColor $bg
         * @return null|\FFI\CData<\PHPSTORM_META\SDLSurface>
         */
        public function TTF_RenderGlyph32_LCD(?\FFI\CData $font, int $ch, ?\FFI\CData $fg, ?\FFI\CData $bg): ?\FFI\CData;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         */
        public function TTF_CloseFont(?\FFI\CData $font): void;
        public function TTF_Quit(): void;
        /**
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_WasInit(): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $prev_index
         * @param int<-2147483648, 2147483647> $index
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontKerningSize(?\FFI\CData $font, int $prev_index, int $index): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 65536> $previous_ch
         * @param int<0, 65536> $ch
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontKerningSizeGlyphs(?\FFI\CData $font, int $previous_ch, int $ch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<0, 4294967296> $previous_ch
         * @param int<0, 4294967296> $ch
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontKerningSizeGlyphs32(?\FFI\CData $font, int $previous_ch, int $ch): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647> $on_off
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetFontSDF(?\FFI\CData $font, int $on_off): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_GetFontSDF(?\FFI\CData $font): int;
        /**
         * @param int<-2147483648, 2147483647> $direction
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetDirection(int $direction): int;
        /**
         * @param int<-2147483648, 2147483647> $script
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetScript(int $script): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @param int<-2147483648, 2147483647>|\Serafim\SDL\TTF\Direction::* $direction
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetFontDirection(?\FFI\CData $font, #[\JetBrains\PhpStorm\ExpectedValues(flags: [\Serafim\SDL\TTF\Direction::TTF_DIRECTION_LTR, \Serafim\SDL\TTF\Direction::TTF_DIRECTION_RTL, \Serafim\SDL\TTF\Direction::TTF_DIRECTION_TTB, \Serafim\SDL\TTF\Direction::TTF_DIRECTION_BTT])] int $direction): int;
        /**
         * @param null|\FFI\CData<\PHPSTORM_META\TTFFont> $font
         * @return int<-2147483648, 2147483647>
         */
        public function TTF_SetFontScriptName(?\FFI\CData $font, string|\FFI\CData $script): int;
    }
}