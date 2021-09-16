<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6267daccc04408dbf7b80dfcb242275f
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'm' => 
        array (
            'masokky' => 
            array (
                0 => __DIR__ . '/..' . '/masokky/quotemaker/src',
            ),
        ),
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit6267daccc04408dbf7b80dfcb242275f::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6267daccc04408dbf7b80dfcb242275f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}