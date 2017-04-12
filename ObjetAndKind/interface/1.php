<?php
header("Content-type: text/html; charset = utf-8");
class Foo{
    const con_var="常量值能被改";
    public function method_a(){
        echo (self::con_var); // 内部调用
    }
}
echo Foo::con_var;
$myFoo=new Foo();
echo $myFoo->method_a();