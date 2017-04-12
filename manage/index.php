<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<div class="head">
    <div class="head_h">
        后台管理系统
    </div>
    <div class="head_h">

    </div>
    <div class="head_r">
    </div>
</div>
<div class="matter">
    <div class="nav">
        <div class="row">
            <div class="col-md-2">
                <ul>
                    <li class="list-group-item active" data-toggle="collapse" href="#One" aria-expanded="true">
                        <a href="">用户管理</a>
                    </li>
                    <li class="list-group collapse in" id="One">
                        <ul>
                            <li class="list-group-item"><a href="index2.php" target="main">用户列表</a></li>
                            <li class="list-group-item"><a href="add.php"  target="main">添加用户</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <iframe src="index2.php" frameborder="0" width="100%" height="100%" name="main"></iframe>
            </div>
        </div>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>