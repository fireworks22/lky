<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>话题广场-Ghost中文网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../php/dist/css/bootstrap.min.css">
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
                <li >
                    <a href="forum.php"><span class="icon-liebiao"></span>发现</a>
                </li>
                <li >
                    <a href="topic.php" class="active"><span class="icon-huati"></span>话题</a>
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
                    <ul class="nav nav-tabs clearFix" role="tablist" id="myTab">
                        <li role="presentation"><a href="#month" role="tab" data-toggle="tab">30天</a></li>
                        <li role="presentation"><a href="#week" role="tab" data-toggle="tab">7天</a></li>
                        <li role="presentation" class="active"><a href="#all" role="tab" data-toggle="tab">全部</a></li>
                        <h2><span class="icon-huati"></span>热门话题</h2>
                    </ul>
                </div>
                <div class="button-box">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active tab-box tab-box2" id="all">
                            <ul class="clearFix aw-tc">
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">话题</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                            </ul>
                            <nav aria-label="Page navigation" class=" paging">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true"><<</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
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
                        <div role="tabpanel" class="tab-pane tab-box tab-box2" id="week">
                            <ul class="clearFix aw-tc">
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                            </ul>
                            <nav aria-label="Page navigation" class=" paging">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true"><<</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
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
                        <div role="tabpanel" class="tab-pane tab-box tab-box2" id="month">
                            <ul class="clearFix aw-tc">
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                                <li class="aw-tc-item">
                                    <div class="tc-head">
                                        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
                                    </div>
                                    <span><a href="" class="tc-popover">添加用户</a></span>
                                    <div class="aw-text">
                                        <span>3个讨论</span>
                                        <span>2个关注</span>
                                    </div>
                                    <div class="aw-text">
                                        <span>7 天新增 2 个讨论, 30 天新增 2 个讨论</span>
                                    </div>
                                </li>
                            </ul>
                            <nav aria-label="Page navigation" class=" paging">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true"><<</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
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
                <div class="first">
                    <div class="mod-head bd">
                        <h4>今日话题</h4>
                        <img src="./img/topic-mid-img.png" alt="">
                        <div class="mod-body"><span>…</span><a href="topic.php">进入话题》</a></div>
                    </div>
                    <div class="clearFix mod-head" id="mod">
                        <h4>新增话题</h4>
                        <ul class="clearFix">
                            <li><a href="http://wenda.ghostchina.com/topic/%E7%BC%96%E7%A0%81">编码</a></li>
                            <li><a href="http://wenda.ghostchina.com/topic/Pjax">pjax</a></li>
                            <li><a href="http://wenda.ghostchina.com/topic/%E4%B8%BB%E9%A2%98%E5%88%86%E4%BA%AB">主题分享</a></li>
                            <li><a href="">系统功能</a></li>
                            <li><a href="">升级报错</a></li>
                            <li><a href="">ad</a></li>
                            <li><a href="">ghost导航定制</a></li>
                            <li><a href="">分页</a></li>
                            <li><a href="">微社区</a></li>
                            <li><a href="">css</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">Copyright © 2017 <span> - 京ICP备11008151号, All Rights Reserved</span>
</div>
<div id="topic-tool">
    <div>
        <a href=""><img src="img/topic-mid-img.png" alt=""></a>
        <p>Ghost</p>
    </div>
    <p>讨论数:
        <em>7</em>
    </p>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="../php/dist/js/bootstrap.min.js"></script>
<script src="./js/forum.js"></script>
</body>
</html>