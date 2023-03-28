<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f82a0af3633dcfe276e4c4adf9be060
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lloc\\Msls\\' => 10,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lloc\\Msls\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f82a0af3633dcfe276e4c4adf9be060::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f82a0af3633dcfe276e4c4adf9be060::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f82a0af3633dcfe276e4c4adf9be060::$classMap;

        }, null, ClassLoader::class);
    }
}
