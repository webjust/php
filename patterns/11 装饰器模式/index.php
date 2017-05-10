<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');
header("Content-Type:text/html charset=utf-8");
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";

/*
class Canvas2 extends Think\Canvas
{
    function draw()
    {
        echo "<div style='color:red'>";
        parent::draw();
        echo "</div>";
    }
}
*/

// 装饰模式的使用
$canvas1 = new Think\Canvas();
$canvas1->init();
// 添加装饰器
$canvas1->addDecorator(new Think\ColorDrawDecorator('green'));
$canvas1->addDecorator(new Think\SizeDrawDecorator('20px'));
$canvas1->rect(2,7,2,18);
$canvas1->draw();
