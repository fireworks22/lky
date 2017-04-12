<?php
include "action.php";
$username = $_POST["username"];
$password = $_POST["password"];
$passwordes = $_POST['passwordes'];
$email = $_POST["email"];
$char = $username[0];
$ascii = ord($char);
if($char>64 && $char<91) {
    if (strcmp($password, $passwordes) == 0) {

        $mysqli = content();
        $sql = "INSERT  INTO str_user (username, password, email) VALUES ('$username', '$password', '$email')";
        $res = $mysqli->query($sql);

        echo $res;
    } else {
        echo 2;
    }
}else{
    echo 3;
}