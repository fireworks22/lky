<?php
require_once "Person.php";
class Teacher extends Person{
    private $teaNo="nini";

    function teach(){
        return "woshi{$this->teaNo}";
    }
}
$tea = new Teacher();
echo $tea->teach();