# FFI SDL TTF Bindings

This is a SDL Image bindings for PHP using [SDL php ffi bindings library](https://github.com/SerafimArts/ffi-sdl).

- [System Requirements](#requirements)
- [Installation](#installation)
    - [Linux](#linux)
    - [MacOS](#macos)
    - [Windows](#windows)
- [API Documentation](#documentation)

## Requirements

- PHP >=7.4 NTS
- ext-ffi
- MacOS, Linux or MacOS (BSD or something else are not supported yet).
- SDL >= 2.0
- SDL TTF >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl-ttf
```

#### Linux

- `sudo apt install libsdl2-ttf-2.0-0 -y`

#### MacOS

- `brew install sdl2_ttf`

#### Windows

- SDL TTF (v2.0.15) are already bundled

## Documentation

The library API completely supports and repeats the analogue in the C language.

- [SDL2 TTF official documentation](https://www.libsdl.org/projects/SDL_ttf/docs/index.html)

To support autocomplete, please add a link to `\Serafim\SDL\TTF\SDLTTFNativeApiAutocomplete`:

```php
/** @var Serafim\SDL\TTF\SDLTTFNativeApiAutocomplete $ttf */
$ttf = new Serafim\SDL\TTF\TTF();
```

In addition, the library contains functionality adapted for PHP.
- All methods are converted to the PSR style.
- In case of errors, methods throw exceptions.
- Removed passing arguments by reference during initialization.
- All arguments that accept a boolean in c-format (short int) are replaced by a boolean.
- Added default arguments in some methods.

Please note that when using the original calls, you will have to cast the 
types to the desired ones with your hands!

```php
use Serafim\SDL\Color;
use Serafim\SDL\SDL;
use Serafim\SDL\Surface;
use Serafim\SDL\TTF\SDLTTFNativeApiAutocomplete;
use Serafim\SDL\TTF\TTF;

/** @var SDLTTFNativeApiAutocomplete|TTF $ttf */
$ttf = new TTF();
$sdl = new SDL();

// Open Font

$font = $ttf->TTF_OpenFont(__DIR__ . '/path/to/font.ttf', 16);

// Create color and

$ttfColor = $ttf->new(Color::class);

$color = $sdl->new(Color::class);
$urface = $ttf->TTF_RenderText_Solid($font, 'Hello World', $color);
// Error: Passing incompatible argument 3 of C function 'TTF_RenderText_Solid',// 
// expecting 'struct SDL_Color', found 'struct SDL_Color'
//
// Why? SDL_Color is an structure from SDL, but TTF Color required

// Solution #1
$color = $ttf->new(Color::class); // Create color struct from TTF
$urface = $ttf->TTF_RenderText_Solid($font, 'Hello World', $color);

// Solution #2
$color = $sdl->new(Color::class);
$color = $ttf->cast(Color::class, $color); // Cast SDL Color struct to TTF Color struct
$surface = $ttf->TTF_RenderText_Solid($font, 'Hello World', $color);

// etc...

// Note, $surface is a TTF Surface too! You must cast it to SDL Surface using:
$surface = $sdl->cast(Surface::class, $surface);
```
