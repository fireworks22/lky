<?php
header("Content:text/html; charset=utf-8");
$act = $_GET["act"];
$mysqli = new mysqli('localhost','root', '123456', 'users');
if($mysqli->connect_errno){
    exit("链接失败".$mysqli->connect_error);
}
$mysqli->set_charset("utf8");
switch ($act){
    case "add":
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $sql = "insert into user (username, password, email) VALUES ('{$username}','{$password}','{$email}')";
        $res = $mysqli->query($sql);
        if($res){
            header("location: index2.php");
        }else{
            alertBox("用户添加失败");
            header("location: add.php");
        }
        break;
    case "del":
        $id = $_GET["id"];
        $sql = "DELETE FROM user WHERE id={$id}";
        $res = $mysqli->query($sql);
        if($res){
            delBox("你确定要删除这条数据吗？");

        }
        break;
    case "mod":
        echo "modify";
        break;
    case "login":
        echo "login";
        break;
    default:
        echo "操作有误";
        break;
}
$mysqli->close();
function alertBox($msg){
    $alert .= <<<EOT
        <script>
            alert('{$msg}');
        </script>
EOT;
echo $msg;
}