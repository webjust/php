<?php
namespace Think;

class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "电子产品<br/>";
    }

    function showCategory()
    {
        echo "3C配件目录<br/>";
    }
}
