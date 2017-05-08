<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

App\Controller\Home\Index::test();
echo "<br />";
Think\Object::test();
