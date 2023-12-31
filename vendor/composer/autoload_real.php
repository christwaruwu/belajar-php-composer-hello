<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit844735af40ebfd1b1863b921d8e09eae
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

        spl_autoload_register(array('ComposerAutoloaderInit844735af40ebfd1b1863b921d8e09eae', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit844735af40ebfd1b1863b921d8e09eae', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit844735af40ebfd1b1863b921d8e09eae::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
