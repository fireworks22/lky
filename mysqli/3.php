<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7 0007
 * Time: 14:23
 */
header("Content-type: text/html; charset=utf-8");
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "user";
$mysqli = new mysqli($host, $username, $password, $dbname);
if($mysqli->connect_errno){
    exit("连接失败".$mysqli->connect_error);
}
$mysqli->set_charset("utf8");
//准备预处理语句
//?指的是占位符
$sql = "select * from u_user where username = ?";
$mysqli_stmt = $mysqli->prepare($sql);
//var_dump($mysqli_stmt);
//绑定参数
$username ="12345";
/*s:字符串
 * i:整形
 * d:double
 * */
$mysqli_stmt->bind_param("s",$username);

//执行预处理语句
$e = $mysqli_stmt->execute();
if($e){
    $rows = null;
    while ($row = $mysqli_stmt->fetch()){
        $rows[] = $row;
    }
}
var_dump($rows);