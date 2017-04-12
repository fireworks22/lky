<?php
require_once "1.php";
$mysqli = content();
$rows = queryData($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="../php/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fa.css">
</head>
<body>
<div class="container">
    <div class="footer">
        <h1>你的自由:</h1>
        <div class="name_footer">
            <ul class="con-list">
              <?php
/*                $html = "";
                for($i=0; $i<count($rows); ++$i){
                    $html .= '<li>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>'.$rows[$i]["username"].'</h3>
                                    <p>'.$rows[$i]["content"].'</p>
                                </div>
                            </div>
                        </li>';
                }
                echo $html;
                */?>


            </ul>
        </div>
        <div class="head">
            <!--<div id="btn">
                <div class="row">
                    <div class="col-md-offset-5">
                        <button class="btn" type="submit">登录评论</button>
                    </div>
                </div>
            </div>-->
            <form action="" id="form">
                <ul>
                    <li>
                        <div class="form-group">
                            <label>你的邮箱</label>
                            <input type="email" id="email" class="form-control it" name="email" placeholder="email"/>


                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label>昵称</label>
                            <input type="text" id="username" class="form-control it" name="username" placeholder="username"/>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label>评论</label>
                            <textarea id="comment" class="form-control it" rows="2"></textarea>
                        </div>
                    </li>

                    <li>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-offset-5">
                                    <div class="form-group">
                                        <label for="verify">验证码</label>
                                        <input type="text" class="it" id="verify" placeholder="请输入验证码">
                                        <img src="code.php" id="verifyImg" alt="">
                                    </div>
                                    <input type="button" class="btn btn-default" id="submit" value="登录">
                                    <!--<button class="btn btn2" id="submit" type="">登录</button>-->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="../php/dist/js/bootstrap.min.js"></script>
<script>
   /* $("#submit").click(function () {
        var email = $("#email").val(),
            username = $("#username").val(),
            content = $("#comment").val(),
        //console.log(email, username, content);
        if(email == "" ||username == "" || content == ""){
            alert("请输入内容");
        }else{
            $.ajax({
                url:'2.php',
                type:'POST',
                data:{
                    email:email,
                    username:username,
                    content:content
                },
                success: function (data) {
                    if(data == 1){
                        var html = '<li>'+
                            '<div class="row">'+
                            '<div class="col-md-offset-1 col-md-10">'+
                            '<h3>'+username+'</h3>'+
                            '<p>'+content+'</p>'+
                            '</div>'+
                            '</div>'+
                            '</li>';
                        $(".con-list").append(html);
                        $("#email").val("");
                        $("#username").val("");
                        $("#comment").val("");
                    }{
                        alert("数据添加失败");
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    console.log(XMLHttpRequest, textStatus, errorThrown);
                }
            });
        }
    });*/

</script>