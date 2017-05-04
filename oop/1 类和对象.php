<?php
include './lib/funcs.php';
// PHP类和对象

// $c1 = new Car();	// 在定义类前面new也可以
// 定义1个汽车类
class Car {
    public $name = '汽车';
    public function getName() {
        return $this->name;
    }
}

$c1 = new Car();
var_dump($c1);
echo $c1->getName();

$c1->name = '火车';
var_dump($c1);
echo $c1->getName();