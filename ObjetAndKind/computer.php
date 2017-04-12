<?php
header("Content-type: text/html; charset = utf-8");
class Animal{
    public $name = "华硕";
    public $color = "白色";
    public $kind = "笔记本";
    public $screen;
    /**
     * 行为(成员方法)
     */
    function message(){
        echo "Hello";
    }
    function know(){
        echo "看视频，听音乐";
    }
    function game(){
        echo "网游，单机";
    }
}
$animal = new Animal();
echo $animal->name;
echo "<hr/>";
echo $animal->kind;
echo "<hr/>";
$animal->message();