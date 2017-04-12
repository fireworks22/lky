<?php
header("Content-type:text/html; charset=utf-8");
require_once "Felidae.php";
class Cat extends Felidae{
    private $race="猫";
    function pet(){
            echo "我是{$this->race}"."<hr/>";
    }
}
$cat = new Cat();
$cat->pet();
$cat->tree();
$cat->predator();