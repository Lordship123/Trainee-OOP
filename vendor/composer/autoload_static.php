<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbec78efe694f6fc11addf62e771b2a4
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'view\\' => 5,
        ),
        'c' => 
        array (
            'controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'view\\' => 
        array (
            0 => __DIR__ . '/../..' . '/view',
        ),
        'controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'controller\\HelloContrl' => __DIR__ . '/../..' . '/controller/HelloContrl.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbec78efe694f6fc11addf62e771b2a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbec78efe694f6fc11addf62e771b2a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcbec78efe694f6fc11addf62e771b2a4::$classMap;

        }, null, ClassLoader::class);
    }
}
