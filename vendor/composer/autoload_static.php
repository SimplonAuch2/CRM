<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2601c1403bf85ca8ab89c9047b027066
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2601c1403bf85ca8ab89c9047b027066::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2601c1403bf85ca8ab89c9047b027066::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
