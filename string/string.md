## PHP中的单双引号的区别
        单引号不能解析变量，原样输出
        双引号能解析变量，输出变量的值
## PHP字符串中的{}的用法
        将变量名扩成一个整体来解析 注意 {}中变量的两侧不能加空格，且在双引号下作用。
        对字符串进行增删改查 注意 字符一一对应 下标0开始 {}换成[]一样适用
##
        heredoc ==>PHP中的双引号
        nowdoc ==> PHP中的单引号
##
        array，object不能直接转换成字符串
        null,false转换成字符串没有输出为空。
        true转换成字符串为1
## 强制转换
        1.临时转换
            1.1 (string)$var
                例子:
```php
   $str = 1234;
    $s = (string)$str;

```
            1.2 strval($var)
                例子
```php
    $str = 1234;
    $s = strval($str);
    <!--临时转换整数-->
    <!--(int)$str-->
```
        2.永久转换
            2.1 settype($var,'转换类型');
                可以转换成指定类型
            2.2 gettype($var);
## 获取字符串的相关类型
        1. strlen($)  获取字符串的长度
        2.获取字符串的字符
```php
    $user = "make";
    //2.1
    echo $user{0};
    //2.2
    echo $user[0];
    //2.3
    echo substr($user, 0 , 2);
```
        3.获取ascii码值
```php
    $user = "make";
    echo  $char = substr($user, 0 , 1);
    $ascii = ord($char);
    if(($ascii>=65 && $ascii<=90) || ($ascii>=97 && $ascii<=122)){
        echo "ok";
    }
    echo chr(66);
    // ord($string): 根据字符得到ascii码
    // chr($ascii): 根据ascii码得到对应的字符
```
        4.判断相等
```php
    $str = "1234";
    $arr = "1234";
    if(strcmp($str, $arr) == 0 ){
        echo "0";
    }
```
        5.查找
```php
    // strpos($string, $searStr[, $offset]): 查找$searStr首次出现的位置
    // stripos($string, $searStr[, $offset]): 忽略大小写的查找
    // strrpos($string, $searStr[, $offset]): 查找$searStr最后一次出现的位置
    $email = "123456Q@qq.com";
    echo  strpos($email,"@");
    echo stripos($email,"q");
    echo strrpos($email,"q");
```
        6.
```php

```