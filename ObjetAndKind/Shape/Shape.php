<?php


abstract class Shape{
    protected $width;
    protected $height;
    protected function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }
    abstract protected function getArea();
    abstract protected function getPrimeter();
}