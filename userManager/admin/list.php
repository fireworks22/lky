<?php
include_once "lib.php";
checkUser();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <style>
        .table{
            margin-top: 20px;
        }
    </style>
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
        header("Content-type: text/html; charset=utf-8");
        $mysqli = new mysqli("localhost","root","123456","users");
        if($mysqli->connect_errno){
            exit("数据库连接失败:".$mysqli->connect_error);
        }
        //释放结果集
        $mysqli->set_charset("utf8");
        $sql = "SELECT id, username, email FROM user";
        $res = $mysqli->query($sql);
        $tr = "";
        $index = 1;
        if($res && $res->num_rows>0){
            while ($row = $res->fetch_assoc()){
                $tr .= <<<EOF
                    <tr>
                        <td>{$index}</td>
                        <td>{$row["username"]}</td>
                        <td>{$row["email"]}</td>
                        <td><a href="modify.php?id={$row['id']}">修改</a> <a href="doAction.php?act=del&id={$row['id']}">删除</a></td>
                    </tr>

EOF;
            $index++;
            }
        }
        echo  $tr;
        $res->free_result();
        $mysqli->close();
        ?>

    </table>
</div>
</body>
</html>