<?php

require_once "Shape.php";
class Square extends Shape{
     function __construct($width)
    {
        parent::__construct($width, $width);
    }
    public function getArea()
    {
       return pow($this->width,2);
    }
    public function getPrimeter()
    {
        return $this->width*4;
    }
}
$s = new Square(50);
echo $s->getArea()."<hr/>";//2500
echo $s->getPrimeter();//200