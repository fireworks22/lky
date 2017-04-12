<?php
include "action.php";
session_start();
$email = $_POST["email"];
$username = $_POST["username"];
$content = $_POST["content"];
$verify = $_POST["verify"];
$code = $_SESSION["codex"];

if(strtolower($verify) == $code){


    $mysqli = content();
    $sql = "INSERT  INTO t_com (email, username, content) VALUES ('$email', '$username', '$content')";
//    echo $sql;
    $res = $mysqli->query($sql);
    echo $res;
}else{
    echo 2;
}



/*$email = $_POST['email'];
$username = $_POST['username'];
$content = $_POST['content'];
$mysqli = content();
$sql = 'INSERT  INTO t_com (email, username, content)'.
    ' VALUES ('.$email.','.$username.','.$content.')';*/