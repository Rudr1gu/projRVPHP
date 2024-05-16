<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc67946762eb72454c0375f642e78f4ab
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\TeladeLogin\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\TeladeLogin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc67946762eb72454c0375f642e78f4ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc67946762eb72454c0375f642e78f4ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc67946762eb72454c0375f642e78f4ab::$classMap;

        }, null, ClassLoader::class);
    }
}