<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"I:\wamp\www\blog\mine\public/../application/admin\view\article\article_list.html";i:1490164471;s:71:"I:\wamp\www\blog\mine\public/../application/admin\view\common\meta.html";i:1490023508;s:73:"I:\wamp\www\blog\mine\public/../application/admin\view\common\header.html";i:1490518383;s:71:"I:\wamp\www\blog\mine\public/../application/admin\view\common\menu.html";i:1490517820;s:73:"I:\wamp\www\blog\mine\public/../application/admin\view\common\footer.html";i:1489832848;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="_admin_/lib/html5.js"></script>
    <script type="text/javascript" src="_admin_/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui/css/H-ui.min.css" />
    <!--<link rel="stylesheet" type="text/css" href="_admin_/static/h-ui/css/H-ui.login.css" />-->
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/css/style.css" />

    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

<title>资讯列表 - 资讯管理 - H-ui.admin v3.0</title>
<link rel="stylesheet" href="__lib__/bootstrap/css/bootstrap.min.css">
<style>
	.page_fr{
		float: right;
	}
</style>
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    <li><a href="javascript:;" onclick="article_add('新增文章','<?php echo url('admin/article/article_add'); ?>')"><i class="Hui-iconfont">&#xe616;</i> 新增文章</a></li>
                    <li><a href="javascript:;" onclick="picture_add('新增专题','<?php echo url('admin/topic/topic_add'); ?>')"><i class="Hui-iconfont">&#xe613;</i> 新增专题</a></li>
                    <li><a href="<?php echo url('admin/category/category_list'); ?>" onclick="product_add('新增分类','<?php echo url('admin/category/category_add'); ?>')"><i class="Hui-iconfont">&#xe620;</i> 新增分类</a></li>
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>
                        <a href="<?php echo url('index/index/index'); ?>" target="_blank">
                        <i class="Hui-iconfont">&#xe625;</i> 访问首页</a>
                    </li>
                    <li><?php echo $user['title']; ?></li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo $user['username']; ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="#">个人信息</a></li>
                            <li><a href="#">切换账户</a></li>
                            <li><a href="<?php echo url('admin/common/logout'); ?>">退出</a></li>
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
<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt>
                <a href="<?php echo url('admin/article/article_list'); ?>"><i class="Hui-iconfont">&#xe616;</i> 文章管理</a>
            </dt>
        </dl>

        <dl id="menu-product">
            <dt>
                <a href="<?php echo url('admin/category/category_list'); ?>">
                    <i class="Hui-iconfont">&#xe620;</i> 分类管理
                </a>
            </dt>
        </dl>
        <dl id="menu-topic">
            <dt>
                <a href="<?php echo url('admin/topic/topic_list'); ?>">
                    <i class="Hui-iconfont">&#xe6b3;</i> 专题管理
                </a>
            </dt>
        </dl>

        <dl id="menu-admin">
            <dt data-level="0"><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/permission/admin_role'); ?>" title="角色管理">角色管理</a></li>
                    <li><a href="<?php echo url('admin/permission/admin_permission'); ?>" title="权限管理">权限管理</a></li>
                    <li><a href="<?php echo url('admin/Permission/admin_list'); ?>" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->



<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		文章管理
		<span class="c-gray en">&gt;</span>
		文章列表
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<form action="" method="get">
					<span class="select-box inline">
				<select name="cate_id" class="select">
					<option value="0">全部分类</option>
					<?php if(is_array($ca) || $ca instanceof \think\Collection || $ca instanceof \think\Paginator): $i = 0; $__LIST__ = $ca;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['id']; ?>" <?php if($cate_select==$vo['id']): ?> selected <?php endif; ?>><?php echo $vo['cate_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>
					<input type="text" name="keyword" id="" placeholder="文章名称" style="width:250px" class="input-text">
					<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
				</form>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				<a class="btn btn-primary radius" data-title="添加资讯" _href="article-add.html" onclick="article_add('添加资讯','<?php echo url('admin/article/article_add'); ?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加文章</a>
				</span>
				<span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
			</div>
			<div class="mt-20">
				<table class="table table-border table-bordered table-bg table-hover table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">ID</th>
							<th>标题</th>
							<th width="80">分类</th>
							<th width="140">创建时间</th>
							<th width="140">发布时间</th>
							<th width="60">发布状态</th>
							<th width="120">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c">
							<td><input type="checkbox" value="<?php echo $vo['id']; ?>" name=""></td>
							<td><?php echo $vo['id']; ?></td>
							<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看"><?php echo $vo['title']; ?></u></td>
							<td><?php echo $vo['cate_name']; ?></td>
							<td><?php echo $vo['create_time']; ?></td>
							<td><?php echo $vo['publish_time']; ?></td>
							<td class="td-status"><span class="label label-success radius">
								<?php if($vo['isRelease'] = 1): ?>
								已发布
								<?php else: ?>
								未发布
								<?php endif; ?>
							</span></td>

							<td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>
								<a style="text-decoration:none" _href="<?php echo url('article_edit', ['id'=>$vo['id']]); ?>" class="ml-5" onClick="article_edit('文章编辑','<?php echo url('admin/article/article_edit', ['id'=>$vo['id']]); ?>','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
								<a style="text-decoration:none" class="ml-5" onClick="article_del(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div>
			<div class="page_fr">
				<?php echo $data->render(); ?>
			</div>
		</article>
	</div>
</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="_admin_/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="_admin_/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="_admin_/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="_admin_/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
		//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		{"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});

/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo url("admin/article/article_del_ajax"); ?>',
			dataType: 'json',
			data: "id="+id,
			success: function(data){
				if(data.error==0){
					$(obj).parents("tr").remove();
					layer.msg(data.msg,{icon:1,time:1000});
				}else{
					layer.msg(data.msg,{icon:2,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*资讯-下架*/
function article_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*资讯-发布*/
function article_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*资讯-申请上线*/
function article_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>