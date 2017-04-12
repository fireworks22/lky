<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加文章</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/essay.css">
</head>
<body>
<div class="container">
    <form action="">
        <table class="table">
            <tr>
                <td>标题: <input type="text" name="title"></td>
            </tr>
            <tr>
                <td>作者: <input type="text" name="writer"></td>
            </tr>
            <tr>
                <td><textarea class="form-control" name="area" rows="20"></textarea>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-default">提交</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
