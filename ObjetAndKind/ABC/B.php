<?php
require_once "A.php";
class B extends A{
    const DB="blog";
    const d="aaa";
    static $c="xxx";
    /**
     * 方法的覆盖（重载）
     * final表示最终的
     * 如果父类中方法使用了final，则子类不能对该方法进行覆盖。
     * 如果一个子类使用了final来修饰，那么该类不能被继承。
     * ::(范围解析操作符)
     *      +用来访问被覆盖的成员属性或成员方法
     *      +用来访问静态成员
     *      +用来访问类常量（在类中申明的常量）
     * parent::访问父级的静态成员或者被子类覆盖的方法
     * self::访问当前类的成员属性或方法
     */
    function cc(){
        echo B::$c;
        echo self::DB."<hr/>";
        echo "Bc"."<hr/>";
        echo self::d."<hr/>";
        self::m();
        echo static::d."<hr/>";
        echo static::DB;
        parent::c();


    }
    static function m(){
        echo "AD";
    }
}
$b=new B();
$b->cc();
echo B::$c;
echo B::m();

