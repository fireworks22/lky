<?php
header("Content-type: text/html; charset = utf-8");
class Animal{
    public $name = "苹果";
    public $color = "红色";
    /**
     * 行为(成员方法)
     */
    function use(){
        echo "充饥";
    }
    function benefit(){
        echo "含有人体需要的丰富的稀有元素";
    }
}
$animal = new Animal();
echo $animal->name;
echo "<hr/>";
echo $animal->color;
echo "<hr/>";
$animal->use();