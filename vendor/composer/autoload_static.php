<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf37cbd0cb781c0f42221d75b847d435e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abad0\\public\\' => 13,
            'Abad0\\BibliotecaDePeliculas\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abad0\\public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'Abad0\\BibliotecaDePeliculas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf37cbd0cb781c0f42221d75b847d435e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf37cbd0cb781c0f42221d75b847d435e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf37cbd0cb781c0f42221d75b847d435e::$classMap;

        }, null, ClassLoader::class);
    }
}
