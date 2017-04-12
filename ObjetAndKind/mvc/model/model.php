<?php
class Model{
    private $array = array(
        "title" =>"这是title",
        "disc"=>"首页内容"
    );
    function getDate($key){
        return $this->array[$key];
    }
}