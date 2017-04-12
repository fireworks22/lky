<?php
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "user";
$mysqli = new mysqli($host, $username, $password, $dbname);
if($mysqli ->connect_errno){
    exit("连接失败:".$mysqli->connect_error);
}
//设置客户端字符集
$mysqli->set_charset("utf8");

$sql = "select * from u_user";
$res = $mysqli->query($sql);
var_dump($res->num_rows);

//释放结果集
$res->free_result();

//关闭链接
$mysqli->close();