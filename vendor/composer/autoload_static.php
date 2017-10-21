<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'C' => 
        array (
            'ConsoleTVs\\Profanity\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'ConsoleTVs\\Profanity\\' => 
        array (
            0 => __DIR__ . '/..' . '/consoletvs/profanity',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
