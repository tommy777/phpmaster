<?php

namespace lightwork\core;

/**
 * 
 * Enter description here ...
 * @author tommy777
 *
 */
class ClassLoader
{
    protected $dirs;

    /**
     * register #loadClass($class) to {@method spl_autoload_register}.
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    /**
     * 
     * Enter description here ...
     * @param unknown_type $dir
     */
    public function registerDir($dir)
    {
        $this->dirs[] = $dir;
    }

    /**
     * 
     * Enter description here ...
     * @param $class
     */
    public function loadClass($class)
    {
        foreach ($this->dirs as $dir) {
            $file = $dir . '/' . $class . '.php';
            if (is_readable($file)) {
                require $file;
                return;
            }
        }
    }
}
