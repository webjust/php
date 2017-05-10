<?php
namespace Think\Database;
use Think\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
        mysqli_set_charset($this->conn, 'utf-8');
    }

    function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    function close()
    {
        mysqli_close($this->conn);
    }

    function fetch_assoc()
    {

    }
}
