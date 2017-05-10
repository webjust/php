<?php
namespace Think;

// 定义一个用户的策略接口
interface UserStrategy
{
    function showAd();
    function showCategory();
}
