<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

class Page
{
    protected $strategy;
    function index()
    {
        // 这里不需要使用分支结构，直接调用策略的对象的实现方法
        $this->strategy->showAd();
        $this->strategy->showCategory();
    }

    // 设置策略的方法
    function setStrategy(Think\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();

// 根据条件实例化对应的策略
if (isset($_GET['m']) && $_GET['m'] == 'female') {
    $strategy = new Think\FemaleUserStrategy();
} else {
    $strategy = new Think\MaleUserStrategy();
}
// 把策略的对象，传递到页面的对象中
$page->setStrategy($strategy);
$page->index();
