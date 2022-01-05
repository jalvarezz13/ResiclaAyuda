<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0534fc1a413a6ea240ab636a7d62906
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OnBoarding\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OnBoarding\\' => 
        array (
            0 => __DIR__ . '/../..' . '/OnBoarding',
        ),
    );

    public static $classMap = array (
        'OnBoarding\\Configuration' => __DIR__ . '/../..' . '/OnBoarding/Configuration.php',
        'OnBoarding\\OnBoarding' => __DIR__ . '/../..' . '/OnBoarding/OnBoarding.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0534fc1a413a6ea240ab636a7d62906::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0534fc1a413a6ea240ab636a7d62906::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0534fc1a413a6ea240ab636a7d62906::$classMap;

        }, null, ClassLoader::class);
    }
}
