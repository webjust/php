<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');
header("Content-Type:text/html charset=utf-8");

// 实例化1个用户表对象：User
$user = new Think\User(2);

// 获取对象中的属性，对象数据表中的一条记录
echo $user->id."<br/>";
echo $user->name."<br/>";
echo $user->passwd."<br/>";
echo $user->created_time."<br/>";

// 修改属性值之后，利用析构方法自动保存
$user->name = '王五';
$user->passwd = md5('123');
$user->created_time = time();
