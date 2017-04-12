<?php
class Person{
    protected $name;
    protected $sex;
    protected $age;
    protected $brith;
    function __construct($name,$sex,$age,$brith){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
        $this->brith = $brith;
    }

    function eat(){

    }
    function drink(){

    }
}
$per = new Person("李四","男","24","1994-02-23");
