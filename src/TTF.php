<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @noinspection StaticInvocationViaThisInspection
 */

declare(strict_types=1);

namespace Serafim\SDL\TTF;

use FFI\CData;
use Serafim\FFILoader\LibraryInformation;
use Serafim\SDL\Color;
use Serafim\SDL\Exception\SDLException;
use Serafim\SDL\RWopsPtr;
use Serafim\SDL\SDL;
use Serafim\SDL\Support\ProxyTrait;
use Serafim\SDL\Support\SingletonTrait;
use Serafim\SDL\Support\VersionComparisonTrait;
use Serafim\SDL\SurfacePtr;

/**
 * Class TTF
 */
final class TTF implements
    SwappedUnicode,
    Style,
    Hinting
{
    use ProxyTrait;
    use SingletonTrait;
    use VersionComparisonTrait;

    /**
     * @var int
     */
    private const ENC_ASCII = 0;

    /**
     * @var int
     */
    private const ENC_UTF8 = 1;

    /**
     * @var int
     */
    private const ENC_UNICODE = 2;

    /**
     * @var int
     */
    private const DEFAULT_FONT_SIZE = 16;

    /**
     * @var LibraryInformation
     */
    public LibraryInformation $info;

    /**
     * @var \FFI|SDLTTFNativeApiAutocomplete
     */
    private \FFI $ffi;

    /**
     * @var SDL
     */
    private SDL $sdl;

    /**
     * TTF constructor.
     *
     * @param bool $init
     */
    public function __construct(bool $init = true)
    {
        $this->casts['Serafim\\SDL\\TTF'] = 'TTF';

        $this->sdl = SDL::getInstance();

        $this->info = $this->sdl->loadLibrary(new Library());
        $this->ffi = $this->info->ffi;

        if ($init && ! $this->wasInit()) {
            $this->init();
        }
    }

    /**
     * TODO Add description
     *
     * @return bool
     */
    public function wasInit(): bool
    {
        return (bool)$this->ffi->TTF_WasInit();
    }

    /**
     * TODO Add description
     *
     * @return void
     */
    public function init(): void
    {
        if ($this->ffi->TTF_Init() === -1) {
            throw new SDLException($this->sdl->SDL_GetError());
        }
    }

    /**
     * TODO Add description
     *
     * @return CData
     */
    public function linkedVersion(): CData
    {
        $result = $this->ffi->TTF_Linked_Version();

        return $this->sdl->cast('SDL_Version*', $result);
    }

    /**
     * TODO Add description
     *
     * @return void
     */
    public function quit(): void
    {
        $this->ffi->TTF_Quit();
    }

    /**
     * TODO Add description
     *
     * @param string $file
     * @param int $size
     * @param int|null $index
     * @return CData|FontPtr
     */
    public function open(string $file, int $size = self::DEFAULT_FONT_SIZE, int $index = null): CData
    {
        $result = $index === null
            ? $this->ffi->TTF_OpenFont($file, $size)
            : $this->ffi->TTF_OpenFontIndex($file, $size, $index);

        if ($result === null) {
            throw new SDLException($this->sdl->SDL_GetError());
        }

        return $result;
    }

    /**
     * TODO Add description
     *
     * @param CData|RWopsPtr $rw
     * @param int $size
     * @param bool $free
     * @param int|null $index
     * @return CData|FontPtr
     */
    public function openRw(CData $rw, int $size = self::DEFAULT_FONT_SIZE, bool $free = true, int $index = null): CData
    {
        /** @var RWopsPtr $rw */
        $rw = $this->cast('SDL_RWops*', $rw);

        $result = $index === null
            ? $this->ffi->TTF_OpenFontRW($rw, (int)$free, $size)
            : $this->ffi->TTF_OpenFontIndexRW($rw, (int)$free, $size, $index);

        if ($result === null) {
            throw new SDLException($this->sdl->SDL_GetError());
        }

        return $result;
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return void
     */
    public function close(CData $font): void
    {
        $this->ffi->TTF_CloseFont($font);
    }

    /**
     * TODO Add description
     *
     * @see SwappedUnicode
     * @param int $swapped
     * @return void
     */
    public function byteSwappedUnicode(int $swapped): void
    {
        $this->ffi->TTF_ByteSwappedUNICODE($swapped);
    }

    /**
     * TODO Add description
     *
     * @see Style
     * @param CData|FontPtr $font
     * @return int
     */
    public function getStyle(CData $font): int
    {
        return $this->ffi->TTF_GetFontStyle($font);
    }

    /**
     * TODO Add description
     *
     * @see Style
     * @param CData|FontPtr $font
     * @param int $style
     * @return void
     */
    public function setStyle(CData $font, int $style = Style::TTF_STYLE_NORMAL): void
    {
        $this->ffi->TTF_SetFontStyle($font, $style);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return int
     */
    public function getOutline(CData $font): int
    {
        return $this->ffi->TTF_GetFontOutline($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param int $size
     * @return void
     */
    public function setOutline(CData $font, int $size = 0): void
    {
        $this->ffi->TTF_SetFontOutline($font, $size);
    }

    /**
     * TODO Add description
     *
     * @see Hinting
     * @param CData|FontPtr $font
     * @return int
     */
    public function getHinting(CData $font): int
    {
        return $this->ffi->TTF_GetFontHinting($font);
    }

    /**
     * TODO Add description
     *
     * @see Hinting
     * @param CData|FontPtr $font
     * @param int $hinting
     * @return void
     */
    public function setHinting(CData $font, int $hinting = Hinting::TTF_HINTING_NORMAL): void
    {
        $this->ffi->TTF_SetFontHinting($font, $hinting);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return bool
     */
    public function getKerning(CData $font): bool
    {
        return (bool)$this->ffi->TTF_GetFontKerning($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param bool $enabled
     * @return void
     */
    public function setKerning(CData $font, bool $enabled = true): void
    {
        $this->ffi->TTF_SetFontKerning($font, (int)$enabled);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return int
     */
    public function getHeight(CData $font): int
    {
        return $this->ffi->TTF_GetFontKerning($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return int
     */
    public function getAscent(CData $font): int
    {
        return $this->ffi->TTF_FontAscent($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return int
     */
    public function getDescent(CData $font): int
    {
        return $this->ffi->TTF_FontDescent($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return int
     */
    public function getLineSkip(CData $font): int
    {
        return $this->ffi->TTF_FontLineSkip($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return int
     */
    public function getFacesCount(CData $font): int
    {
        return $this->ffi->TTF_FontFaces($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return bool
     */
    public function getFaceIsFixedWidth(CData $font): bool
    {
        return $this->ffi->TTF_FontFaceIsFixedWidth($font) > 0;
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return string
     */
    public function getFamilyName(CData $font): string
    {
        return $this->ffi->TTF_FontFaceFamilyName($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @return string
     */
    public function getStyleName(CData $font): string
    {
        return $this->ffi->TTF_FontFaceStyleName($font);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param string $char
     * @return bool
     */
    public function hasGlyph(CData $font, string $char): bool
    {
        \assert(\mb_strlen($char) === 1);

        return (bool)$this->ffi->TTF_GlyphIsProvided($font, \ord($char));
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param string $char
     * @return GlyphMetric
     */
    public function getGlyphMetric(CData $font, string $char): GlyphMetric
    {
        \assert(\mb_strlen($char) === 1);

        $minX = $this->new('int');
        $maxX = $this->new('int');
        $minY = $this->new('int');
        $maxY = $this->new('int');
        $advance = $this->new('int');

        $this->ffi->TTF_GlyphMetrics(
            $font,
            \ord($char),
            self::addr($minX),
            self::addr($maxX),
            self::addr($minY),
            self::addr($maxY),
            self::addr($advance),
            );

        return new GlyphMetric(
            $minX->cdata,
            $minY->cdata,
            $maxX->cdata,
            $maxY->cdata,
            $advance->cdata,
        );
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param string $text
     * @param string|null $encoding
     * @return array|int[]
     */
    public function getSize(CData $font, string $text, string $encoding = null): array
    {
        [$width, $height] = [
            $this->new('int'),
            $this->new('int'),
        ];

        [$current, $text] = $this->getEncoding($text, $encoding);

        switch ($current) {
            case self::ENC_ASCII:
                $this->ffi->TTF_SizeText($font, $text, self::addr($width), self::addr($height));
                break;

            case self::ENC_UTF8:
                $this->ffi->TTF_SizeUTF8($font, $text, self::addr($width), self::addr($height));
                break;

            default:
                $this->ffi->TTF_SizeUNICODE($font, $text, self::addr($width), self::addr($height));
        }

        return [$width, $height];
    }

    /**
     * @param string $text
     * @param string|null $prefer
     * @return array
     */
    private function getEncoding(string $text, string $prefer = null): array
    {
        switch (true) {
            case \strtolower($prefer) === 'ascii':
            case \mb_check_encoding($text, 'ASCII'):
                return [self::ENC_ASCII, $text];

            case \strtolower($prefer) === 'utf-8':
            case \mb_check_encoding($text, 'UTF-8'):
                return [self::ENC_UTF8, $text];

            case \in_array(\strtolower($prefer), ['unicode', 'utf-16', 'utf-16be', 'utf-16le'], true):
            case \mb_check_encoding($text, 'UTF-16'):
            case \mb_check_encoding($text, 'UTF-16BE'):
            case \mb_check_encoding($text, 'UTF-16LE'):
                return [self::ENC_UNICODE, \mb_str_split($text)];
                break;

            default:
                $text = \mb_convert_encoding($text, $prefer ?? \mb_detect_encoding($text), 'UTF-8');

                return [self::ENC_ASCII, $text];
        }
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param string $text
     * @param CData|Color|null $color
     * @param string|null $encoding
     * @return CData|SurfacePtr
     */
    public function renderSolid(CData $font, string $text, CData $color = null, string $encoding = null): CData
    {
        $color = $this->getColor($color);

        [$current, $text] = $this->getEncoding($text, $encoding);

        switch ($current) {
            case \mb_strlen($text) === 1:
                $surface = $this->ffi->TTF_RenderGlyph_Solid($font, \ord($text), $color);
                break;

            case self::ENC_ASCII:
                $surface = $this->ffi->TTF_RenderText_Solid($font, $text, $color);
                break;

            case self::ENC_UTF8:
                $surface = $this->ffi->TTF_RenderUTF8_Solid($font, $text, $color);
                break;

            default:
                $surface = $this->ffi->TTF_RenderUNICODE_Solid($font, $text, $color);
        }

        if ($surface === null) {
            throw new SDLException($this->sdl->SDL_GetError());
        }

        return $this->sdl->cast(SurfacePtr::class, $surface);
    }

    /**
     * @param CData|Color|null $color
     * @return CData|Color
     */
    private function getColor(CData $color = null): CData
    {
        if ($color === null) {
            return $this->new(Color::class);
        }

        return $this->cast(Color::class, $color);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param string $text
     * @param CData|Color|null $color
     * @param CData|null $bg
     * @param string|null $encoding
     * @return CData|SurfacePtr
     */
    public function renderShaded(CData $font, string $text, CData $color = null, CData $bg = null, string $encoding = null): CData
    {
        $color = $this->getColor($color);
        $bg = $this->getColor($bg);

        [$current, $text] = $this->getEncoding($text, $encoding);

        switch ($current) {
            case \mb_strlen($text) === 1:
                $surface = $this->ffi->TTF_RenderGlyph_Shaded($font, \ord($text), $color, $bg);
                break;

            case self::ENC_ASCII:
                $surface = $this->ffi->TTF_RenderText_Shaded($font, $text, $color, $bg);
                break;

            case self::ENC_UTF8:
                $surface = $this->ffi->TTF_RenderUTF8_Shaded($font, $text, $color, $bg);
                break;

            default:
                $surface = $this->ffi->TTF_RenderUNICODE_Shaded($font, $text, $color, $bg);
        }

        if ($surface === null) {
            throw new SDLException($this->sdl->SDL_GetError());
        }

        return $this->sdl->cast(SurfacePtr::class, $surface);
    }

    /**
     * TODO Add description
     *
     * @param CData|FontPtr $font
     * @param string $text
     * @param CData|Color|null $color
     * @param string|null $encoding
     * @return CData|SurfacePtr
     */
    public function renderBlended(CData $font, string $text, CData $color = null, string $encoding = null): CData
    {
        $color = $this->getColor($color);

        [$current, $text] = $this->getEncoding($text, $encoding);

        switch ($current) {
            case \mb_strlen($text) === 1:
                $surface = $this->ffi->TTF_RenderGlyph_Blended($font, \ord($text), $color);
                break;

            case self::ENC_ASCII:
                $surface = $this->ffi->TTF_RenderText_Blended($font, $text, $color);
                break;

            case self::ENC_UTF8:
                $surface = $this->ffi->TTF_RenderUTF8_Blended($font, $text, $color);
                break;

            default:
                $surface = $this->ffi->TTF_RenderUNICODE_Blended($font, $text, $color);
        }

        if ($surface === null) {
            throw new SDLException($this->sdl->SDL_GetError());
        }

        return $this->sdl->cast(SurfacePtr::class, $surface);
    }
}
