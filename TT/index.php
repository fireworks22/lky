<?php
require_once "action.php";
$mysqli = content();
$rows = queryData($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TT空间</title>
    <link rel="shortcut icon" href="img/QQ.ico">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<!--导航-->
<div class="head">
    <div class="container">
        <div class="log">
            TT空间
        </div>
        <ul>
            <li class="active"><a href=""><span></span>个人空间</a></li>
            <li><a href=""><span></span>我的主页</a></li>
            <li><a href=""><span></span>我的好友</a></li>
            <li><a href=""><span></span>游戏</a></li>
            <li><a href=""><span></span>更多</a></li>
        </ul>
        <div class="head-name">
            <a href="">123456</a>
        </div>
    </div>
</div>
<!--正文-->
<div class="container">
    <div class="aw_head">
        <img src="" alt="">
            <span>123456</span>
    </div>
    <div class="aw_con">
        <ul>
            <li class="aw_left">
                <ul class="aw_rol">
                    <li class="active"><a href="">好友动态</a></li>
                    <li><a href="">特别关心</a></li>
                    <li><a href="">与我相关</a></li>
                    <li><a href="">那年今日</a></li>
                    <li><a href="">游戏中心</a></li>
                    <li><a href="">我的收藏</a></li>
                </ul>
            </li>
            <li class="aw_center">
                <div class="aw_cont">
                    <div class="clearFix">
                        <form action="">
                            <div class="form-group">
                                <textarea id="comment" class="form-control" maxlength="150" cols="1" rows="3"></textarea>
                            </div>
                        </form>
                        <div class="login">
                            <ul>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="aw_login">
                        <span>发表</span>
                    </div>
                </div>
                <div class="matter">
                    <div class="matter-head">
                        <div class="mat-left">
                            <span>全部动态</span>
                        </div>
                        <div class="mat-right">
                            <span>123</span>|<span>123</span>
                        </div>
                    </div>
                    <!--动态-->
                    <div class="matter-trends">
                        <ul>
                            <li>
                                <!--personal file 个人档案-->
                                <div class="personalFile clearFix">
                                    <img src="" alt="">
                                    <div>
                                        <p>成员</p><br>
                                        <span>123</span><span>123</span><span>123</span>
                                    </div>
                                </div>
                                <div class="matter_file">
                                    <span>老百姓</span>
                                    <img src="" alt="">
                                </div>
                                <div class="criticism">
                                    <ul>
                                        <li><a href="">评论()</a></li>
                                        <li><a href="">转发()</a></li>
                                        <li><a href="">赞()</a></li>
                                        <li><a href="">收藏()</a></li>
                                        <li><a href="">...</a></li>
                                    </ul>
                                    <!--评论框-->
                                    <div class="cri_login">
                                        <form action="">
                                            <div class="form-group">
                                                <textarea maxlength="150" class="form-control cri_comment"></textarea>
                                            </div>
                                        </form>
                                        <div class="cri_com">

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!--personal file 个人档案-->
                                <div class="personalFile clearFix">
                                    <img src="" alt="">
                                    <div>
                                        <p>成员</p><br>
                                        <span>123</span><span>123</span><span>123</span>
                                    </div>
                                </div>
                                <div class="matter_file">
                                    <span>老百姓</span>
                                    <img src="" alt="">
                                </div>
                                <div class="criticism">
                                    <ul>
                                        <li><a href="">评论()</a></li>
                                        <li><a href="">转发()</a></li>
                                        <li><a href="">赞()</a></li>
                                        <li><a href="">收藏()</a></li>
                                        <li><a href="">...</a></li>
                                    </ul>
                                    <!--评论框-->
                                    <div class="cri_login">
                                        <form action="">
                                            <div class="form-group">
                                                <textarea maxlength="150" class="form-control cri_comment"></textarea>
                                            </div>
                                        </form>
                                        <div class="cri_com">

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </li>
            <li class="aw_right">


            </li>
        </ul>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $("#comment").focus(function () {
            $(".aw_login").css("display","block");
        });
        $('#comment').blur(function () {

            $('.aw_login ').css("display","none");
        });

    });
</script>
</body>
</html>