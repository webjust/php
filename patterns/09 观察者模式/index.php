    <?php
    // 入口文件
    define('BASEDIR', __DIR__);
    include BASEDIR . '/Think/Loder.php';
    spl_autoload_register('\\Think\\Loder::autoload');
    header("Content-Type:text/html charset=utf-8");
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";

    class Event extends Think\EventGenerator
    {
        function trigger()
        {
            echo "Event<br />";
            $this->notify();
        }
    }

    class Observer1 implements Think\Observer
    {
        function update($event_info = null)
        {
            echo "逻辑1<br />";
        }
    }

    class Observer2 implements Think\Observer
    {
        function update($event_info = null)
        {
            echo "逻辑2<br />";
        }
    }

    $event = new Event();
    $event->addObserver(new Observer1);
    $event->addObserver(new Observer2);
    $event->trigger();
