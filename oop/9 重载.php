<?php
class Car
{
	protected $ary = array();

	public function __set($name, $value)
	{
		$this->ary[$name] = $value;
	}

	public function __get($name)
	{
		if (isset($this->ary[$name])) {
			return $this->ary[$name];
		}
		return null;
	}

	public function __isset($name)
	{
		if (isset($this->ary[$name])) {
			return true;
		}
		return false;
	}

	public function __unset($name)
	{
		unset($this->ary[$name]);
	}
}

$car = new Car();
$car->name = '汽车';
echo $car->name;		// 汽车

echo "<hr />";

// 调用不存在的方法，自动调用 __call() 如果是静态方法则自动调用 __callStatic()
class Truck
{
	public $speed = 0;
	public function __call($name, $args)
	{
		if ($name == 'speedUp') {
			return $this->speed += 10;
		}
	}
}

$truck = new Truck();
echo $truck->speed;		// 0
$truck->speedUp();
echo $truck->speed;		// 10