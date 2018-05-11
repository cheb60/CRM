<?php namespace JayJay\Classes;

class Configuration
{

    public static function instance()
    {

    }

    public static function get($key)
    {
        $keys = explode('.', $key);
        $config = require('\..\config\\' . $keys[0]);
        print_r($config['providers']);
        $value = $config[$keys[1]];
        return $value;
    }

}