<?php
namespace Think;

class Register
{
    protected static $obj = array();

    static function set($alias, $object)
    {
        self::$obj[$alias] = $object;
    }

    static function get($alias)
    {
        return self::$obj[$alias];
    }

    function _unset($alias)
    {
        unset(self::$obj[$alias]);
    }
}
