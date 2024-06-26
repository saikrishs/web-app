<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc8801d715c838b8f8cfa4a2f5b425bc
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

        spl_autoload_register(array('ComposerAutoloaderInitcc8801d715c838b8f8cfa4a2f5b425bc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc8801d715c838b8f8cfa4a2f5b425bc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc8801d715c838b8f8cfa4a2f5b425bc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
