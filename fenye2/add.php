<?php
include_once "lib.php";
checkUser();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加用户</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <form class="form-horizontal" action="DO.php?act=add" method="post">
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">昵称</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="昵称">
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
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-default">添加</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>