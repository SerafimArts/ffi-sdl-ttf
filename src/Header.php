<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

use FFI\Contracts\Headers\HeaderInterface;
use FFI\Contracts\Headers\Version\ComparableInterface;
use FFI\Contracts\Headers\VersionInterface;
use FFI\Contracts\Preprocessor\Exception\PreprocessorExceptionInterface;
use FFI\Contracts\Preprocessor\PreprocessorInterface;
use FFI\Preprocessor\Preprocessor;
use Serafim\SDL\Version as SDLVersion;

final class Header implements HeaderInterface
{
    /**
     * @var non-empty-string
     */
    private const HEADERS_ENTRYPOINT = __DIR__ . '/../resources/headers/SDL_ttf.h';

    /**
     * @var non-empty-string
     */
    private const SDL_H = <<<'CPP'
        #ifndef SDL_h_
            #define SDL_h_
            typedef int SDL_bool;
            typedef uint8_t Uint8;
            typedef uint16_t Uint16;
            typedef uint32_t Uint32;

            typedef void* SDL_RWops;
            typedef void* SDL_version;
            typedef struct SDL_PixelFormat SDL_PixelFormat;
            typedef struct SDL_BlitMap SDL_BlitMap;

            typedef struct SDL_Surface {
                Uint32 flags;
                SDL_PixelFormat *format;
                int w, h;
                int pitch;
                void *pixels;
                void *userdata;
                int locked;
                void *list_blitmap;
                struct SDL_Rect {
                    int x, y;
                    int w, h;
                } clip_rect;
                SDL_BlitMap *map;
                int refcount;
            } SDL_Surface;

            typedef struct SDL_Color {
                Uint8 r;
                Uint8 g;
                Uint8 b;
                Uint8 a;
            } SDL_Color;
        #endif
        CPP;

    public function __construct(
        private readonly PreprocessorInterface $pre,
    ) {}

    /**
     * @return non-empty-string
     */
    public function getPathname(): string
    {
        return self::HEADERS_ENTRYPOINT;
    }

    public static function create(
        VersionInterface $sdlVersion = SDLVersion::LATEST,
        VersionInterface $ttfVersion = Version::LATEST,
        PreprocessorInterface $pre = new Preprocessor(),
    ): self {
        $pre = clone $pre;

        if (!$ttfVersion instanceof ComparableInterface) {
            $ttfVersion = Version::create($ttfVersion->toString());
        }

        $pre->define('_SDL_TTF_VERSION_GTE', static fn(string $expected): bool
            => \version_compare($ttfVersion->toString(), $expected, '>='));
        $pre->define('_SDL_VERSION_GTE', static fn(string $expected): bool
            => \version_compare($sdlVersion->toString(), $expected, '>='));
        $pre->define('SDL_VERSION_ATLEAST', static fn(string $a, string $b, string $c): bool
            => \version_compare($sdlVersion->toString(), \sprintf('%d.%d.%d', $a, $b, $c), '>='));

        $pre->add('SDL.h', self::SDL_H);
        $pre->add('SDL_version.h', '');
        $pre->add('begin_code.h', '');
        $pre->add('close_code.h', '');

        $pre->define('DECLSPEC', '');
        $pre->define('SDLCALL', '');

        return new self($pre);
    }

    /**
     * @throws PreprocessorExceptionInterface
     */
    public function __toString(): string
    {
        return (string) $this->pre->process(new \SplFileInfo($this->getPathname()));
    }
}
