<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82a3e9d091c8c37c50fbead17a22700c
{
    public static $files = array (
        '2df68f9e79c919e2d88506611769ed2e' => __DIR__ . '/..' . '/respect/stringifier/src/stringify.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
            'Respect\\Stringifier\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'Respect\\Stringifier\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/stringifier/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82a3e9d091c8c37c50fbead17a22700c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82a3e9d091c8c37c50fbead17a22700c::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit82a3e9d091c8c37c50fbead17a22700c::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit82a3e9d091c8c37c50fbead17a22700c::$classMap;

        }, null, ClassLoader::class);
    }
}
