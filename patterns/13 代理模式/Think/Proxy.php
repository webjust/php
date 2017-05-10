<?php
namespace Think;

class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        $db = Think\Factory::getDatabase('slave');
        $info = $db->query("SELECT * FROM user WHERE id = {$id} limit 1");
    }

    function setUserName($id, $name)
    {
        $db1 = Think\Factory::getDatabase('master');
        $db1->query("UPDATE user SET name = '{$name}' WHERE id = {$id} limit 1");
    }
}
