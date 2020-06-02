<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit868427235127ef10c010f6095bf394e6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shopier\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shopier\\' => 
        array (
            0 => __DIR__ . '/..' . '/erkineren/shopier/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit868427235127ef10c010f6095bf394e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit868427235127ef10c010f6095bf394e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}