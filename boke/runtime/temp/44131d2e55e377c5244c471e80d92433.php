<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy\WWW\boke\public/../application/admin\view\article\article_add.html";i:1490335559;s:70:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\meta.html";i:1490322010;s:72:"D:\phpStudy\WWW\boke\public/../application/admin\view\common\footer.html";i:1489978598;}*/ ?>


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

<title>资讯管理 - 新增文章</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" enctype="multipart/form-data" action="<?php echo url('admin/article/article_save'); ?>" method="post">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>分类栏目：
			</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
					<select name="cate_id" class="select">
						<?php foreach($data as $vo): ?>
						<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
						<?php endforeach; ?>
					</select>
				</span>
			</div>
		</div><div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<textarea name="abstract" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"></textarea>
			<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章作者：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">其他操作：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="checkbox-top" name="isTot">
					<label for="checkbox-top">置顶</label>
				</div>
				<div class="check-box">
					<input type="checkbox" id="checkbox-hot" name="isHot">
					<label for="checkbox-hot">热门</label>
				</div>
				<div class="check-box">
					<input type="checkbox" id="checkbox-commend" name="isCommend">
					<label for="checkbox-commend">推荐</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">封面：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<span class="btn-upload form-group">
					  <input class="input-text upload-url radius" type="text" name="file_name" id="uploadfile-1" readonly>
						<a href="javascript:void();" class="btn btn-primary radius">
							<i class="iconfont">&#xf0020;</i> 浏览文件
						</a>
					  <input type="file" multiple name="file" class="input-file">
					</span>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" type="text/plain" name="content" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>标签：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="tags">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>

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
<script type="text/javascript" src="_admin_/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="_admin_/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="_admin_/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="_admin_/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="_admin_/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="_admin_/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="_admin_/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});


	$list = $("#fileList"),
	$btn = $("#btn-star"),
	state = "pending",
	uploader;

	var uploader = WebUploader.create({
		auto: true,
		swf: 'lib/webuploader/0.1.5/Uploader.swf',

		// 文件接收服务端。
		server: 'fileupload.php',

		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker',

		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		}
	});
	uploader.on( 'fileQueued', function( file ) {
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list.append( $li );

		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader.makeThumb( file, function( error, src ) {
			if ( error ) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}

			$img.attr( 'src', src );
		}, thumbnailWidth, thumbnailHeight );
	});
	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
			$percent = $li.find('.progress-box .sr-only');

		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});

	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function( file ) {
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
	});

	// 文件上传失败，显示上传出错。
	uploader.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});

	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });

    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });

	var ue = UE.getEditor('editor');

});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>