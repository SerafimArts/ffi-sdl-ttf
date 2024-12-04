<?php

declare(strict_types=1);

namespace Serafim\SDL\TTF;

use FFI\Contracts\Headers\Version as UserVersion;
use FFI\Contracts\Headers\Version\Comparable;
use FFI\Contracts\Headers\Version\ComparableInterface;
use FFI\Contracts\Headers\VersionInterface;

enum Version: string implements VersionInterface, ComparableInterface
{
    use Comparable;

    /**
     * @link https://www.libsdl.org/projects/SDL_ttf/release/
     */
    case V2_0_14 = '2.0.14';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.0.15
     */
    case V2_0_15 = '2.0.15';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.0.18
     */
    case V2_0_18 = '2.0.18';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.19.2
     *
     * @deprecated This is prerelease version
     */
    case V2_19_2 = '2.19.2';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.19.3
     *
     * @deprecated This is prerelease version
     */
    case V2_19_3 = '2.19.3';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.20.0
     */
    case V2_20_0 = '2.20.0';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.20.1
     */
    case V2_20_1 = '2.20.1';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases/tag/release-2.20.2
     */
    case V2_20_2 = '2.20.2';

    /**
     * @link https://github.com/libsdl-org/SDL_ttf/releases
     */
    public const LATEST = self::V2_20_2;

    /**
     * @param non-empty-string $version
     */
    public static function create(string $version): VersionInterface
    {
        /** @var array<non-empty-string, VersionInterface> $versions */
        static $versions = [];

        return self::tryFrom($version) ?? $versions[$version] ??= UserVersion::fromString($version);
    }

    public function toString(): string
    {
        return $this->value;
    }
}
