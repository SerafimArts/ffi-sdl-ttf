<?php

declare(strict_types=1);

use FFI\Generator\Metadata\CastXMLGenerator;
use FFI\Generator\Metadata\CastXMLParser;
use FFI\Generator\PhpStormMetadataGenerator;
use FFI\Generator\SimpleNamingStrategy;
use Serafim\SDL\TTF\Header;


if (!isset($_composer_autoload_path)) {
    $current = __DIR__;
    do {
        if (is_file($current . '/autoload.php')) {
            $_composer_autoload_path = $current . '/autoload.php';
            break;
        } elseif (is_file($current . '/vendor/autoload.php')) {
            $_composer_autoload_path = $current . '/vendor/autoload.php';
            break;
        }
    } while (
        $current !== \dirname($current)
        && ($current = \dirname($current))
    );
}

if (!isset($_composer_autoload_path)) {
    throw new \LogicException('Could not require composer autoloader');
}

require $_composer_autoload_path;


const INPUT_HEADERS = __DIR__ . '/SDL_ttf.h';
const OUTPUT_METADATA = __DIR__ . '/metadata.xml';
const OUTPUT_FILE = __DIR__ . '/../resources/generated/.phpstorm.meta.php';

fwrite(STDOUT, " - [1/5] Generating header files\n");

\file_put_contents(INPUT_HEADERS, <<<HEADERS
    #include <stdint.h>

    HEADERS . Header::create());

fwrite(STDOUT, " - [2/5] Generating metadata files\n");

if (!is_file(OUTPUT_METADATA)) {
    (new CastXMLGenerator($_SERVER['FFI_GENERATOR_CASTXML_BINARY'] ?? 'castxml'))
        ->generate(INPUT_HEADERS)
        ->save(OUTPUT_METADATA)
    ;
}

fwrite(STDOUT, " - [3/5] Building AST\n");

$ast = (new CastXMLParser())
    ->parse(OUTPUT_METADATA)
;

fwrite(STDOUT, " - [4/5] Generating IDE helper\n");

$result = (new PhpStormMetadataGenerator(
        argumentSetPrefix: 'ffi_sdl_ttf_',
        ignoreDirectories: ['/usr', ...explode(',', $_SERVER['FFI_GENERATOR_IGNORE_PATHS'] ?? '')],
        naming: new class(
            entrypoint: Serafim\SDL\TTF\TTF::class,
            externalNamespace: 'Serafim\SDL\TTF',
        ) extends SimpleNamingStrategy {
            protected function getEnumTypeName(string $name): string
            {
                return match ($name) {
                    'TTF_Direction' => \Serafim\SDL\TTF\Direction::class,
                    default => throw new \InvalidArgumentException(
                        "Unprocessable mapping of enum \"$name\"",
                    ),
                };
            }
        }
    ))
        ->generate($ast)
    ;

fwrite(STDOUT, " - [5/5] Saving result\n");

file_put_contents(OUTPUT_FILE, (string)$result);

fwrite(STDOUT, "   [ ✓ ] DONE!\n");
