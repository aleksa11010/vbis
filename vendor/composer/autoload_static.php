<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1c3725c0f6914c34a9f3c82d10a8f91
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1c3725c0f6914c34a9f3c82d10a8f91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1c3725c0f6914c34a9f3c82d10a8f91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1c3725c0f6914c34a9f3c82d10a8f91::$classMap;

        }, null, ClassLoader::class);
    }
}
