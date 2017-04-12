<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册-Ghost中文网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/enroll.css">
</head>
<body>
<div class="container">
    <div class="enroll">
        <div class="mod-head">
            <img src="./img/Ghost-Transparent-for-LIGHT-BG.png" alt="">
            <h3>新用户注册</h3>
        </div>
        <div class="mod-body">
            <form action="" id="form">
                <ul>
                    <li>
                        <div class="form-group">
                            <input type="text" class="form-control it" name="username" placeholder="用户名"/>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="email" class="form-control it" name="email" placeholder="邮箱"/>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <input type="password" class="form-control it" name="password" placeholder="密码"/>
                        </div>
                    </li>
                    <li class="hr">
                        <hr>
                        <a href="" class="more-information-btn">更多资料</a>
                    </li>
                    <li class="clearFix">
                        <div class="form-group form-box">
                            <input type="text" class="form-control it" placeholder="验证码"/>
                        </div>
                        <div class="img">
                            <img src="" alt="">
                        </div>
                    </li>
                    <li class="lest">
                        <label>
                            <input type="checkbox">我同意
                        </label>
                        <a href="">用户协议</a>
                        <span><a href="">已有账号？</a></span>
                    </li>
                    <li>
                        <button class="btn btn-large btn-blue btn-block">注册</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="mod-footer clearFix">
            <span>使用第三方账号直接登录</span>
            <ul class="clearFix">
                <li>
                    <a href="" class="btn btn-block btn-weibo">
                        <img src="./img/weibo.jpg" alt="">
                        <span>用微博账号登录</span>
                    </a>
                </li>
                <li>
                    <a href="" class="btn btn-block btn-qq">
                        <img src="./img/qq.jpg" alt="">
                        <span>用QQ账号登录</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="aw-footer">
        Copyright © 2017 <span> - 京ICP备11008151号, All Rights Reserved</span>
    </div>
</div>
<script src="../JQUERY/jquery-3.1.1.min.js"></script>
<script src="../JQUERY/dist/jquery.validate.js"></script>
<script>
    $("#form").validate({
        rules:{
            username:{
                required:true ,
                minlength:6   ,
                maxlength:12
            },
            password:{
                required:true ,
                minlength:6,
                maxlenth:12
            },
            email:{
                required:true,
                email:true
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
            },
            email:{
                required:"请确认密码" ,
                email:"请输入正确的邮箱地址"
            }
        }
    });
</script>
</body>
</html>