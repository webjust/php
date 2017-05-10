<?php
namespace Think;

// 定义一个数据库的适配器接口类
interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}
