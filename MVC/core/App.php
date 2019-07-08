<?php

namespace App\Core;


class App
{

    protected static $registry = [];

    public  static function bind($key , $value)
    {
        if(array_key_exists($key , static::$registry)){
            throw Exception("This {$key} is already exists in the continer.");
           }
        static::$registry[$key] = $value;
    }


    public function get($key)
    {
       if(!array_key_exists($key , static::$registry)){
        throw Exception("No {$key} is bound in the continer.");
       }

       return static::$registry[$key];
    }


}