## 1、什么是javaScript?
            javaScript是一种轻量级脚本语言
            脚本语言：指的是它不具备开发操作系统的能力，而是中用来编写控制其他大型应用程序的脚本。
## javaScript的组成
            .ECMAScript:一套标准，最新标准es6
             。基本的语法构造：操作符，控制结构，语句
             。标准库：Array、 Date、 Math等
            .BOM:browser object model, 浏览器对象模型
            .DOM:Document Object Model, 文档对象模型
            MD文档插入图片 ！[](图片路径)
## 在函数外用var申明的变量，叫全局变量；在函数内用var申明的变量叫局部变量。
## 标识符命名规则
    标识符首字母不能是数字

## javascript保留关键字
|abstract |arguments|boolean | break|
|---|---|---|---|
|byte | catch|char | class |
|const | continue|debugger | default|
|delete|do|double|else|
|enum*|eval|export*|extends*|
|false| final|float|for|
|function|goto|if|implements|
|import*|in|instanceof|int|
|interface|let|long|native|
|new|null|package|private|
|protected|public|return|short|
|static|super*|switch|synchronized|
|this|throw|throws|transient|
|true|try|typeof|var|
|void|volatile|while|with|
|yield||||
## 输出
    console.log(); # //日志
    console.info();  信息
    console.warn();  警告
    console.error(); 错误
    document.innerText = "  "; 文本
    document.write();
## 数据类型
        5.数值（number），整数和小数 科学计数（10000：1e4；0.0001:1e-4）
        1.字符串(string)
        2.布尔值（boolean）true/false两个值
        3.Underfined 表示“未定义”或不存在，即此处目前没有任何值。
        4.Null 表示空缺，即此处因该有一个值，但目前为空。
    布尔值常常用于流程控制语句
    数值、字符串、布尔值称为原始类型； 对象又称为合成类型（复合类型）的值。
    值为假的（0/-0;undefined;null;false;NaN(not a number);""(空字符串)）
    特别注意：空数组（[]）和空对象（{}）对应的布尔值都是true
    值为underfined:
        1.变量声明了，却没有赋值；
            var i;
        2.调用函数时，因该提供的参数没有提供，参数为underfined；
            function f(x){
                return x;
            }
        3.对象的属性没有赋值；
            var o = new Object();
            o.p
        4.函数没有返回值时，默认返回underfined
            function f(){};
            f()
## 对象
    对象（object），各种值组成的集合。
    对象可以分成3个子类型：
        狭义的对象
        数组（array）
        函数（function）
    *狭义的对象和数组是两种不同的数据组合方式，而函数是处理对象的方法。
    有三种办法检查一个是什么类型：typeof；Object.get;instanceof.
#### 例
```js
    var funcs = function(){}//funcition
    var function func(){}//function
    var a = "";//string
    var f = {};//object
    var h = [];//object
    var m = 1;//number
    var d = null;//object
    var s = undefined;//undefined
    var j = true;//boolean
    console.log(typeof function () {

    });//typeof用于确定一个值是什么类型。
    console.log(a instanceof array)
```
## 数据类型转换
    1.强制转换主要指使用number，string，boolean
        1.1 Number
            数值还是转换成数值()
            字符串转换成NaN()
            空{}、[] 转换成0
            数组、对象不为空转换为NaN
## 转换
    var num = 123+""    数值转换成字符串
    var num = +"1223"   字符串转换成数值
## 自动转换
       自动转换成布尔值：除了null;"";undefined;0/-0/+0;NaN;，其余的都为true。
            if(){
                    console.log("A");//true
                }
                else{
                    console.log("B");//false
                }
            { };[ ];"11";转换成布尔值为true
            null;"";undefined;0/-0/+0;NaN;转换成布尔值为false。
# 数值
## 整数和浮点数，所有数字都以64位浮点数形式存储
    1：符号位
    2~12：指数
    13~64：小数位
       由于浮点数不是精确值，所以涉及小数的比较和运算都比较小心，某
    些运算只能整数才能完成，
    2e5表示2*10^5
## NaN 出现的情况
    字符串解析出错
    一些数学函数的运算结果
    0除以0
## 判断NaN
    isNaN
    NaN在javascript中唯一一个值不等于自身的
## parsefloat()
    parseFloat("3.14")
    3.14
    parseFloat("314e-2")
    3.14
    parseFloat("0.314e1")
    3.14
    parseFloat("121fadsd")
    121
    parseFloat("\t\r3.14")
    3.14
## 字符串
    字符串是零个或多个字符，用单引号或双引号引起的。
