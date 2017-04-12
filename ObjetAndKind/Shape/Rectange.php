<?php

require_once "Shape.php";
class Rectange extends Shape{
     function __construct($width, $height)
    {
        parent::__construct($width, $height);
    }
    public function getArea()
    {
        return $this->width*$this->height;
    }
    public function getPrimeter()
    {
        return ($this->width+$this->height)*2;
    }
}
$s = new Rectange(50,80);
echo $s->getArea()."<hr/>";//4000
echo $s->getPrimeter(); //260


