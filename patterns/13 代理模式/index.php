<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');
header("Content-Type:text/html charset=utf-8");
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";

/*
// 从库
$db = Think\Factory::getDatabase('slave');
$info = $db->query("SELECT * FROM user WHERE id = 1 limit 1");

// 主库
$db1 = Think\Factory::getDatabase('master');
$db1->query("UPDATE user SET name = 'lili' WHERE id = 1 limit 1");
*/

$proxy = new Think\Proxy();
$proxy->getUserName($id);
$proxy->setUserName($id, $name);
