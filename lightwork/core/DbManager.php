<?php

class DbManager
{
    protected $connections = array();
    
    public function connect($name, $params)
    {
        $params = array_merge(array(
            'dns'   => null,
            'user' => '',
            'password'  => '',
            'options' => array(),
        ), $params);
        
        $con = new PDO($params['dns'], $params['user'], $params['password'], $params['options']);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $this->connections[$name] = $con;
    }
    
    public function getConnection($name = null)
    {
        if(is_null($name)) {
            return current($connections);
        }
        
        return $this->connections[$name];
    }
}