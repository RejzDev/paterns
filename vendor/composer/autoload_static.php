<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac5b97258bf7e34490e3eee5e0913c9c
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'paterns\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'paterns\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac5b97258bf7e34490e3eee5e0913c9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac5b97258bf7e34490e3eee5e0913c9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac5b97258bf7e34490e3eee5e0913c9c::$classMap;

        }, null, ClassLoader::class);
    }
}
