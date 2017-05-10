<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

$db = new Think\Database\PDO();
$db->connect('localhost', 'root', 'root', 'demo');
$ret = $db->query('show databases');
$db->close();

var_dump($ret);
