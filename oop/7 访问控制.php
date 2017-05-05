<?php
/*class Car
{
	public $speed = 100;
	public $name = '汽车';

	function getName()
	{
		echo $this->name;
	}
}*/


class Car
{
	private function __construct()
	{
		echo "实例化对象<br/>";
	}

	private static $_obj = null;
	public static function getInstance()
	{
		if (empty(self::$_obj)) {
			return self::$_obj = new Car();
		}
		return self::$_obj;
	}
}

// $c1 = new Car();	// 提示不允许直接实例化一个私有访问控制构造函数的对象。
// Fatal error: Call to private Car::__construct() from invalid context
$c2 = Car::getInstance();
$c3 = Car::getInstance();
$c4 = Car::getInstance();
$c4 = Car::getInstance();

var_dump($c2);
var_dump($c2);
var_dump($c4);