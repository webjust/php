<?php
namespace Think\Database;
use Think\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $ret = mysql_query($sql, $this->conn);
        return $ret;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}
