<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita98011c0eaf79a52d56d5a488e9034e6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita98011c0eaf79a52d56d5a488e9034e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita98011c0eaf79a52d56d5a488e9034e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
