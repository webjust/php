<?php
namespace Think;

class Canvas
{
    public $data;
    protected $decorators = array();

    //Decorator
    function init($width = 20, $height = 10)
    {
        $data = array();
        for($i = 0; $i < $height; $i++)
        {
            for($j = 0; $j < $width; $j++)
            {
                $data[$i][$j] = '=';
            }
        }
        $this->data = $data;
    }

    // 添加装饰器
    function addDecorator(DrawDecorator $decorator)
    {
        $this->decorators[] = $decorator;
    }

    // Draw装饰方法1
    function beforeDraw()
    {
        foreach($this->decorators as $decorator)
        {
            $decorator->beforeDraw();
        }
    }

    // Draw装饰方法2
    function afterDraw()
    {
        $decorators = array_reverse($this->decorators);
        foreach($decorators as $decorator)
        {
            $decorator->afterDraw();
        }
    }

    function draw()
    {
        $this->beforeDraw();    // 装饰器方法
        foreach($this->data as $line)
        {
            foreach($line as $char)
            {
                echo $char;
            }
            echo "<br />\n";
        }
        $this->afterDraw();     // 装饰器方法
    }

    function rect($a1, $a2, $b1, $b2)
    {
        foreach($this->data as $k1 => $line)
        {
            if ($k1 < $a1 or $k1 > $a2) continue;
            foreach($line as $k2 => $char)
            {
                if ($k2 < $b1 or $k2 > $b2) continue;
                $this->data[$k1][$k2] = '+';
            }
        }
    }
}
