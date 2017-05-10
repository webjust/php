<?php
namespace Think;

class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "2017新款女装<br/>";
    }

    function showCategory()
    {
        echo "女装目录<br/>";
    }
}
