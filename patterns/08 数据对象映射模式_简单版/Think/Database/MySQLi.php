<?php
namespace Think\Database;
use Think\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        mysqli_set_charset($conn, 'utf-8');
        $this->conn = $conn;
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
