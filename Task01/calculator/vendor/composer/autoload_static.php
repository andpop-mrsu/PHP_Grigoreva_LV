<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71c8cc1c276da75853d76a1fc150de60
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LuboveGrigoreva\\Calculator\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LuboveGrigoreva\\Calculator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71c8cc1c276da75853d76a1fc150de60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71c8cc1c276da75853d76a1fc150de60::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit71c8cc1c276da75853d76a1fc150de60::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit71c8cc1c276da75853d76a1fc150de60::$classMap;

        }, null, ClassLoader::class);
    }
}
