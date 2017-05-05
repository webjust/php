<?php
class Car
{
	// 
}

$c1 = new Car();
$c2 = new Car();

echo $c1==$c2 ? "==" : "!=";		// ==
echo $c1===$c2 ? "===" : "!==";		// !==

echo "<hr />";

class Truck
{
	public $name = "Truck";

	public function __clone()
	{
		$obj = new Truck();
		$obj->name = $this->name;
	}
}

$a = new Truck();
$a->name = "new Truck";
$b = clone $a;
var_dump($b);

echo "<hr/>";

class Bike
{
	public $name = "自行车";
}

$bike = new Bike();
$str = serialize($bike);
var_dump($str);
$str = unserialize($str);
var_dump($str);