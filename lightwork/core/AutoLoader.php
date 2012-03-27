<?php

namespace lightwork\core;
require 'core/ClassLoader.php';

/**
 * 
 * Enter description here ...
 * @author tommy777
 *
 */
class AutoLoader
{
    private static $loader;
    
    /**
     * 
     * Enter description here ...
     */
    public static function autoload($dir)
    {
        if (self::$loader == null) {
            self::$loader = new ClassLoader();
            self::$loader->register();
            self::$loader->registerDir(dirname(__DIR__));
        }
        self::$loader->registerDir($dir);
    }
    
}

