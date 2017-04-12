<?php
require_once "DB.php";
class Mysql implements DB{

    public function connect()
    {

        return "数据库连接成功";

    }

    public function insert()
    {
        return "数据写入成功";
    }

    public function update()
    {
        return "数据修改成功" ;
    }

    public function delete()
    {
        return "数据删除成功";
    }

    public function select()
    {
        return "数据查找成功";
    }

    public function close()
    {
        return "数据库关闭成功";
    }
}
$mysql = new Mysql();