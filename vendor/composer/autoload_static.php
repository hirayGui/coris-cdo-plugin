<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde4966cf3eccc8635921b52749efcc61
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde4966cf3eccc8635921b52749efcc61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde4966cf3eccc8635921b52749efcc61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde4966cf3eccc8635921b52749efcc61::$classMap;

        }, null, ClassLoader::class);
    }
}
