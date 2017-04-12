<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:83:"D:\phpStudy\WWW\boke\public/../application/admin\view\article\product_category.html";i:1489985744;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\meta.html";i:1489980007;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\header.html";i:1489987564;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\menu.html";i:1489986761;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\footer.html";i:1489978598;}*/ ?>
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

<title>分类管理</title>
<link rel="stylesheet" href="_admin_/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
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
                    <li><a href="javascript:;" onclick="article_add('添加分类','<?php echo url('admin/article/product_category'); ?>')"><i class="Hui-iconfont">&#xe620;</i> 新增分类</a></li>

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
            <dt><a href="<?php echo url('admin/article/product_category'); ?>"><i class="Hui-iconfont">&#xe620;</i> 分类管理</a></dt>
        </dl>
        <dl id="menu-comments">
            <dt><a href=""><i class="Hui-iconfont">&#xe686;</i> 专题管理</a></dt>
        </dl>

        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="admin-role.html" title="角色管理">角色管理</a></li>
                    <li><a href="admin-permission.html" title="权限管理">权限管理</a></li>
                    <li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品分类 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<table class="table">
				<tr>
					<td width="200" class="va-t"><ul id="treeDemo" class="ztree"></ul></td>
					<td class="va-t"><iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=390px SRC="product_category_add.html"></iframe></td>
				</tr>
			</table>
		</article>
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
<script type="text/javascript" src="_admin_/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="_admin_/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="_admin_/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="_admin_/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript">
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pId",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("tree");
			if (treeNode.isParent) {
				zTree.expandNode(treeNode);
				return false;
			} else {
				demoIframe.attr("src",treeNode.file + ".html");
				return true;
			}
		}
	}
};

var zNodes =[
	{ id:1, pId:0, name:"一级分类", open:true},
	{ id:11, pId:1, name:"二级分类"},
	{ id:111, pId:11, name:"三级分类"},
	{ id:112, pId:11, name:"三级分类"},
	{ id:113, pId:11, name:"三级分类"},
	{ id:114, pId:11, name:"三级分类"},
	{ id:115, pId:11, name:"三级分类"},
	{ id:12, pId:1, name:"二级分类 1-2"},
	{ id:121, pId:12, name:"三级分类 1-2-1"},
	{ id:122, pId:12, name:"三级分类 1-2-2"},
];

var code;

function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}

$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	demoIframe = $("#testIframe");
	demoIframe.bind("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	zTree.selectNode(zTree.getNodeByParam("id",'11'));
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>