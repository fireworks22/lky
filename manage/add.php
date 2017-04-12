<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加用户</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tt.css">
</head>
<body>
<div class="container">
    <div class="head">
        <h3>添加用户</h3>
        <form action="doAction.php?act=add" method="post">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input type="text" name="username" id="username" class="form-control it" placeholder="用户名"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control it" placeholder="密码"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <input type="email" name="email" id="email" class="form-control it" placeholder="Email"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-actions row">
                <div>
                    <input type="submit" class="btn btn-sm btn-info" id="login" value="添加">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>