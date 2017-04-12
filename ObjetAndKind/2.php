<?php
header("Content-type: text/html; charset = utf-8");
class Cat{

    private $name;
    private $age;
    private $sex;
    private $kind;
    private $color;
    function __construct($name, $age, $sex, $kind, $color){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->kind = $kind;
        $this->color = $color;

    }
    /*function __destruct()
    {
        // TODO: Implement __destruct() method.
    }*/

    public function intro(){
        return "大家好！我是{$this->name},今年{$this->age}岁了";
    }

    public function getName(){
        return $this->name;
    }


    public function setName($name){
        $this->name = $name;
    }


    /*function __set($name, $value){
        $this->name = $value;

    }*/
    function __get($m_name){
        if(isset($this->$m_name)){
            return $this->$m_name;
        }else{
            return null;
        }
    }


    public function effect(){
        $this->spe();
        echo "宠物";
    }
    private function spe(){
        echo "逮老鼠";
    }
}
$cat = new Cat("加菲",4,"男","孟买猫","黑色");
echo $cat->intro();
echo "<hr/>";
echo $cat->getName();
echo "<hr/>";
echo $cat->setName("孟买");
//echo $cat->getName();
echo $cat->intro();
echo $cat->kind;