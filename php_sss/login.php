<?php
    //判断是否存在用户提交，且提交所有内容
    if(isset($_POST['username']) && isset($_POST['pass1']) ){
        //这里使用提交数据
        //创建数据库链接
        $dblink = new mysqli();
        $dblink->connect(
            'localhost',//数据库主机地址
            'root',//数据库用户名
            'root',//用户密码
            'phptest01'//使用哪一个数据库
        );
        if(mysqli_connect_errno()){
            //失败并显示错误信息
            echo mysqli_connect_error();
            exit(1);
        }
        $sql = 'select * from user where name = '.$_POST['username'];
        $result = $dblink->query($sql);
        if($result && $result instanceof mysqli_result){
            $row = $result->fetch_assoc();
            if($_POST['pass1'] == $row['password']){
                echo "登录成功";
                exit(0);
            }else{
                echo "用户名或密码错误！";
                exit(1);
            }
        }else{
            echo mysqli_error($dblink);
            exit(1);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>

</head>
<body>
<form action="./login.php" method="post">
    <label for="username">用户名</label>
    <input type="text" name="username" id="username"/><br /><br />
    <label for="password">密&nbsp;码</label>
    <input type="password" name="password" id="password" /><br /><br />
    <input type="submit" value="登录" />
</form>
</body>
</html>