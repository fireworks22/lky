<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录-Ghost中文网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<div class="container">
    <div class="log">
        <div class="mod-body clearFix">
            <div class="pull-left">
                <img src="./img/Ghost-Transparent-for-LIGHT-BG.png" alt="">
                <h2>Ghost中文网</h2>
                <form action="" id="form">
                    <ul>
                        <li>
                            <div class="form-group">
                                <input type="text" class="form-control it" name="username" placeholder="邮箱/用户名"/>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <input type="password" class="form-control it" name="password" placeholder="密码"/>
                            </div>
                        </li>
                        <li class="aw-li">
                            <label>
                                <input type="checkbox"/>记住我
                                <a href="">&nbsp;忘记密码</a>
                            </label>
                            <button class="btn" type="submit">登录</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="side-bar">
                <h3>第三方账号登录</h3>
                <a href="" class="btn btn-block btn-weibo">
                    <img src="./img/weibo.jpg" alt="">
                    <span>用微博账号登录</span>
                </a>
                <a href="" class="btn btn-block btn-qq">
                    <img src="./img/qq.jpg" alt="">
                    <span>用QQ账号登录</span>
                </a>
            </div>
        </div>
        <div class="mod-footer">
            <span>还没有账号？</span>
            <a href="">立即注册</a>
            ·
            <a href="">游客访问</a>
            ·
            <a href="">问答阅读</a>
        </div>
    </div>

</div>
<div class="aw-footer">
    Copyright © 2017 <span> - 京ICP备11008151号, All Rights Reserved</span>
</div>
<script src="../JQUERY/jquery-3.1.1.min.js"></script>
<script src="../JQUERY/dist/jquery.validate.js"></script>
<script>
    $("#form").validate({
        rules:{
            username:{
                required:true ,
                minlength:6  ,
                maxlength:12
            },
            password:{
                required:true ,
                minlength:6,
                maxlenth:12
            }
        },

        messages:{
            username:{
                required:"请输入用户名" ,
                minlength:"最少6个字符",
                maxlength:"最多12个字符"
            },
            password:{
                required:"请输入密码" ,
                minlength:"最少6个字符",
                maxlength:"最多12个字符"
            }
        }
    });
</script>
</body>
</html>