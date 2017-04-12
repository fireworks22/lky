<?php
require_once "action.php";
$mysqli = content();
$rows = queryData($mysqli);
/*print_r($rows);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TT</title>
    <link rel="shortcut icon" href="img/QQ.ico">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tt.css">
</head>
<body>
<div class="container">
    <div class="head">
        <h3>登录TT</h3>
        <form action="">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input type="text" name="username" id="username" class="form-control it" placeholder="用户名"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control it" placeholder="密码"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="checkbox" name="checkbox" id="checkbox"/>记住密码
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-actions row">
                <div>
                    <!--<button class="btn btn-sm btn-info" type="submit">
                        <span class="glyphicon glyphicon-off"></span>登录
                    </button>-->
                    <input type="button" class="btn btn-sm btn-info" id="login" value="登录">
                    <button class="btn btn-sm btn-info" type="submit">
                        <a href="tt_sigin.php">注册</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
    $("#login").click(function () {
        var username = $("#username").val(),
            password = $("#password").val();
        console.log(username, password);
        if(username == "" || password == ""){
            alert("请输入内容");
        }else{
            $.ajax({
                url:'do.php',
                type:'POST',
                data:{
                    username:username,
                    password:password
                },
                success: function (data) {
                    console.log(data);
                    if(data == 1){
                        window.location.href = "index.php";
                    }else {
                        alert("登录失败");
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    console.log(XMLHttpRequest, textStatus, errorThrown);
                }
            });
        }
    });
</script>
</body>
</html>