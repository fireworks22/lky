<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27 0027
 * Time: 13:43
 */
header("Content-type: text/html; charset=utf-8");
echo date('Y-m-d h:i:s', time())."<br>";
echo "时间戳：".time()."<br>";

echo "当前时间为：".date("y-m-d h:i", time())."<br>";

echo "时间戳：".date('U')."<br>";

echo  "时间戳改为时间形式显示：".date("y-m-d h:i",1488175659)."<br>";
/** date(format[, timestamp])两种方法
 *
 * date(format):将当前时间转换成指定格式
 *  date(format[, timestamp]) 将时间戳转换成指定格式
 */
echo"<hr/>";
/**
 * getdate(timestamp) 获取当前时间
 *2017-02-27 02:16:25<br>时间戳：1488176185<br>当前时间为：17-02-27 02:16<br>时间戳：1488176185<br>时间戳改为时间形式显示：17-02-27 02:07<br><hr/>Array
 *(
 *[seconds] => 25
*[minutes] => 16
*[hours] => 14
*[mday] => 27
*[wday] => 1
*[mon] => 2
*[year] => 2017
*[yday] => 57
*[weekday] => Monday
*[month] => February
*[0] => 1488176185
*)

 */
$arr = getdate();
print_r($arr);
echo "<br>";
echo $arr['mon']."<br>";
/*php中false转换成字符串为null*/
$f = false;
echo $f."hjkjhg";
echo "<hr/>";
echo mktime(12, 5, 6, 7, 1, 2000);

echo "<hr/>";


/*$timeFutur = mktime(0,0,0, 10,20,2017);*/
$Futur = strtotime("2017-10-20");
$arrTime = time();
/*echo  $arrTime['yday'];*/
$ca = $Futur-$arrTime;

$day = floor($ca/3600/24);
echo  $day;
