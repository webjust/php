<?php
class Car
{
	public $speed = 0;
	
	// 定义1个公共方法
	public function getName()
	{
		return '汽车';
	}

	public static function getPrice()
	{
		return '100000';
	}

	public function speedUp()
	{
		$this->speed += 10;
	}
}

// 实例化对象
$c1 = new Car();
echo $c1->getName();	// 公共方法，使用对象操作符 -> 访问
echo $c1::getPrice();   // 静态防范，需要使用操作符 ::

$c1->speedUp();
$c1->speedUp();
echo $c1->speed;		// 20
