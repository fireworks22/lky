<?php
//链接数据库
/*host:主机名
 * user:数据库用户名
 * password:数据库密码
 * database:数据库名字
 * Port：端口号
 *
 * 返回值：masqli对象
 * */
const HOST = "localhost";
const USER = "root";
const PASSWORD = "123456";
const DBNAME = "dqd";
$mysqli = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
//设置查询的字符编码
mysqli_set_charset($mysqli, "utf8");
    //mysqli_connect_error()  判断数据库是否连接失败
if(mysqli_connect_error($mysqli)){
    //mysqli_connect_errno() 数据库出错的编号
    echo "数据库链接失败".mysqli_connect_errno();
}
date_default_timezone_set('Asia/shanghai');
/*增删改查
 * insert
 * delete
 * update
 * select
 * */
$sql = "select *from make";
$res = mysqli_query($mysqli, $sql);
/*$row = mysqli_fetch_assoc($res){
    print_r($row);
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大前端官网</title>
    <link rel="shortcut icon" href="./image/QQ.ico"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <div class="container_h">
            <div class="ct_left">
                <div class="logo"></div>
                <span class="cl_sp">关注前端开发</span><br><span class="cl_sp">HTML5丶CSS3丶javascript</span>
            </div>
            <div class="ct_right">
                <ul class="cr_ul">
                    <li>广告合作</li>
                    <li>联系我们</li>
                    <li>前端工具箱</li>
                    <li>友情链接</li>
                    <li>关注大前端</li>
                </ul>
                <ul class="cr_ul2">
                    <li style="color:#45b6f7;">首页</li>
                    <li>Wordpress主题</li>
                    <li>前端开发</li>
                    <li>前端开发招聘</li>
                    <li>前端开发导航</li>
                    <li><img src="./image/search.png" alt=""></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="body">
        <div class="container_b">
            <div class="cb_left">
                <div class="carousel">
                    <img src="./image/hs-xiu.jpg" alt="">
                    <span class="sp_left"></span><span class="sp_right"></span>
                    <ul class="c_ul">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="zhaopin">
                    <div class="zhao_text">
                        <h3>【前端招聘】 Mobvista-汇量科技招聘前端H5工程师（北京 20K+）</h3>
                        <p>汇量科技（Mobvista）于2013年3月开始开展业务，旗下拥有覆盖全球的移动数字营销平台河移动网游海外开发平台。<br>
                        汇量科技专注于为广告主与应用开发着提供高效的用户获取及流量综合解决方案，2015年仔移动数据检测机构AppsFlyrt...</p>
                    </div>
                </div>
                <ul class="left_ul">
                    <?php while($row = mysqli_fetch_assoc($res)){
$li = <<<li
                    <li>
                        <div class="neirong">
                            <div class="img"><img src="{$row["thumb"]}" alt=""></div>
                            <div class="text">
                                <p class="text_title"><span class="text_span">{$row["cat"]}</span>【举报有奖】{$row["title"]}</p>
                                <a href="#">{$row["time"]}</a><a href="#">阅读({$row["readTime"]})</a><a href="#">评论({$row["coment"]})</a>
                                <p class="text_pl">{$row["content"]}</p>
                            </div>
                        </div>
                    </li>
li;
echo $li;
                      }
                    //释放结果集
                    mysqli_free_result($res);
                  ?>
                </ul>
                <ul class="fanye">
                    <li style="background-color: #73bbe8;">1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li style="background-color: #f6f6f6;">...</li>
                    <span class="fanye_sp1">下一页</span>
                    <span class="fanye_sp2">共70页</span>
                </ul>
            </div>
            <div class="cb_right">
                <div class="zhuti">
                    <div class="neirong1">
                        <p class="nei_p1">吐血推荐</p>
                        <h3 class="nei_h3">DUX主题 新一代主题</h3>
                        <p class="nei_p2">DUX wordpress主题是大前端当前使用主题，是大前端积累多年Wordpress主题经验设计而成，
                            更加扁平的风格割干净白色的架构会让网站显得内涵而出色...</p>
                    </div>
                </div>
                <div class="kaifa">
                    <h3>&nbsp;&nbsp;&nbsp;前端开发</h3>
                    <ul class="kaifa_ul">
                        <li>
                            <h3>前端网址导航</h3>
                            <span>扁平化设计，自定义颜色风格，多功能配置</span><br>
                            <button>立即使用</button>
                        </li>
                        <li>
                            <h3>前端网址导航</h3>
                            <span>扁平化设计，自定义颜色风格，多功能配置</span><br>
                            <button>立即使用</button>
                        </li>
                        <li>
                            <h3>前端网址导航</h3>
                            <span>扁平化设计，自定义颜色风格，多功能配置</span><br>
                            <button>立即使用</button>
                        </li>
                        <li>
                            <h3>前端网址导航</h3>
                            <span>扁平化设计，自定义颜色风格，多功能配置</span><br>
                            <button>立即使用</button>
                        </li>
                        <div class="gongju">
                            <h3>前端开发工具箱</h3>
                            <span>JS压缩/加密/格式化/CSS压缩/格式化/在线代码高亮</span><br>
                            <button>立即使用</button>
                        </div>
                    </ul>
                </div>
                <div class="biaoqian">
                    <h3>&nbsp;&nbsp;&nbsp;前端开发</h3>
                    <ul>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                        <li>&nbsp;前端技巧(61)</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="foot_u">
            <a href=""><p>企业站定制，我们更专业！</p></a>
            <button>联系我们</button>
        </div>
        <div class="foot_m">
            <p>© 2010-2016 大前端 国内更专业Wordpress主题解决方案 提供Wordpress主题定制开发 网站地图 <br>
                注：本站当前使用主题为大前端自有</p>
        </div>

    </div>
</body>
</html>