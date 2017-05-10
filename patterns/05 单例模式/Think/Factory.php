<?php
namespace Think;

// 工厂模式
class Factory
{
    static function createDatabase()
    {
        return Database::getDbInstance();
    }
}
