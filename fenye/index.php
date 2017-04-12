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
<div class="container container-fluid">
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>标题</td>
            <td>标签</td>
            <td>描述</td>
        </tr>
        <?php
        header("Content-type: text/html; charset=utf-8");
        $mysql = new mysqli('localhost','root','123456','world');
        if($mysql->connect_errno){
            exit("链接失败".$mysql->connect_error);
        }
        $mysql->set_charset("utf8");
        $p = isset($_GET["p"]) ? $_GET["p"] : 1;//当前页数
        $size = 10;//每页显示多少条数据
        $perStart = ($p-1)*$size;//从那条数据开始显示
        $sql = "select ID, Name, CountryCode, District from city LIMIT {$perStart},{$size}";
        $res= $mysql->query($sql);
        $tr = "";
        $index = 1;
        if($res && $res->num_rows>0){
            while ($row = $res->fetch_assoc()){
                $tr .= <<<EOT
                        <tr>
                            <td>{$index}</td>
                            <td>{$row['Name']}</td>
                            <td>{$row['CountryCode']}</td>
                            <td>{$row['District']}</td>
                        </tr>
            

EOT;
                $index++;
            }
        }
        echo  $tr;
        $res->free_result();

        $sql = "select count(*) from city";
        $resx = $mysql->query($sql);
        $rows = $resx->fetch_all();
        //$total = $rows[0][0];
        $total = ceil($rows[0][0]/$size); // 总页数
        //echo $total;
        $mysql->close();
        ?>
    </table>
    <nav aria-label="Page navigation">
        <ul class="pagination">

            <?php
            $showPage = 5;
            $pageOffset = floor($showPage/2); //偏移量
            $li = "";
            $self = $_SERVER["PHP_SELF"];

            //上一页
            if($p >1){
                $px = $p-1;
            $li.= <<<EOT
                <li><a href="{$self}?p=1">Home</a></li>
            
                <li>
                    <a href="{$self}?p={$px}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
EOT;
            }

            //前省略号
            if($total > $showPage && $p > $pageOffset+1){
                  $li.= <<<EOX
                        <li>
                            <a href="javascitp:;">
                                  <span aria-hidden="true">...</span>  
                            </a>
                        </li>        
EOX;
            }

            //页码
            $start = 1;
            $end = $total;
            if($p > $pageOffset){
                $start = $p-$pageOffset;
                $end = ($p+$pageOffset)>$total ? $total:($p+$pageOffset);

            }else{
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


            //后省略号
            if($total > $showPage && $total > ($p+$pageOffset)){
                $li .= <<<EOX
                        <li>
                            <a href="javascitp:;">
                                  <span aria-hidden="true">...</span>  
                            </a>
                        </li>
EOX;
            }

            //下一页
            if($p < $total){
                $ps = $p+1;
                $li.= <<<EOT
                    <li>
                        <a href="{$self}?p={$ps}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <li><a href="{$self}?p={$total}">END</a></li>
EOT;
            }

        echo $li;
            ?>


        </ul>
    </nav>
</div>

</body>
</html>