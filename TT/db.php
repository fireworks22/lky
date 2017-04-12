<?php
include "action.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$verify = $_POST["verify"];
$code = $_SESSION["cod"];

if(strtolower($verify) == $code){
    $mysqli = content();

    $sql = "INSERT  INTO u_user (username, nickname, password, email) VALUES ('$username','$nickname', '$password', '$email')";
    $res = $mysqli->query($sql);
    echo $res;
}else{
    echo 2;
}
