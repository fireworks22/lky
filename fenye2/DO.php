<?php
header("Content-type:text/html; charset=utf-8");
session_start();

$act = $_GET["act"];
$mysqli = new mysqli("localhost","root","123456","users");
if($mysqli->connect_errno){
    exit("数据库连接失败:".$mysqli->connect_error);
}
//释放结果集
$mysqli->set_charset("utf8");
 switch ($act){
     case "add":
         $username = $_POST["username"];
         $password = md5($_POST["password"]);
         $nickname = $_POST["nickname"];
         $email = $_POST["email"];
         $sql = "insert into user(username, password,nickname, email) VALUES ('{$username}', '{$password}','{$nickname}','{$email}')";
         if($username !== "" && $password !=="" && $nickname!=="" && $email!=="") {
                 if($_POST["password"] == $_POST["repassword"]){
                     $res = $mysqli->query($sql);
                     if ($res) {
                         //成功跳转页面
                         header('location: list.php');
                     } else {
                         echo "新增用户失败".'<a href="add.php">返回添加页面</a>';
                     }
                 }else{
                     echo "两次密码不一致".'<a href="add.php">返回添加页面</a>';
                 }
         }else{
             echo "请输入内容".'<a href="add.php">返回添加页面</a>';
         }
         break;
     case "del":
         $id = $_GET["id"];
         $sql = "DELETE FROM user WHERE id={$id}";
         $res = $mysqli->query($sql);
         if($res){
             header('location: list.php');
         }else{
             echo "删除失败".'<a href="list.php">返回</a>';
         }
         break;
     case "mod":
         $id = $_POST["id"];
         $username = $_POST["username"];
         $nickname = $_POST["nickname"];
         $password = md5($_POST["password"]);
         $email = $_POST["email"];
         $sql = "UPDATE user set username='{$username}',password='{$password}',nickname='{$nickname}',email='{$email}' WHERE id={$id}";
         $res = $mysqli->query($sql);
         if($res){
             header('location: list.php');
         }else{
             echo "修改失败".'<a href="mod.php">返回修改页面</a>';
         }
         break;
     case "ess":

         break;
     case "login":
         $username = $_POST["username"];
         $password = md5($_POST["password"]);
         $sql = "SELECT * FROM user WHERE username='{$username}'";
        if($username !== "" && $password !== ""){
            $res = $mysqli->query($sql);
            if($res && $res->num_rows == 1){
                $row = $res->fetch_assoc();
                if($row["password"] == $password){
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    header('location: index.php');
                }else{
                    header('location: login.php');
                }

            }else{
                header('location: login.php');
            }
        }else{

            echo "请输入用户名和密码".'<a href="login.php">返回登录页面</a>';
        }
         break;
     default:
         echo "操作有误!";
         break;
 }
$mysqli->close();
