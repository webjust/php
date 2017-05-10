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

    // 使用注册模式
    static function getUser($id)
    {
        $key = 'user_'.$id;
        $user = @Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }

        return $user;
    }
}
