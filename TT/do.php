<?php
require_once "action.php";

$username = $_POST["username"];
$password = $_POST["password"];
$mysqli = content();

$sql = "select * from u_user where username ='$username' and password='$password'";
$res = $mysqli->query($sql);
$num = $res->num_rows;
if($num){
    echo $num;
}else{
    echo 0;
}