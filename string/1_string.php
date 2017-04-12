<?php
/**
 * Created by PhpStorm.
 * User: lky
 * Date: 2017/2/28 0028
 * Time: 9:48
 */
/**
 *
 *
 * heredoc ==>PHP中的双引号
 * nowdoc ==> PHP中的单引号
 * array，object不能直接转换成字符串 null,false转换成字符串没有输出为空。
 * true转换成字符串为1
 */

$user = "make";
echo  $char = substr($user, 0 , 1);
$ascii = ord($char);
if($ascii>=97 && $ascii<=122){
    echo "$ascii";
}
//echo chr(66);
echo  "<hr/>";
// strpos($string, $searStr[, $offset]): 查找$searStr首次出现的位置
// stripos($string, $searStr[, $offset]): 忽略大小写的查找
// strrpos($string, $searStr[, $offset]): 查找$searStr最后一次出现的位置
$email = "123456Q@qq.com";
echo  strpos($email,"@");
echo stripos($email,"q");
echo strrpos($email,"q");
// ord($string): 根据字符得到ascii码
// chr($ascii): 根据ascii码得到对应的字符