<?php
class Model
{
	protected static $obj = null;	
	private function __construct()
	{
		echo "初始化数据库<br/>";
	}

	static public function getModel()
	{
		if (self::$obj == null)
		{
			return self::$obj = new self;
		}
		return self::$obj;
	}
}

$p1 = Model::getModel();
var_dump($p1);
$p2 = Model::getModel();
var_dump($p2);

if ($p1 === $p2) {
	echo "实例化了1个Model类<br/>";
} else {
	echo "实例化了2个Model类<br/>";
}