    <?php
    // 入口文件
    define('BASEDIR', __DIR__);
    include BASEDIR . '/Think/Loder.php';
    spl_autoload_register('\\Think\\Loder::autoload');
    header("Content-Type:text/html charset=utf-8");
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";

    class Page
    {
        function index()
        {
            // 实例化1个用户表对象：User
            $user = Think\Factory::getUser(4);
            $user->name = 'zhangsan999';
            var_dump($user);
            echo "ok";
        }

        function test()
        {
            $user = Think\Factory::getUser(4);
            $user->passwd = 333999;
            var_dump($user);
        }
    }

    $page = new Page();
    $page->index();
    $page->test();
