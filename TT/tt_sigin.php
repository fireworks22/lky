<?php
require_once "action.php";
$mysqli = content();
$rows = queryData($mysqli);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TT注册</title>
    <link rel="shortcut icon" href="img/QQ.ico">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tt.css">
</head>
<body>
<div class="container">
    <div class="head">
        <h3>TT注册</h3>
        <form action="tt_sigin.php" method="post">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
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
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input type="text" name="nickname" id="nickname" class="form-control it" placeholder="昵称"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
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
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <input type="email" name="email" id="email" class="form-control it" placeholder="邮箱"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="verify" class="form-control it" placeholder="验证码"/>
                        </div>
                        <img src="code.php" id="verifyImg" alt="">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions row">
                <div>
                    <button class="btn btn-md btn-info" type="submit">
                        <a href="tt.php">登录</a>
                    </button>
                    <input type="button" class="btn btn-md btn-info" id="enroll" value="注册" />
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
        $("#verifyImg").click(function () {
            $("#verifyImg").attr("src", "code.php?temp="+(new Date().getTime()));
        });
        $("#enroll").click(function () {
            $("#verifyImg").attr("src", "code.php?temp="+(new Date().getTime()));
            var username = $("#username").val(),
                nickname = $("#nickname").val(),
                password = $("#password").val(),
                email = $("#email").val(),
                verify = $("#verify").val();
            console.log(username,nickname,  password, email, verify);
            if(username == "" || nickname == "" ||password == "" || email == ""){
                alert("请输入内容");
            }else{
                $.ajax({
                    url:'db.php',
                    type:'POST',
                    data:{
                        email:email,
                        username:username,
                        nickname:nickname,
                        password:password,
                        verify:verify
                    },
                    success: function (data) {
                        console.log(data);
                        if(data == 1){
                            alert("注册成功");
                            $("#email").val("");
                            $("#username").val("");
                            $("#nickname").val("");
                            $("#password").val("");
                            $("#verify").val("");
                        }else if(data == 2){
                            alert("验证码输入错误");
                            $("#verify").val("");
                        }else {
                            alert("注册失败");
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