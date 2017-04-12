<?php
class Creature{
    protected $animal="爬行动物";
    function predator(){
        echo "我是{$this->animal}";
    }
}