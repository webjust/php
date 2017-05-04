<?php
// 定义一个类
class Car
{
	// 定义属性
	var $name = '汽车';

	// 定义方法
	public function getName()
	{
		// $this是一个伪变量，表示对象自己，用来调用对象的属性或者方法
		return $this->name;
	}
}

// 实例化一个类，使用new关键字生成一个对象。也支持使用变量生成一个对象。
$c1 = new Car();

$className = 'Car';
$c2 = new $className();

var_dump($c1);
var_dump($c2);