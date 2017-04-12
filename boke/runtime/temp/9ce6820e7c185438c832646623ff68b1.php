<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"D:\phpStudy\WWW\boke\public/../application/admin\view\admin\admin_list.html";i:1490151180;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\meta.html";i:1490322010;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\header.html";i:1489988118;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\menu.html";i:1490057926;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\footer.html";i:1489978598;}*/ ?>
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


<title>管理员列表</title>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		管理员管理
		<span class="c-gray en">&gt;</span>
		管理员列表
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				<a href="javascript:;" onclick="admin_add('添加管理员','<?php echo url('admin/admin/admin_add'); ?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a>
				</span>
				<span class="r">共有数据：<strong>54</strong> 条</span>
			</div>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr>
						<th scope="col" colspan="9">员工列表</th>
					</tr>
					<tr class="text-c">
						<th width="25"><input type="checkbox" name="" value=""></th>
						<th width="40">ID</th>
						<th width="150">登录名</th>
						<th width="90">手机</th>
						<th width="150">邮箱</th>
						<th>角色</th>
						<th width="130">加入时间</th>
						<th width="100">是否已启用</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-c">
						<td><input type="checkbox" value="1" name=""></td>
						<td>1</td>
						<td>admin</td>
						<td>13000000000</td>
						<td>admin@mail.com</td>
						<td>超级管理员</td>
						<td>2014-6-11 11:11:42</td>
						<td class="td-status"><span class="label label-success radius">已启用</span></td>
						<td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
							<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo url('admin/admin/admin_add'); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
					<tr class="text-c">
						<td><input type="checkbox" value="2" name=""></td>
						<td>2</td>
						<td>zhangsan</td>
						<td>13000000000</td>
						<td>admin@mail.com</td>
						<td>栏目编辑</td>
						<td>2014-6-11 11:11:42</td>
						<td class="td-status"><span class="label radius">已停用</span></td>
						<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,'10001')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a>
							<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','admin-add.html','2','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
				</tbody>
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
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
        //此处请求后台程序，下方是成功后的前台处理……

        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
    });
}
/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>