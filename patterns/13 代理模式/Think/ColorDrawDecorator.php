<?php
namespace Think;

class ColorDrawDecorator implements DrawDecorator
{
    protected $color = 'black';

    function __construct($color)
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        echo "<div style='color:" . $this->color . "'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}
