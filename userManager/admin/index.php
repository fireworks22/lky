<?php
    include_once "lib.php";
    checkUser();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">

            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item list-group-item-info"><a href="">管理登录</a></li>
                <li class="list-group-item"><a href="">用户管理</a></li>
                <li class="list-next">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="list.php" target="main">用户列表</a></li>
                        <li class="list-group-item"><a href="add.php" target="main">添加用户</a></li>
                    </ul>
                </li>
                <li class="list-group-item"><a href="">文件管理</a></li>
                <li class="list-next">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="file.php" target="main">添加文件</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-10 col-md-offset-2">
<!--            <iframe src="list.php" frameborder="0" name="main" width="100%" height="100%"></iframe>-->
            <iframe src="list.php" frameborder="0" width="100%" height="100%" name="main"></iframe>
        </div>
    </div>
</div>
</body>
</html>