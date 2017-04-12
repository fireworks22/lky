<?php
header("Content-type: text/html; charset = utf-8");
class Dog{
    public $name;
    public $color;
    public $breed;
    //public $handel;
    function __construct($name, $color, $breed){
        $this->name = $name;
        $this->color = $color;
        $this->breed = $breed;

    }

    function intro(){
        echo "我是{$this->name},我的血统是高贵的{$this->breed},";
    }
    public function watch(){
        echo "职责是替主人看家。";
    }

}
$animal = new Dog("狮子","黑色","中华田园犬");
$dog= new Dog("狮子","黑色","中华田园犬");
echo $animal->intro().$animal->watch();
echo $dog->intro().$dog->watch();