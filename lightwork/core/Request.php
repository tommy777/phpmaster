<?php

namespace lightwork\core;

class Request
{
    public function isPost()
    {
        return ($_SERVER['REQUEST_METHOD'] === 'POST');
    }

    public function getGet($name, $default = null)
    {
        return $this->getValue($_GET, $name, $default);
    }
    public function getPost($name, $default = null)
    {
        return $this->getValue($_POST, $name, $default);
    }

    public function getHost()
    {
        if (!empty($_SERVER['HTTP_HOST'])) {
            return $_SERVER['HTTP_HOST'];
        }
        return $_SERVER['SERVER_NAME'];
    }

    public function isSsl()
    {
        return (isset($_SERVER['https']) && $_SERVER['https'] === 'on');
    }

    public function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getBaseUrl()
    {
        $script_name = $_SERVER['SCRIPT_NAME'];
        $request_uri = $this->getRequestUri();

        if (0 === strpos($request_uri, $script_name)) {
            return $script_name;
        } else if (0 === strpos($request_uri, dirname($script_name))) {
            return rtrim(dirname($script_name), '/');
        }

        return '';
    }

    public function getPathInfo()
    {
        $base_url = $this->getBaseUrl();
        $request_uri = $this->getRequestUri();

        if (false !== ($pos = strpos($request_uri, '?'))) {
            $request_uri = substr($request_uri, 0, $pos);
        }

        return (String) substr($request_uri, strlen($base_url));
    }

    private function getValue($hash, $key, $default = null) {
        if (isset($hash[$key])) {
            return $hash[$key];
        }
        return $default;
    }
}