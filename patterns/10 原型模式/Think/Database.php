<?php
namespace Think;

class Database
{
    static protected $obj;

    private function __construct()
    {
        //
    }

    static public function getDbInstance()
    {
        if (self::$obj) {
            return self::$obj;
        } else {
            self::$obj = new self();
            return self::$obj;
        }
    }

    public function where($where)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }
}
