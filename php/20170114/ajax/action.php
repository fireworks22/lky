<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

//    echo $username."==".$password;
//检测用户名
    if($username == "root"){
//        echo "101"; //101 --> 用户名输入正确
        // 检测密码
        if($password == "root"){
            echo "102"; //102 --> 登录成功
        }else{
            echo "002"; // 002 --> 密码错误
        }
    }else{
        echo "001"; //001 --> 用户名输入错误
    }