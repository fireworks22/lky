<?php
const HOST = "localhost";
const USER = "root";
const PASSWORD = "123456";
const DBNAME = "dqd";
$mysqli = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
mysqli_set_charset($mysqli, "utf8");
if(mysqli_connect_error($mysqli)){
    echo "数据库链接失败".mysqli_connect_errno();
}
date_default_timezone_set('Asia/shanghai');
$sql = "select *from abse";
$res = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>论坛</title>
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
                    <a href="forum.php" class="active"><span class="icon-liebiao"></span>发现</a>
                </li>
                <li >
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
                    <ul class="nav nav-tabs clearFix" role="tablist" id="myTab">
                        <li role="presentation"><a href="#await" role="tab" data-toggle="tab">等待回复</a></li>
                        <li role="presentation"><a href="#hot" role="tab" data-toggle="tab">热门</a></li>
                        <li role="presentation"><a href="#recommend" role="tab" data-toggle="tab">推荐</a></li>
                        <li role="presentation" class="active"><a href="#newest" role="tab" data-toggle="tab">最新</a></li>
                        <h2><span class="icon-liebiao"></span>发现</h2>
                    </ul>
                </div>
                <div class="button-box">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active tab-box pane-box" id="newest">
                            <ul class="tab-aw">
                                <?php while($row = mysqli_fetch_assoc($res)){

                                    ?>
                                    <li class="aw-item">
                                        <div class="head">
                                            <a href="" class="aw-popover">
                                                <img src="<?php echo $row["thumb"] ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="question">
                                            <h3><a href=""><?php echo $row["name"] ?></a></h3>
                                            <div class="contribute">
                                                <p><a href=""><?php echo $row["classify"] ?></a></p>·<a href=""><?php echo $row["author"] ?></a>
                                                <span class="aw-bute">回复了问题 • <?php echo $row["net"] ?> 人关注 • <?php echo $row["nete"] ?> 个回复 • <?php echo $row["netes"] ?> 次浏览 • 2017-01-05 18:23</span>
                                                <span></span>
                                            </div>
                                            <div class="ques">
                                                <p><?php echo $row["con"] ?></p>
                                                <a href="" class="aw-pop">
                                                    <img src="<?php echo $row["thumbes"] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php }
                                //释放结果集
                                mysqli_free_result($res);
                                ?>
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
                        <div role="tabpanel" class="tab-pane pane-box tab-box" id="recommend">
                            <ul class="tab-aw">
                                <li class="aw-item">
                                    <div class="head">
                                        <a href="" class="aw-popover">
                                            <img src="img/02_avatar_max.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="question">
                                        <h3><a href="">Ghost 0.6.2 中文版正式发布了 | Ghost 中文网</a></h3>
                                        <div class="contribute">
                                            <p><a href="">默认分类</a></p>·<a href="">王赛</a>
                                            <span class="aw-bute">发起了问题 • 1 人关注 • 0 个回复 • 1389 次浏览 • 2015-04-27 11:5</span>
                                            <span></span>
                                        </div>
                                        <div class="ques">
                                            <p>回复</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane pane-box" id="hot">
                            <div class="time">
                                <ul class="clearFix">
                                    <li><a href="">30天</a></li>
                                    <li><a href="">10天</a></li>
                                    <li><a href="">7天</a></li>
                                </ul>
                            </div>
                            <div class="tab-box">

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane pane-box tab-box" id="await">
                            <ul class="tab-aw">

                                    <li class="aw-item">
                                        <div class="head">
                                            <a href="" class="aw-popover">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                        <div class="question">
                                            <h3><a href="">Ghost如何去除商业水印</a></h3>
                                            <div class="contribute">
                                                <p><a href="">默认/分类</a></p>·<a href="">milk</a>
                                                <span class="aw-bute">回复了问题 • 3 人关注 • 1 个回复 • 864 次浏览 • 2017-01-05 18:23</span>
                                                <span></span>
                                            </div>
                                            <div class="ques">
                                                <p>贡献</p>
                                                <a href="" class="aw-pop">
                                                    <img src="" alt="">
                                                </a>
                                            </div>
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
                <div class="two">
                    <div class="clearFix aw-mod bd">
                        <h5>热门话题</h5>
                        <a href="topic.php">更多＞</a>
                    </div>
                    <div class="clearFix aw-mod">
                        <h5>热门用户</h5>
                        <a href="user.php">更多＞</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">Copyright © 2017 <span> - 京ICP备11008151号, All Rights Reserved</span>
</div>
<div id="aw-tool">
    <a href=""><img src="" alt=""></a>
    <div>
        <p><a href="">Dante</a></p>
        <p>
        <span>威望:
            <em>1</em>
        </span>
        <span>赞同:
            <em>2</em>
        </span>
        </p>
    </div>
</div>
<div id="aw-tool2">
    <a href=""><img src="" alt=""></a>
    <div>
        <p><a href="">Dante</a></p>
        <p>
        <span>威望:
            <em>1</em>
        </span>
            <span>赞同:
            <em>2</em>
        </span>
        </p>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="../php/dist/js/bootstrap.min.js"></script>
<script src="./js/forum.js"></script>
</body>
</html>