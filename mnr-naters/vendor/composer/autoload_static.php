<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc146d82885c6cd66378b58a1d94def7
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'ots\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ots\\' => 
        array (
            0 => __DIR__ . '/../..' . '/code',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc146d82885c6cd66378b58a1d94def7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc146d82885c6cd66378b58a1d94def7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
