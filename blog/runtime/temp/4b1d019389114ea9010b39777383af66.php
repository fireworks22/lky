<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"I:\wamp\www\tp\blog\public/../application/admin\view\category\category_add.html";i:1490064922;s:69:"I:\wamp\www\tp\blog\public/../application/admin\view\common\meta.html";i:1489977837;s:71:"I:\wamp\www\tp\blog\public/../application/admin\view\common\footer.html";i:1489980096;}*/ ?>
<!--_meta 作为公共模版分离出去-->
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
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="_admin_/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->


<link href="_admin_/lib/icheck/icheck.css" rel="stylesheet" type="text/css"/>
<title>添加产品分类</title>
</head>
<body>
<div class="pd-20">
    <form action="<?php echo url('admin/category/category_insert'); ?>" method="post" class="form form-horizontal" id="form-user-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" value="" placeholder="" id="user-name"
                       name="name">
            </div>
            <div class="col-5"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">父级菜单：</label>
            <div class="formControls col-5">
        <span class="select-box">
            <select class="select" size="1" name="pid">
              <option value="0" selected>顶级分类</option>
              <?php foreach($data as $vo): ?>
                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
              <?php endforeach; ?>
            </select>
        </span>
            </div>
            <div class="col-5"></div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-2">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="_admin_/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="_admin_/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="_admin_/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="_admin_/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
    $(function () {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });


    });
</script>
</body>
</html>