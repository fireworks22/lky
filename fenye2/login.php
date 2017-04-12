

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="container">
    <h1>管理员登录</h1>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="DO.php?act=login" method="post">
                <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="密码">
                </div>
                <button type="submit" id="btn" class="btn btn-default">sign in</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>