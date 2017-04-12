<?php
header("Content-type: text/html; charset = utf-8");
class Animal{
    /**
     * public 公共的
     * private 私有的
     * 属性(成员变量)
     */
    public $name = "三星";
    public $user = "中国移动";
    public $color = "白色";
    public $kind = "曲屏";
    /**
     * 行为(成员方法)
     */
    function message(){
        echo "Hello";
    }
    function know(){
        echo "看视频，听音乐，导航";
    }
    function game(){
        echo "手游";
    }
}
$animal = new Animal();
echo $animal->name;
echo "<hr/>";
echo $animal->user;
echo "<hr/>";
$animal->message();