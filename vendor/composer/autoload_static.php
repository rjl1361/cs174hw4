<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d8fddb39099a3d63d5aa4b4aaa3f252
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HMRTeam\\hw4\\views\\' => 18,
            'HMRTeam\\hw4\\models\\' => 19,
            'HMRTeam\\hw4\\controllers\\' => 24,
            'HMRTeam\\hw4\\configs\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HMRTeam\\hw4\\views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/views',
        ),
        'HMRTeam\\hw4\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'HMRTeam\\hw4\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'HMRTeam\\hw4\\configs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/configs',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d8fddb39099a3d63d5aa4b4aaa3f252::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d8fddb39099a3d63d5aa4b4aaa3f252::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8d8fddb39099a3d63d5aa4b4aaa3f252::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
