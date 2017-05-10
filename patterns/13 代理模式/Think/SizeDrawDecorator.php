<?php
namespace Think;

class SizeDrawDecorator implements DrawDecorator
{
    protected $size = 'black';

    function __construct($size)
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        echo "<div style='font-size:" . $this->size . "'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}
