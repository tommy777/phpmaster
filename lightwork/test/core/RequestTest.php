<?php

require_once 'core/Request.php';
use lightwork\core\Request;

function testGeneralUrl()
{
    $request = new Request();
    $_SERVER['REQUEST_URI'] = '/foo/bar/list';
    $_SERVER['SCRIPT_NAME'] = '/foo/bar/index.php';
    echo '$request->getBaseUrl():' . $request->getBaseUrl(), PHP_EOL;
    echo '$request->getPathInfo():' . $request->getPathInfo(), PHP_EOL;
}

function testFrontControllerUrl()
{
    $request = new Request();
    $_SERVER['REQUEST_URI'] = '/index.php/list?foo=bar';
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    echo '$request->getBaseUrl():' . $request->getBaseUrl(), PHP_EOL;
    echo '$request->getPathInfo():' . $request->getPathInfo(), PHP_EOL;
}
testGeneralUrl();
testFrontControllerUrl();
