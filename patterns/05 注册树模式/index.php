<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

// 工厂模式实例化对象，并注册
$obj = Think\Factory::createDatabase();

// 注册后，获取该对象
$obj = Think\Register::get('db1');
var_dump($obj);
