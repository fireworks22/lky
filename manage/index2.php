<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>编号</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>操作</th>
        </tr>
        <?php
        $mysqli = new mysqli('localhost','root', '123456', 'users');
        if($mysqli->connect_errno){
            exit("链接失败".$mysqli->connect_error);
        }
        $mysqli->set_charset("utf8");
        $sql = "select id,username,email from user ORDER BY id";
        $res = $mysqli->query($sql);
        $tr = "";
        $index = 1;
        if($res && $res->num_rows>0){
            while ($row = $res->fetch_assoc()) {
                $tr .= <<<EOT
                <tr>
                    <th>{$index}</th>
                    <th>{$row["username"]}</th>
                    <th>{$row["email"]}</th>
                    <th><a href="">修改</a> <a href="doAction.php?act=del&id={$row['id']}">删除</a></th>
                </tr>

EOT;
        $index++;
            }
        }
        echo $tr;
        $res->free_result();
        $mysqli->close();
        ?>

    </table>
</div>
</body>
</html>