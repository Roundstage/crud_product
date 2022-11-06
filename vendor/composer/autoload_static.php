<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb865d161f350363dacef1d491e676902
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/roundstage/php_classes/src',
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitb865d161f350363dacef1d491e676902::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb865d161f350363dacef1d491e676902::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb865d161f350363dacef1d491e676902::$classMap;

        }, null, ClassLoader::class);
    }
}
