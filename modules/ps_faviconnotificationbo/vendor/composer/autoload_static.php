<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ff22990a5880322c8f9de16b41d4b5f
{
    public static $classMap = array (
        'AdminConfigureFaviconBoController' => __DIR__ . '/../..' . '/controllers/admin/AdminConfigureFaviconBoController.php',
        'Ps_faviconnotificationbo' => __DIR__ . '/../..' . '/ps_faviconnotificationbo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0ff22990a5880322c8f9de16b41d4b5f::$classMap;

        }, null, ClassLoader::class);
    }
}
