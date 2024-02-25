<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06012d1c798a63d36f590cfdbc4df415
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06012d1c798a63d36f590cfdbc4df415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06012d1c798a63d36f590cfdbc4df415::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06012d1c798a63d36f590cfdbc4df415::$classMap;

        }, null, ClassLoader::class);
    }
}
