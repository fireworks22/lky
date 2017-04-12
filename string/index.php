<?php
/*require_once "action.php";
$mysqli = content();
$rows = queryData($mysqli);*/
//print_r($rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../php/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="container"  >
    <form class="form-horizontal row" method="post" action="1.php">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username" placeholder="首字母大写，长度为6~10">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="密码长度6~10">
            </div>
        </div>
        <div class="form-group">
            <label for="passwordes" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="passwordes" id="passwordes" placeholder="两次密码一致">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="输入合法邮箱，必须包含@">
            </div>
        </div>
        <div class="form-group">
            <label for="check" class="col-sm-2 control-label">兴趣爱好</label>
                <div class="checkbox col-sm-10"  id="check">
                    <label>
                        <input type="checkbox" name="fav[]" value="PHP"> PHP
                    </label>
                    <label>
                        <input type="checkbox" name="fav[]" value="Java"> Java
                    </label>
                    <label>
                        <input type="checkbox" name="fav[]" value="C"> C
                    </label>
                    <label>
                        <input type="checkbox" name="fav[]" value="C++"> C++
                    </label>
                    <label>
                        <input type="checkbox" name="fav[]" value="C#"> C#
                    </label>
                    <label>
                        <input type="checkbox" name="fav[]" value="Nodejs"> Nodejs
                    </label>
                </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="注册" id="submit" class="btn btn-default">
                <!--<button type="submit" class="btn btn-default">Sign in</button>-->
            </div>
        </div>
    </form>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="../php/dist/js/bootstrap.min.js"></script>
<script>
    /*$("#submit").click(function () {
        var username = $("#username").val(),
            password = $("#password").val();
            passwordes = $("#passwordes").val();
            email = $("#email").val();
        console.log(username, password, passwordes, email);
        if(username == "" || password == ""|| passwordes == "" ||email ==""){
            alert("请输入内容");
        }else{
            /!*$.ajax({
                url:'db.php',
                type:'POST',
                data:{
                    username:username,
                    password:password,
                    passwordes:passwordes,
                    email:email
                },
                success: function (data) {
                    console.log(data);
                    if(data == 1){
                        alert("注册成功");

                    }else if(data == 2){
                        alert("密码输入不一致");
                    }else if(data ==3){
                        alert("首字母大写")
                    }else {
                        alert("注册失败");
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    console.log(XMLHttpRequest, textStatus, errorThrown);
                }
            });*!/
        }
    });*/
</script>
</body>
</html>