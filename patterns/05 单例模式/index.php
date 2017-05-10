<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

$obj = Think\Database::getDbInstance();
$obj = Think\Factory::createDatabase();
var_dump($obj);
