<?php
class Car
{
	private $num = 1;

	public function __construct()
	{
		echo "构造函数被调用{$this->num}<br/>";
		$this->num += 1;
	}

	public function objNum()
	{
		return $this->num ++;
	}

}

// 实例化的时候，会自动调用构造函数 __construct , 这里会输出字符串
$c1 = new Car();		// 构造函数被调用1
new Car();				// 构造函数被调用1
new Car();				// 构造函数被调用1

echo $c1->objNum();		// 2
echo $c1->objNum();		// 3
echo $c1->objNum();		// 4

echo "<hr />";

/*
在子类中如果定义了__construct则不会调用父类的__construct，如果需要同时调用父类的构造函数，需要使用parent::__construct()显式的调用。
 */
class Trunk extends Car
{
	function __construct()
	{
		echo "子类构造函数被调用了<br/>";
		parent::__construct();
	}
}

new Trunk();

echo "<hr />";

class Train
{
	public function __construct()
	{
		echo "构造方法被调用了<br/>";
	}

	public function __destruct()
	{
		echo "析构方法被调用了<br/>";
	}
}

$t1 = new Train();
echo "--------------<br/>";
unset($t1);
