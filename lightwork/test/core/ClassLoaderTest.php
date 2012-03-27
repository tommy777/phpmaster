<?php
//
////$a;
//$a = "a";
//$a = "b";
////var_dump($a);
//echo $a, PHP_EOL;
////print $a;
////syslog(1, "a");
////print debug_backtrace();
////$a[] = "a";
////$a[] = "b";
////echo $a, PHP_EOL;

namespace lightwork\core;
require 'core/ClassLoader.php';
//use lightwork\core\ClassLoader;

class ClassLoaderTest
{
    private $testee;

    public function setUp()
    {
        $this->testee = new ClassLoader();
    }

//    public function testRegister()
//    {
//        $this->setUp();
//        $this->testee->register();
////        $this->testee->registerDir(array());
//        $functions = spl_autoload_functions();
////        foreach ($functions as $function) {
////            //            if ($function) {
////            var_dump($function);
////            //            }
////        }
//    echo empty($functions);
//            var_dump($functions);
//    }
//    public function testRegisterDir()
//    {
//        $this->setUp();
//        $this->testee->registerDir(dirname("/"));
//        if ($this->testee) {
//            
//        }
//    }
}

$testee = new ClassLoaderTest();
//$testee->testRegister();
//var_dump($testee);
