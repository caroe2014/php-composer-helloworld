<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite26b707f18f335f44f2b03e6093bee6c
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite26b707f18f335f44f2b03e6093bee6c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
