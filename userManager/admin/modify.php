<?php
    include_once "lib.php";
    checkUser();
    $mysqli = new mysqli("localhost","root","123456","users");
    if($mysqli->connect_errno){
        exit("数据库连接失败:".$mysqli->connect_error);
    }

    $mysqli->set_charset("utf8");
    $id = $_GET["id"];
    $sql = "SELECT username, password, email FROM user WHERE id={$id}";
    $res = $mysqli->query($sql);
    if($res && $res->num_rows>0){
        $row = $res->fetch_assoc();
    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改用户</title>

    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form class="form-horizontal" action="doAction.php?act=mod" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-9">
            <input type="text" class="form-control"  name="username" id="username" value="<?php echo $row['username']?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" name="password" id="password" placeholder="密码">
        </div>
    </div>
    <div class="form-group">
        <label for="repassword" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="确认密码">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">邮箱</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-9">
            <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
</form>
</body>
</html>