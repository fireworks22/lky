<?php
//狮子
header("Content-type:text/html; charset=utf-8");
require_once "Felidae.php";
class Lion extends Felidae{
    private $race="狮子";
    function pet(){
        echo "我是{$this->race}"."<hr/>";
    }
}
$l = new Lion();
$l->pet();
$l->tree();
$l->predator();