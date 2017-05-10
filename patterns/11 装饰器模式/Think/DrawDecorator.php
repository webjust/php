<?php
namespace Think;

// 声明1个装饰器接口
interface DrawDecorator
{
    function beforeDraw();
    function afterDraw();
}
