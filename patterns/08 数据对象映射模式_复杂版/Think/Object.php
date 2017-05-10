<?php
namespace Think;

class Object
{
    protected $array = array();
    public function __set($key, $value)
    {
        var_dump(__METHOD__);
        $this->array[$key] = $value;
    }

    public function __get($key)
    {
        var_dump(__METHOD__);
        return $this->array[$key];
    }

    public function __call($func, $param)
    {
        var_dump($func, $param);
        return "魔术方法\n";
    }

    static public function __callStatic($func, $param)
    {
        var_dump($func, $param);
        return "魔术方法\n";
    }

    public function __toString()
    {
        return __CLASS__;
    }

    public function __invoke($param)
    {
        var_dump($param);
        return "__invoke\n";
    }
}
