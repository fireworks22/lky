<?php
header("Content-type: text/html; charset = utf-8");
class Pen{
    public $name = "钢笔";
    public $color = "黑色";
    public function watch(){
        echo "写字";
    }
}
$animal = new Pen();
echo $animal->name;
echo "<hr/>";
echo $animal->color;
echo "<hr/>";
echo $animal->watch();