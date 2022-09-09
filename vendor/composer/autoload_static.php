<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74bed94fa8c632f7cde9fe66aa2561a9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Techunico\\SmsSender\\' => 20,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Techunico\\SmsSender\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74bed94fa8c632f7cde9fe66aa2561a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74bed94fa8c632f7cde9fe66aa2561a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74bed94fa8c632f7cde9fe66aa2561a9::$classMap;

        }, null, ClassLoader::class);
    }
}
