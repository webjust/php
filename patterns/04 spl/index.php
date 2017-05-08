<?php
// 入口文件
define('BASEDIR', __DIR__);
include BASEDIR . '/Think/Loder.php';
spl_autoload_register('\\Think\\Loder::autoload');

// 入栈
$stack = new SplStack();
$stack->push("data1<br/>");
$stack->push("data2<br/>");

echo $stack->pop();
echo $stack->pop();

echo "<hr/>";

// 队列
$queue = new SplQueue();
$queue->enqueue("data1<br/>");
$queue->enqueue("data2<br/>");

echo $queue->dequeue();
echo $queue->dequeue();

echo "<hr/>";

// 堆
$heap = new SplMinHeap();
$heap->insert("data1<br/>");
$heap->insert("data2<br/>");

echo $heap->extract();
echo $heap->extract();

echo "<hr />";

// 固定长度的数组
$array = new SplFixedArray(10);
$array[1] = 'num 1';
$array[5] = 'num 5';

var_dump($array);
