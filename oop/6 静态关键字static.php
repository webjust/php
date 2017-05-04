<?php
class Car
{
	private static $speed = 100;
	public static function getSpeed()
	{
		return self::$speed;
	}

	public static function speedUp()
	{
		return self::$speed += 10;
	}
}

$c1 = new Car();
echo $c1::getSpeed();		// 100 调用静态方法

$func = 'getSpeed';
$className = 'Car';
echo $className::$func();	// 动态调用静态方法

class bigCar extends Car
{
	public static function start()
	{
		parent::speedUp();
	}
}

echo bigCar::start();	// 使用 :: 调用静态方法
echo $c1::getSpeed();	// 110