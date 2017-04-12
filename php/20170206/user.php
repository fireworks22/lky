<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户列表-Ghost中文网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/iconfont.css">
    <link rel="stylesheet" href="./css/forum.css">
</head>
<body>
<div class="warp">
    <div class="container">
        <div class="search">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="text" placeholder="搜索问题、话题或人">
                    <span class="icon-sousuo"></span>
                    <div id="text-put">
                        <span>输入关键字进行搜索</span>
                        <a href="">发起问题</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="center">
            <ul class="clearFix">
                <li>
                    <a href="forum.php"><span class="icon-liebiao"></span>发现</a>
                </li>
                <li>
                    <a href="topic.php"><span class="icon-huati"></span>话题</a>
                </li>
            </ul>
        </div>
        <div class="login">
            <ul class="clearFix">
                <li class="enter">
                    <a href="login.php">
                        <span>登录</span>
                    </a>
                </li>
                <li class="enroll">
                    <a href="enroll.php">
                        <span>注册</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="warp-box">
    <div class="container">
        <div role="tabpanel" class="tab-pane active clearFix" id="messages">
            <div class="left-box">
                <div class="top-box">
                    <ul class="nav nav-tabs clearFix">
                       <h2><span class="icon-friend"></span>用户推荐</h2>
                    </ul>
                </div>
                <div class="button-box">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active tab-box pane-box" id="newest">
                            <ul>
                                <li>

                                </li>
                            </ul>
                            <nav aria-label="Page navigation" class=" paging">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true"><<</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">>></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <div class="two">
                    <div class="clearFix aw-mod bd">
                    </div>
                    <div class="clearFix aw-mod">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">Copyright © 2017 <span> - 京ICP备11008151号, All Rights Reserved</span>
</div>
<script src="../JQUERY/jquery-3.1.1.min.js"></script>
<script src="../dist/js/bootstrap.min.js"></script>
<script src="./js/forum.js"></script>
</body>
</html>