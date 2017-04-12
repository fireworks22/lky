<?php
header("Content-type: text/html; charset=utf-8");
//开始session
session_start();
// 获取做的什么操作
$act = $_GET["act"];
//数据库相关操作
$mysqli = new mysqli("localhost","root","123456","users");
if($mysqli->connect_errno){
    exit("数据库连接失败:".$mysqli->connect_error);
}
//释放结果集
$mysqli->set_charset("utf8");



//echo $act;
//添加，删除，修改
switch ($act){
    case "add":
        //echo "add";
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        //$repassword = $_POST["repassword"];
        $email = $_POST["email"];
           $sql = "insert into user(username, password, email) VALUES ('{$username}', '{$password}','{$email}')";
           $res = $mysqli->query($sql);
           if($res){
               //成功跳转页面
               header('location: list.php');
           }else{
               alertBox("新增用户失败");
           }
        //echo $sql;
        //print_r($_POST);
        break;
    case  "del":
       $id = $_GET["id"];
       $sql = "DELETE FROM user WHERE id={$id}";
       $res = $mysqli->query($sql);
       if($res){
            //comfirmBox("你确定要删除数据?");
           header('location: list.php');
       }else{
           alertBox("删除失败");
       }
        break;
    case  "mod":
        //echo "modify";
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $email = $_POST["email"];
        $sql = "UPDATE user set username='{$username}',password='{$password}',email='{$email}' WHERE id={$id}";
        $res = $mysqli->query($sql);
        if($res){
            header('location: list.php');
        }else{
            alertBox("修改用户失败");
        }
        break;
    case "login":
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $sql = "SELECT * FROM user WHERE username='{$username}'";
        //$sql = "SELECT * FROM user WHERE username='{$username}' and password='{$password}'";
        $res = $mysqli->query($sql);
        if($res && $res->num_rows == 1){
           $row = $res->fetch_assoc();
           if($row["password"] == $password){
//               print_r($row); exit();
               $_SESSION["user_id"] = $row["id"];
               $_SESSION["username"] = $row["username"];
               /*$_SESSION["user_id"] = "";
               $_SESSION["username"] = "";*/

               //print_r($_SESSION);
              header('location: index.php');
           }else{
               header('location: login.php');
           }
            // header('location: index.php');
        }else{
            header('location: login.php');
        }
        // 预处理方法
        /*$sql = "SELECT * FROM user WHERE username=? and password=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $s = $stmt->execute();
        $res = $stmt->fetch();
        if(empty($res)){
            header('location: login.php');
        }else{
            $_SESSION["user_id"] =
            header('location: index.php');
        }*/
        break;
    case "file":
        /**
         * 上传文件的步骤
         *  +将文件上传到服务器的零时文件夹
         *  +一般通过input:file来完成上传
         *  +临时文件夹的目录需要在php.ini文件中配置
         *  +将上传到零时文件夹中的文件移动（复制）到指定的目录
         *  +移动 move_uploaded_file();
         *  +复制 copy();
         */
        $file = $_FILES["file"];
        $name = $file["name"];
        $type = $file["type"];
        $tmp_name = $file["tmp_name"];
        $error = $file["error"];
        $size = $file["size"];
        //copy($tmp_name, "up/".$name);

        move_uploaded_file($tmp_name, "up/".$name);
        break;
    default:
        echo "操作有误";
        break;
}
//关闭结果集
$mysqli->close();
function alertBox($msg){
    $alert = <<<EOF
    <script>
        alert('{$msg}');
    </script>

EOF;
echo $msg;
}
