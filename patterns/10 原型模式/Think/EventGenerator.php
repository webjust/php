<?php
namespace Think;

abstract class EventGenerator
{
    private $observers = array();

    // 添加1个观察者
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    // 通知观察者
    function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}
