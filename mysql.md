# 面向对象面试题
## 请定义一个名为MyClass的类，这个类只有一个静态方法justDoIt。
```php
class MyClass{
    static function justDoIt(){

    }
}
```
## 只有该类才能访问该类的私有变量吗？
    答：私有属性只允许当前类进行访问
## 写出你知道的几种设计模式，并用php代码实现其中一种。

## 4.下题输出的是什么？
```php
    class a{
        function __construct(){
            echo "echo class a something";
        }
    }
    class b extends a{
        function __construct(){
            echo "echo class b something";
        }
    }
    $a = new b(); ?>
```
    答：输出为echo class b something
##  以下代码，输出的结果是什么？
```php
    abstract class a{
        function __construct(){
            echo "a";
        }
    }
    $a = new a();
```
    答：没有输出。第一这里名为a的类是一个抽象类，
    抽象类不能被实例化；第二如果一个类被定义为抽
    象类，那么这个类里面至少有一个方法是被抽象的。
## 借助继承，我们可以创建其他类的派生类。在PHP中，子类最多可以继承几个父类？
    答:在PHP中，子类只可以继承个父类。
## 类中如何定义常量、如何类中调用常量、如何在类外调用常量
    答：如下代码
```php
    class Foo{
        const con_var="常量";
        public function method_a(){
            echo (self::con_var); // 内部调用
        }
    }
    echo Foo::con_var; //外部调用
    $myFoo=new Foo();
    echo $myFoo->method_a();
```
## 接口和抽象类的区别是什么？
    答：接口是公开的，里面不能有私有的方法和变量，抽象类是可以有私有变量和方法的。
## 在 PHP 中，如果派生类与父类有相同名字的函数，则派生类的函数会替换父类的函数，程序结果为（）
```php
    class A{
        function disName(){
            echo "Picachu";
        }
    }
    class B extends A{
        var $tmp;
        function disName(){
            echo "Doraemon";
        }
    }
    $cartoon = New B;
    $cartoon->disName();
```
    答：结果为Doraemon
##  How would you create an object, which is an instance of “myclass”?
```php
   class Myclass{
       public $My;
       public function __construct($My){
           $this->My = $My;
           }
       public function con(){

       }
   }
   $my = new Myclass("你好");
   echo $my->My;
```
## How would you declare a class named “myclass” with no methods or properties?
```php
class Myclass{

}
```
## PHP5 中魔术方法函数有哪几个，请举例说明各自的用法
    答：1.__construct()
```php
    class Url{
        private $name;
        public function __construct($name){
            $this->name = $name;
        }
    }
    $url = new Url("周瑜");
    echo $url->name;
```
    2.__get()和isset()
```php
    class Pen{
        private $m_name;
        public function __construct($m_name){
            $this->m_name = $m_name;
        }
        public function __get($name){
            if(isset($this->$name)){
                return $this->$name;
            }else{
                return null;
            }
        }
        function intro(){
            return "{$this->m_name}";
        }
    }
    $p = new Pen("梦");
    echo $p->intro();
```
    3.__set()
```php
    class Pen{
        private $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        function intro(){
            return "{$this->name}";
        }
        public function __set($name, $value){
            $this->name = $value;
        }
    }
    $p = new Pen("钢笔");
    echo $p->intro();
    echo $p->setName("签字笔");
    echo $p->getName();
```
## 写出 php 的 public、protected、private 三种访问控制模式的区别
    答：public 公开的，允许对象，类内部，子类进行访问。
       protected 受保护的，允许当前类和子类(继承)进行访问
       private 私有的，只允许当前类进行访问