<?php
namespace Think;

// 工厂模式
class Factory
{
    static function createDatabase()
    {
        $db = Database::getDbInstance();

        // 注册模式之注册
        Register::set('db1', $db);
        return $db;
    }
}
