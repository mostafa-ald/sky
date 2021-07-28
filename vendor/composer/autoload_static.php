<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3954585e458eab6ad918698211b0dba2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moso\\WpCrud\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moso\\WpCrud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3954585e458eab6ad918698211b0dba2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3954585e458eab6ad918698211b0dba2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3954585e458eab6ad918698211b0dba2::$classMap;

        }, null, ClassLoader::class);
    }
}
