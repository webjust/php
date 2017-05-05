<?php
// 建立一个Truck类，扩展Car类，并覆盖speedUp方法，使速度累加50
class Car
{
	protected $speed = 100;

	public function speedUp()
	{
		return $this->speed += 10;
	}
}

// 继承
class Truck extends Car
{
	// 子类覆盖父类的方法
	public function speedUp()
	{
		return $this->speed += 50;
	}
}

$car = new Car();
echo $car->speedUp();	//110
$truck = new Truck();
echo $truck->speedUp();	//150