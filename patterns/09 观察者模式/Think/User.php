<?php
namespace Think;

class User
{
    public $id;
    public $name;
    public $passwd;
    public $created_time;

    protected $db;
    function __construct($id)
    {
        // 创建对象后，自动执行
        $this->db = new Database\MySQLi();
        $this->db->connect('localhost', 'root', 'root', 'demo');
        $ret = $this->db->query('SELECT * FROM `user` WHERE `id` = ' . $id);
        $data = mysqli_fetch_assoc($ret);

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->passwd = $data['passwd'];
        $this->created_time = $data['created_time'];
    }

    function __destruct()
    {
        // 对象注销前，自动执行
        $sql = "UPDATE `user` SET name = '{$this->name}', passwd = '{$this->passwd}', created_time = '{$this->created_time}' WHERE id = {$this->id}";
        echo $sql;
        $this->db->query($sql);
        $this->db->close();
    }
}
