# FFI SDL TTF Bindings

<p align="center">
    <a href="https://packagist.org/packages/serafim/ffi-sdl-ttf"><img src="https://poser.pugx.org/serafim/ffi-sdl-ttf/require/php?style=for-the-badge" alt="PHP 8.1+"></a>
    <a href="https://github.com/libsdl-org/SDL_ttf"><img src="https://img.shields.io/badge/SDL_TTF-2.20.2-132B48.svg?style=for-the-badge&logo=c%2b%2b" alt="SDL_ttf"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl-ttf"><img src="https://poser.pugx.org/serafim/ffi-sdl-ttf/version?style=for-the-badge" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl-ttf"><img src="https://poser.pugx.org/serafim/ffi-sdl-ttf/v/unstable?style=for-the-badge" alt="Latest Unstable Version"></a>
    <a href="https://packagist.org/packages/serafim/ffi-sdl-ttf"><img src="https://poser.pugx.org/serafim/ffi-sdl-ttf/downloads?style=for-the-badge" alt="Total Downloads"></a>
    <a href="https://raw.githubusercontent.com/serafim/ffi-sdl-ttf/master/LICENSE.md"><img src="https://poser.pugx.org/serafim/ffi-sdl-ttf/license?style=for-the-badge" alt="License MIT"></a>
</p>
<p align="center">
    <a href="https://github.com/SerafimArts/ffi-sdl-ttf/actions"><img src="https://github.com/SerafimArts/ffi-sdl-ttf/workflows/build/badge.svg"></a>
</p>

A SDL_ttf extension FFI bindings for the PHP language compatible with [SDL FFI bindings for the PHP language](https://github.com/SerafimArts/ffi-sdl).

- [System Requirements](#requirements)
- [Installation](#installation)
- [Documentation](#documentation)
- [Initialization](#initialization)
- [Example](#example)

## Requirements

- PHP ^8.1
- ext-ffi
- Windows, Linux, BSD or MacOS
    - Android, iOS or something else are not supported yet
- SDL and SDL TTF >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl-ttf
```

Additional dependencies:
- Debian-based Linux: `sudo apt install libsdl2-ttf-2.0-0 -y`
- MacOS: `brew install sdl2_ttf`
- Window: Can be [downloaded from here](https://github.com/libsdl-org/SDL_ttf/releases)

## Documentation

The library API completely supports and repeats the analogue in the C language.

- [SDL2 TTF official documentation](https://www.libsdl.org/projects/SDL_ttf/docs/index.html)

## Initialization

In the case that you need a specific SDL instance, it should be passed
explicitly:

```php
$sdl = new Serafim\SDL\SDL(version: '2.28.3');
$ttf = new Serafim\SDL\TTF\TTF(sdl: $sdl);

// If no argument is passed, the latest initialized
// version will be used.
$ttf = new Serafim\SDL\TTF\TTF(sdl: null);
```

> ! It is recommended to always specify the SDL dependency explicitly.

To specify a library pathname explicitly, you can add the `library` argument to
the `Serafim\SDL\TTF\TTF` constructor.

> By default, the library will try to resolve the binary's pathname automatically.

```php
// Load library from pathname (it may be relative or part of system-dependent path)
$ttf = new Serafim\SDL\TTF\TTF(library: __DIR__ . '/path/to/library.so');

// Try to automatically resolve library's pathname
$ttf = new Serafim\SDL\TTF\TTF(library: null);
```

You can also specify the library version explicitly. Depending on this version,
the corresponding functions of the SDL Image will be available.

> By default, the library will try to resolve SDL Image version automatically.

```php
// Use v2.0.14 from string
$ttf = new Serafim\SDL\TTF\TTF(version: '2.0.14');

// Use v2.20.2 from predefined versions constant
$ttf = new Serafim\SDL\TTF\TTF(version: \Serafim\SDL\TTF\Version::V2_20_2);

// Use latest supported version
$ttf = new Serafim\SDL\TTF\TTF(version: \Serafim\SDL\TTF\Version::LATEST);
```

To speed up the header compiler, you can use any PSR-16 compatible cache driver.

```php
$ttf = new Serafim\SDL\TTF\TTF(cache: new Psr16Cache(...));
```

In addition, you can control other preprocessor directives explicitly:

```php
$pre = new \FFI\Preprocessor\Preprocessor();
$pre->define('true', 'false'); // happy debugging!

$ttf = new Serafim\SDL\TTF\TTF(pre: $pre);
```

## Example

```php
use Serafim\SDL\SDL;
use Serafim\SDL\TTF\TTF;

$sdl = new SDL();
$ttf = new TTF(sdl: $sdl);

$sdl->SDL_Init(SDL::SDL_INIT_EVERYTHING);
$ttf->TTF_Init();


$font = $ttf->TTF_OpenFont(__DIR__ . '/path/to/font.ttf', 42);

echo 'Hinting: ' . $ttf->TTF_GetFontHinting($font) . "\n";
echo 'Kerning: ' . $ttf->TTF_GetFontKerning($font) . "\n";
echo 'Style:   ' . match($ttf->TTF_GetFontStyle($font)) {
    TTF::TTF_STYLE_NORMAL => 'normal',
    TTF::TTF_STYLE_BOLD => 'bold',
    TTF::TTF_STYLE_ITALIC => 'italic',
    TTF::TTF_STYLE_UNDERLINE => 'underline',
    TTF::TTF_STYLE_STRIKETHROUGH => 'strikethrough',
}   . "\n";


$color = $sdl->new('SDL_Color');
$color->r = 120;
$color->g = 100;
$color->b = 80;

$surface = $ttf->TTF_RenderText_Solid($font, 'Hello World!', FFI::addr($color));

$ttf->TTF_Quit();
$sdl->SDL_Quit();
```
