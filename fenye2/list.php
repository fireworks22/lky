<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div>
    <table class="table table-bordered">
        <tr class="active">
            <td>id</td>
            <td>账号</td>
            <td>昵称</td>
            <td>email</td>
            <td>操作</td>
        </tr>
        <?php
        header("Content-type: text/html; charset=utf-8");
        $mysql = new mysqli('localhost','root', '123456', 'users');
        if($mysql->connect_errno){
            exit("链接失败".$mysql->connect_error);
        }
        $mysql->set_charset("utf8");
        $p = isset($_GET["p"])?$_GET["p"]:1;
        $size = 12;
        $perStart = ($p-1)*$size;
        $sql = "select id,username,nickname,email  from user limit {$perStart},{$size}";
        $res = $mysql->query($sql);
        $tr = "";
        $index = 1;
        if($res && $res->num_rows>0){
            while ($row = $res->fetch_assoc()){
                $tr .= <<<TR
                    <tr>
                        <td>{$index}</td>
                        <td>{$row["username"]}</td>
                        <td>{$row["nickname"]}</td>
                        <td>{$row["email"]}</td>
                        <th><a class="a" href="modify.php?id={$row['id']}">修改</a> <a class="a" href="DO.php?act=del&id={$row['id']}">删除</a></th>
                    </tr>
                
TR;
        $index++;
            }
        }
        echo $tr;
        $res->free_result();
        $sql = "select count(*) from user";
        $resx = $mysql->query($sql);
        $rows = $resx->fetch_all();
        $total = ceil($rows[0][0]/2);
       // echo $total;
        $mysql->close();
        ?>

    </table>
    <nav class="NAV" aria-label="Page navigation">
        <ul class="pagination">
            <?php
            $showPage = 5;
            $pageOffset = floor($showPage/2); //偏移量
            $li = "";
            $self = $_SERVER["PHP_SELF"];

            //上一页
            if($p >1 && $total>$showPage){
                $px = $p-1;
                $li.= <<<EOT
                <li><a href="{$self}?p=1">首页</a></li>
            
                <li>
                    <a href="{$self}?p={$px}" aria-label="Previous">
                        <span aria-hidden="true">上一页</span>
                    </a>
                </li>
EOT;
            }
            if($total>$showPage && $p>$pageOffset+1){
                $li.= <<<EOX
                        <li>
                            <a href="javascitp:;">
                                  <span aria-hidden="true">...</span>  
                            </a>
                        </li>        
EOX;
            }
            $start = 1;
            $end = $total;
            if($p > $pageOffset ){
                $start = $p-$pageOffset;
                $end = ($p+$pageOffset)>$total?$total:($p+$pageOffset);
            }else if($showPage>$total){
                $start = 1;
                $end = $total;
            }else {
                $start = 1;
                $end = $showPage;
            }
            for($i=$start; $i<=$end; $i++){
                if($i == $p){
                    $li .= <<<LX
                    <li class ="active"><a href="{$self}?p={$i}">{$i}</a></li>

LX;
                }else{
                    $li .= <<<LI
                        <li><a href="{$self}?p={$i}">{$i}</a></li>
LI;
                }
            }

            if($total>$showPage && $total>($p+$pageOffset)){
                $li.= <<<EOX
                        <li>
                            <a href="javascitp:;">
                                  <span aria-hidden="true">...</span>  
                            </a>
                        </li>        
EOX;
            }
            if($p < $total && $total>$showPage){
                $ps = $p+1;
                $li .= <<<EOT
                    <li>
                        <a href="{$self}?p=$ps" aria-label="Previous">
                            <span aria-hidden="true">下一页</span>
                        </a>
                    </li>
                    <li><a href="{$self}?p=1">末页</a></li>
EOT;


            }
            echo $li;
            ?>


        </ul>
    </nav>
</div>
</body>
</html>