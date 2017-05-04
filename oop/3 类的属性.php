<?php
class Car
{
	// 定义公有属性
	public $name = '汽车';

	// 定义受保护的属性
	protected $color = '#FFF';

	// 定义私有属性
	private $price = '100000';

	// 定义1个方法，访问私有属性
	public function getPrice()
	{
		// 内部访问私有属性，使用$this
		return $this->price;
	}
}

$c1 = new Car();

/*echo $c1->name;		// 汽车
echo $c1->color;	// 语法错误
*/

echo $c1->getPrice();	// 10000