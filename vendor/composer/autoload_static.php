<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3f36bf9c2d59464df1b9ca73ac1d3f7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3f36bf9c2d59464df1b9ca73ac1d3f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3f36bf9c2d59464df1b9ca73ac1d3f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
