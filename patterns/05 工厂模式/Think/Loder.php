<?php
namespace Think;

class Loder
{
    static function autoload($class)
    {
        // var_dump($class);
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}
