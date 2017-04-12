<?php
//判断是否存在用户提交，且提交所有内容
if(isset($_POST['username'])&&
    isset($_POST['pass1'])&&
    isset($_POST['pass2'])
){
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
    //写入数据
    $sql = 'insert into user(`name`, `password`)
				values('.$_POST['username'].','.$_POST['pass1'].')';
    $result = $dblink->query($sql);
    if (!$result){
        echo mysqli_error($dblink);
        exit(1);
		}
    echo "用户注册成功！";
    exit(0);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
</head>
<style>

</style>
<body>
<form action="./register.php" method="post">
    <label for="username">用户名称</label>
    <input type="text" name="username" id="username"/><br /><br />
    <label for="pass1">密&nbsp;&nbsp;码</label>
    <input type="password" name="pass1" id="pass1" /><br /><br />
    <label for="pass2">确认密码</label>
    <input type="password" name="pass2" id="pass2" /><br /><br />
    <input type="reset" value="重置" />&nbsp;&nbsp;
    <input type="submit" value="注册" />
</form>
</body>
</html>