<?php
spl_autoload_register('autoload');  // 该函数可以在1个PHP文件中出现多次

Test1::test();
echo "</br>";
Test2::test();

function autoload($class)
{
    require __DIR__ . '/' . $class . '.php';
}
