<?php
/*$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "user";
$mysqli = new mysqli($host,$username,$password,$dbname);
if($mysqli->connect_errno){
    exit("链接失败:".$mysqli->connect_error);
}
$mysqli->set_charset("utf8");
$sql = "select * from u_user";
$res = $mysqli->query($sql);
var_dump($res->num_rows);
$res->free_result();
$mysqli->close();*/
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
$sql = "select * from u_user;";
$sql .= "insert into u_user(username, password, email, nickname) values('asd','asd','123321@qq.com','番茄炒西红柿');";

$ress = $mysqli->multi_query($sql);
//print_r($res);
//var_dump($mysqli->store_result());
if($ress){
    $rows = null;
    do{
        if($res = $mysqli->store_result()){
            $rows = $res->fetch_all();
        }
    }while($mysqli->more_results() && $mysqli->next_result());
}
print_r($rows);