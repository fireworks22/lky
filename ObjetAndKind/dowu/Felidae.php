<?php
//猫科
require_once "creature.php";
class Felidae extends Creature{
    protected $type="猫科";
    function tree(){
        echo "我是{$this->type}"."<hr/>";
    }
}