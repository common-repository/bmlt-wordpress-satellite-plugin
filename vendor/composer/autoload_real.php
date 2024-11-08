<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc31a6919a0d65076e4a485f7e65cd4fa
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc31a6919a0d65076e4a485f7e65cd4fa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc31a6919a0d65076e4a485f7e65cd4fa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc31a6919a0d65076e4a485f7e65cd4fa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
