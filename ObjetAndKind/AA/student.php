<?php
require_once "Person.php";
class Student extends Person{
    private $stuNo;
    function __construct($stuNo="学生"){
        $this->stuNo = $stuNo;
    }

    function study(){

    }
}
$stu = new Student();
echo $stu->study();