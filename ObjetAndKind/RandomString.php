<?php
header("Content-type:text/html; charset=utf-8");
class RandomString{
    private $length;
    private $type;
    public function __construct($length=4, $type=3){
        $this->length = $length;
        $this->type = $type;
    }
    public function getRandomString(){
        switch ($this->type){
            case "1":
                $str = str_shuffle("1234567890");
                return substr($str,0,$this->length);
                break;
            case "2":
                $str = str_shuffle("qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM");
                return substr($str,0,$this->length);
                break;
            case "3":
                $str = str_shuffle("1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM");
                return substr($str,0,$this->length);
                break;
        }
    }
}
$ran = new RandomString();
echo $ran->getRandomString();