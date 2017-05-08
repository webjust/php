<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

$db = new \Think\Database();
$res = $db->where('id=1')->where('name=zhangsan')->order('id desc')->limit(10);
var_dump($res);
