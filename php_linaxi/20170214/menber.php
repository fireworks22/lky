<?php
/**
 * Created by PhpStorm.
 * User: wt
 * Date: 2016/12/7
 * Time: 18:00
 */

$arr = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
//水平翻转
for($i=0,$j=count($arr)-1,$rowN=count($arr);$i<($rowN % 2 ? ($rowN-1)/2 : $rowN/2);++$i,$j--){
    for ($l=0;$l<count($arr[0]);++$l){
        $temp = $arr[$i][$l];
        $arr[$i][$l] = $arr[$j][$l];
        $arr[$j][$l] = $temp;
    }
}
foreach ($arr as $row){
    echo "<br />";
    foreach ($row as $col){
        echo $col . "&nbsp;";
    }
    echo "<br />";
}
//垂直翻转
$arr2 = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12),
    array(13,14,15,16)
);
echo "<br />初始数组为:<br />";
foreach ($arr2 as $row){
    echo "<br />";
    foreach ($row as $col){
        echo $col . " ,";
    }
    echo "<br />";
}
for($l=0;$l<count($arr2);++$l){
    for ($i=0,$j=count($arr2[0])-1,$rowN=count($arr2[0]);$i<($rowN % 2 ? ($rowN-1)/2 : $rowN/2);++$i,$j--){
        $temp = $arr2[$l][$i];
        $arr2[$l][$i] = $arr2[$l][$j];
        $arr2[$l][$j] = $temp;
    }
}
echo "<br /> 垂直翻转为:<br />";
foreach ($arr2 as $row){
    echo "<br />";
    foreach ($row as $col){
        echo $col . " ,";
    }
    echo "<br />";
}
//逆时针旋转90°------------------------------------------------
$arr3 = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12),
    array(13,14,15,16)
);
$tmp_arr3 = [];
for ($i=0;$i<count($arr3);++$i){//x轴变y轴
    for ($j=0;$j<count($arr3[$i]);++$j){
        $tmp_arr3[$j][$i] = $arr3[$i][$j];
    }
}
//在水平翻转
for($i=0,$j=count($tmp_arr3)-1,$rowN=count($tmp_arr3);$i<($rowN%2 ? ($rowN-1)/2 : $rowN/2);$i++,$j--){
    for ($l=0;$l<count($tmp_arr3[0]);$l++){
        $tmp = $tmp_arr3[$i][$l];
        $tmp_arr3[$i][$l] = $tmp_arr3[$j][$l];
        $tmp_arr3[$j][$l] = $tmp;
    }
}
echo "<br />逆时针选择90°为<br />";
foreach ($tmp_arr3 as $row){
    echo "<br />";
    foreach ($row as $col){
        echo $col . " ,";
    }
    echo "<br />";
}
//顺时针旋转90°------------------------------------------------
$tmp_arr4 = [];
for ($i=0;$i<count($arr3);++$i){//x轴变y轴
    for ($j=0;$j<count($arr3[$i]);++$j){
        $tmp_arr4[$j][$i] = $arr3[$i][$j];
    }
}
//在水平翻转
for ($l=0;$l<count($tmp_arr4[0]);$l++){
    for($i=0,$j=count($tmp_arr4)-1,$rowN=count($tmp_arr4);$i<($rowN%2 ? ($rowN-1)/2 : $rowN/2);$i++,$j--){
        $tmp = $tmp_arr4[$l][$i];
        $tmp_arr4[$l][$i] = $tmp_arr4[$l][$j];
        $tmp_arr4[$l][$j] = $tmp;
    }
}
echo "<br />顺时针选择90°为<br />";
foreach ($tmp_arr4 as $row){
    echo "<br />";
    foreach ($row as $col){
        echo $col . " ,";
    }
    echo "<br />";
}
//案例5-----------------------------------------
$arr4 = array(
    array(1,2,3,4,5),
    array(16,17,18,19,6),
    array(15,24,25,20,7),
    array(14,23,22,21,8),
    array(13,12,11,10,9)
);
echo "<br />初始数组为:<br />";
foreach ($arr4 as $row){
    echo "<br />";
    foreach ($row as $col){
        echo $col . " ,";
    }
    echo "<br />";
}
$arr4_tmp = [];
for ($i=0,$j=count($arr4),$rowN=count($arr4);$i<($rowN % 2 ? ($rowN-1)/2 : $rowN/2);++$i,--$j){
    for ($l=$i;$l<$j;++$l){
        array_push($arr4_tmp,$arr4[$i][$l]);
    }
    for ($l=$i+1;$l<$j-1;++$l){
        array_push($arr4_tmp,$arr4[$l][$j-1]);
    }
    for ($l=$j-1;$l>=$i;--$l){
        array_push($arr4_tmp,$arr4[$j-1][$l]);
    }
    for ($l=$j-1-1;$l>$i;--$l){
        array_push($arr4_tmp,$arr4[$l][$i]);
    }
    if ($i == ($rowN % 2 ? ($rowN-1)/2 : $rowN/2)-1){
        array_push($arr4_tmp,$arr4[round(($rowN-1)/2)][round(($rowN-1)/2)]);
    }
}

array_push($arr4_tmp,$arr4_tmp[0]);
array_shift($arr4_tmp);
$finish = [];
for ($i=0,$j=count($arr4),$count=0,$rowN=count($arr4);$i<($rowN % 2 ? ($rowN-1)/2 : $rowN/2);++$i,--$j){
    for ($l=$i;$l<$j;++$l){
        $finish[$i][$l]=$arr4_tmp[$count];
        ++$count;
    }
    for ($l=$i+1;$l<$j-1;++$l){
        $finish[$l][$j-1]=$arr4_tmp[$count];
        ++$count;
    }
    for ($l=$j-1;$l>=$i;--$l){
        $finish[$j-1][$l]=$arr4_tmp[$count];
        ++$count;
    }
    for ($l=$j-1-1;$l>$i;--$l){
        $finish[$l][$i]=$arr4_tmp[$count];
        ++$count;
    }
    if ($i == ($rowN % 2 ? ($rowN-1)/2 : $rowN/2)-1){
        $finish[round(($rowN-1)/2)][round(($rowN-1)/2)] =$arr4_tmp[$count];
        ++$count;
    }
}
echo "<br />前进一步为：<br />";
foreach ($finish as $row){
    ksort($row);
    echo "<br />";
    foreach ($row as $col){
        echo $col . " ,";
    }
    echo "<br />";
}
//快排
function quickSort(&$arr){
    if(count($arr)>1){
        $k=$arr[0];
        $x=array();
        $y=array();
        $_size=count($arr);
        for($i=1;$i<$_size;$i++){
            if($arr[$i]<=$k){
                $x[]=$arr[$i];
            }elseif($arr[$i]>$k){
                $y[]=$arr[$i];
            }
        }
        $x=quickSort($x);
        $y=quickSort($y);
        return array_merge($x,array($k),$y);
    }else{
        return$arr;
    }
}$arr4 = [5,3,1,4];

var_dump(quickSort($arr4));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>