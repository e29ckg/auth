<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb5a2067b89693d6971e7e632d21b8be
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb5a2067b89693d6971e7e632d21b8be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb5a2067b89693d6971e7e632d21b8be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb5a2067b89693d6971e7e632d21b8be::$classMap;

        }, null, ClassLoader::class);
    }
}
