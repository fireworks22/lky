<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/23 0023
 * Time: 15:36
 */
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "123456";
const DB_NAME = "comment";
function content()
{
    $mysqli = new mysqli();
//链接数据库
    $link = $mysqli->connect(HOST, USERNAME, PASSWORD, DB_NAME);
    $mysqli->set_charset("utf8");
//判断数据库是否连接成功
    if ($mysqli->error) {
        echo "数据库链接失败" . $mysqli->errno;
    }else{
        return $mysqli;
    }
}
function queryData($mysqli){
    //查询t_comment表中的所有字段的SQL语句
    $sql = "select * from t_com";
    //执行SQL语句
    $res = $mysqli->query($sql);
    if($res){
        while($row = $res->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
}