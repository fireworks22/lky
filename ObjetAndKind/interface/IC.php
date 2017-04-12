<?php
abstract class IC{
    protected $c;
    function __construct($c){
        $this->c = $c;
    }
    abstract protected function c1();
    abstract protected function c2();
}