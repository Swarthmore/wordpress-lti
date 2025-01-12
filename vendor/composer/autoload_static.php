<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit740f87cb643ba6688bdbdcd10332b293
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'ceLTIc\\LTI\\' => 11,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ceLTIc\\LTI\\' => 
        array (
            0 => __DIR__ . '/..' . '/celtic/lti/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit740f87cb643ba6688bdbdcd10332b293::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit740f87cb643ba6688bdbdcd10332b293::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit740f87cb643ba6688bdbdcd10332b293::$classMap;

        }, null, ClassLoader::class);
    }
}
