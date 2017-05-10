<?php
namespace Think\Database;
use Think\IDatabase;

class PDO implements IDatabase
{
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host={$host}; dbname={$dbname}", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}
