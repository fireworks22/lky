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
    ```js
    var a;
    if(a != a){

    }
    function isMyNaN(){
        raturn a != a
    }

    ```
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
# 运算符
##
    运算符是处理数据的基本方法
# dom
## 什么是DOM?
    文档对象模型：Document Object Model(DOM)
    XML DOM
    HTML DOM
### DOM 的查询
### DOM 节点的新建（增加）
### DOM 节点的删除
### DOM 节点的
### DOM 节点获取
    1.通过id      返回对象
        document.getElementById("")
    2.通过标签      返回数组
        document.getElementsByTagName("")
    3.通过类名（慎用：不支持IE5/6/7/8） 返回数组
        document.getElementsByClassName("")
    4.document.querySelector
    5.document.querySelectorAll
## Node 节点
    1.父节点-parent
    2.子节点-childNodes/firstChild/lastChild
    3.兄弟节点-nextsibling/prevoussibling
## 设置(添加)属性
    setAttribute();
        例：.setAttribute("title", "sd");
    元素.id = "" 添加id
        例：div.id = "box";
    元素.className = "" 添加类名
        例：div.className = "box";
## 增加DOM元素
    1.createElement()   创建元素
    2.父级对象.appendChild(子元素对象)   将子元素添加到父级
    3.父级对象.removeChild(需要删除的子节点对象)   删除子节点
    4.父级对象.replaceChild(新的节点对象， 就得节点对象) 替换子节点
# 事件
    1.鼠标事件
    2.键盘事件
    3.HTML事件
## 鼠标事件
    1.滑动事件
    2.点击事件（双击、单击）
        onclick 点击 、 ondblclick 双击
    3.滚轮事件
### 点击事件例子
```css
    body{
            margin: 0px;
        }
        #div{
            width: 200px;
            height: 200px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #786;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -100px;
            margin-top: -100px;
        }
        .content{
            width: 150px;
            height: 300px;
            background-color: #eeeeee;
            position: absolute;
            display: none;
        }
        .content ul{
            padding: 0;
            margin: 0px;
        }
        .content li{
            height: 30px;
            border-bottom: 1px solid #000;
            list-style: none;
        }
```
```html
    <div id="div">

        </div>
        <div class="content" id="con">
            <ul>
                <li>桌面<>
                <li>个性化<>
            </ul>
        </div>

```
```js
    var div = document.getElementById("div");//鼠标移动事件（鼠标移上）
    div.addEventListener("mousemove",function (event) {
        var x = event.clientX;
        var y = event.clientY;
        div.style.left = x+"px";
        div.style.top = y+"px";
    });
    document.oncontextmenu = function(event){ // 鼠标右键点击事件
        var x = event.clientX;
        var y = event.clientY;
        var con = document.getElementById("con");
        con.style.display = "block";
        con.style.left = x+"px";
        con.style.top = y+"px";

        return false;
    }
```
## json对值的类型和格式有严格的规定
    1、符合类型的值只能是数组和对象，不能是函数、正则表达式对象、日期对象
    2、简单类型的值只有四种：字符串、数值（必须以十进制表示）、布尔值和null（不能使用NaN、Infinity
       、-infinity和undefined）
    3、字符串必须使用双引号表示，不能使用单引号
    4、对象的键名必须放在双引号里面
    5、数组或对象最后一个成员的后面，不能加逗号
## json语法
    1、数据在名称/值对中
    2、数据由逗号分隔
    3、花括号保存对象
    4、方括号保存数组
## 转换成字符串
```js
    var s = {
        "name":"li",
        "age":"12",
        "sex":"w",
        "image":""
    }；
    var str = JSON.stringify(s);
```
## JSON.stringify()
    JSON.stringify()有三个值：
        1、对象：需要转换成字符串的对象
        2、Array：过滤（需要转换成字符串的键）
        3、string：为了方便阅读，增加换行
```js
    var Array = {
        "-id":"5872234c421aa93161103dc7",
        "createdAt": "2017-01-08T19:32:28.973Z",
        "desc": "Lint \u662f\u4f18\u79c0\u7a0b\u5e8f\u5458\u4e4b\u53cb\uff0c\u68c0\u6d4b\u6f5c\u5728\u95ee\u9898\uff0c\u6027\u80fd\u4f18\u5316\uff0c\u53bb\u9664\u65e0\u7528\u8d44\u6e90\u5fc5\u5907\uff01",
        "publishedAt": "2017-01-09T11:46:59.821Z",
        "source": "web",
        "type": "Android",
        "url": "http://blog.csdn.net/u011240877/article/details/54141714",
        "used": true,
        "who": "Shixin Zhang"
    }
    var arr = ["-id","used","who"];
    var str = JSON.stringify(Array, arr, '-');
    console.log(str);
```
## JSON本地存储
    localStorage.setItem
## 删除localStorage
   全部删除：localStorage.clear();
   删除制定：localStorage.removeItem("");
##  Date
```js
    var date = new Date();// 获取当前时间对象
    var s = date.getTime();//s-时间戳
    var year = date.getFullYear();//获取当前年份
    var mouth = date.getMonth()+1;//月份
    var day = date.getDate();//获取一个月的第几天
    var day1 = date.getDay();//一周的第几天
    var h = date.getHours();//获取小时
    var m = date.getMinutes();//获取分
    var second=now.getSeconds();//获取秒
```
## 时间戳转化为具体时间
```js
function   formatDate(now)   {
    var   year=now.getFullYear();
    var   month=now.getMonth()+1;
    var   date=now.getDate();
    var   hour=now.getHours();
    var   minute=now.getMinutes();
    var   second=now.getSeconds();
    return   year+"-"+month+"-"+date+"  "+hour+":"+minute+":"+second;
}
//var d = new Date(1484032343479); //第一种转换方法
var date = new Date();//第二种方法
var s = date.getTime();
var d = new Date(s);
console.log(s);
console.log(formatDate(d));


```