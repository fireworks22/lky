<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\index\index.html";i:1489978598;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\meta.html";i:1490322010;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\header.html";i:1489988118;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\menu.html";i:1490057926;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\footer.html";i:1489978598;}*/ ?>
﻿
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="_admin_/favicon.ico" >
    <link rel="Shortcut Icon" href="_admin_/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="_admin_/lib/html5.js"></script>
    <script type="text/javascript" src="_admin_/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="_admin_/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

<title>H-ui.admin v3.0</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    <li><a href="javascript:;" onclick="article_add('添加文章','<?php echo url('admin/article/article_add'); ?>')"><i class="Hui-iconfont">&#xe616;</i> 添加文章</a></li>
                    <li><a href="javascript:;" onclick="picture_add('添加专题','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 新增专题</a></li>
                    <li><a href="javascript:;" onclick="article_add('添加分类','<?php echo url('admin/category/product_category'); ?>')"><i class="Hui-iconfont">&#xe620;</i> 新增分类</a></li>

                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li><a href=""><i class="Hui-iconfont">&#xe625;</i>访问首页</a></li>
                    <li>超级管理员</li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="#">个人信息</a></li>
                            <li><a href="#">切换账户</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--/_header 作为公共模版分离出去-->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><a href="<?php echo url('admin/article/article_list'); ?>"><i class="Hui-iconfont">&#xe616;</i> 文章管理</a></dt>
        </dl>
        <dl id="menu-product">
            <dt><a href="<?php echo url('admin/category/product_category'); ?>"><i class="Hui-iconfont">&#xe620;</i> 分类管理</a></dt>
        </dl>
        <dl id="menu-comments">
            <dt><a href="<?php echo url('admin/picture/picture_list'); ?>"><i class="Hui-iconfont">&#xe686;</i> 专题管理</a></dt>
        </dl>

        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/admin/admin_role'); ?>" title="角色管理">角色管理</a></li>
                    <li><a href="<?php echo url('admin/admin/admin_permission'); ?>" title="权限管理">权限管理</a></li>
                    <li><a href="<?php echo url('admin/admin/admin_list'); ?>" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
</body>
</html>

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">我的桌面</span> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎使用H-ui.admin <span class="f-14">v2.3</span>后台模版！</p>
			<p>登录次数：18 </p>
			<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr>
						<th colspan="7" scope="col">信息统计</th>
					</tr>
					<tr class="text-c">
						<th>统计</th>
						<th>资讯库</th>
						<th>图片库</th>
						<th>产品库</th>
						<th>用户</th>
						<th>管理员</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-c">
						<td>总数</td>
						<td>92</td>
						<td>9</td>
						<td>0</td>
						<td>8</td>
						<td>20</td>
					</tr>
					<tr class="text-c">
						<td>今日</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr class="text-c">
						<td>昨日</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr class="text-c">
						<td>本周</td>
						<td>2</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr class="text-c">
						<td>本月</td>
						<td>2</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
				</tbody>
			</table>
			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th width="30%">服务器计算机名</th>
						<td><span id="lbServerName">http://127.0.0.1/</span></td>
					</tr>
					<tr>
						<td>服务器IP地址</td>
						<td>192.168.1.1</td>
					</tr>
					<tr>
						<td>服务器域名</td>
						<td>www.h-ui.net</td>
					</tr>
					<tr>
						<td>服务器端口 </td>
						<td>80</td>
					</tr>
					<tr>
						<td>服务器IIS版本 </td>
						<td>Microsoft-IIS/6.0</td>
					</tr>
					<tr>
						<td>本文件所在文件夹 </td>
						<td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
					</tr>
					<tr>
						<td>服务器操作系统 </td>
						<td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
					</tr>
					<tr>
						<td>系统所在文件夹 </td>
						<td>C:\WINDOWS\system32</td>
					</tr>
					<tr>
						<td>服务器脚本超时时间 </td>
						<td>30000秒</td>
					</tr>
					<tr>
						<td>服务器的语言种类 </td>
						<td>Chinese (People's Republic of China)</td>
					</tr>
					<tr>
						<td>.NET Framework 版本 </td>
						<td>2.050727.3655</td>
					</tr>
					<tr>
						<td>服务器当前时间 </td>
						<td>2014-6-14 12:06:23</td>
					</tr>
					<tr>
						<td>服务器IE版本 </td>
						<td>6.0000</td>
					</tr>
					<tr>
						<td>服务器上次启动到现在已运行 </td>
						<td>7210分钟</td>
					</tr>
					<tr>
						<td>逻辑驱动器 </td>
						<td>C:\D:\</td>
					</tr>
					<tr>
						<td>CPU 总数 </td>
						<td>4</td>
					</tr>
					<tr>
						<td>CPU 类型 </td>
						<td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
					</tr>
					<tr>
						<td>虚拟内存 </td>
						<td>52480M</td>
					</tr>
					<tr>
						<td>当前程序占用内存 </td>
						<td>3.29M</td>
					</tr>
					<tr>
						<td>Asp.net所占内存 </td>
						<td>51.46M</td>
					</tr>
					<tr>
						<td>当前Session数量 </td>
						<td>8</td>
					</tr>
					<tr>
						<td>当前SessionID </td>
						<td>gznhpwmp34004345jz2q3l45</td>
					</tr>
					<tr>
						<td>当前系统用户名 </td>
						<td>NETWORK SERVICE</td>
					</tr>
				</tbody>
			</table>
		</article>
		<footer class="footer">
			<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
				Copyright &copy;2015 H-ui.admin v3.0 All Rights Reserved.<br>
				本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
		</footer>
	</div>
</section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="_admin_/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="_admin_/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="_admin_/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="_admin_/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->
</body>
</html>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->

<!--此乃百度统计代码，请自行删除-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--/此乃百度统计代码，请自行删除-->
</body>
</html>