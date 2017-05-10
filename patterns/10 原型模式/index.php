<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');
header("Content-Type:text/html charset=utf-8");
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";

// 生成1个原型对象
$prototype = new Think\Canvas();
$prototype->init();

// $canvas1 = new Think\Canvas();
$canvas1 = clone($prototype);
$canvas1->rect(2,7,2,18);
$canvas1->draw();

echo "<hr/>";

$canvas2 = clone($prototype);
$canvas2->rect(3,5,2,10);
$canvas2->draw();
