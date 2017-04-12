<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--上传文件是form表单的注意事项：
    +方法必须是post
    +必须加上enctype="multipart/form-data"
-->
<form action="doAction.php?act=file" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <input type="submit" value="上传">
</form>
</body>
</html>