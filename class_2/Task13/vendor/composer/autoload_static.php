<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7db927f103a53e3b3100787755e1397
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7db927f103a53e3b3100787755e1397::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7db927f103a53e3b3100787755e1397::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7db927f103a53e3b3100787755e1397::$classMap;

        }, null, ClassLoader::class);
    }
}
