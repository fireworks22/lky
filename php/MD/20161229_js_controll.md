## 1、输入三个整数x,y,z，请把这三个数由小到大输出
```html
    <input type="text" name="" id="text" placeholder="输入第一个整数"/>
    <input type="text" name="" id="text1" placeholder="输入第二个整数"/>
    <input type="text" name="" id="text2" placeholder="输入第三个整数"/>
    <input type="button" value="点击" id="btn"/>
```
```js
    var text = document.getElementById("text");
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var btn = document.getElementById("btn");
    var h = document.getElementById("h");
    btn.onclick = function () {
        var a = text.value;
        var b = text1.value;
        var c = text2.value;
        var t;
        if(a>b){
            t = a;
            a = b;
            b = t;
        }
        if(a>c){
            t = a;
            a = c;
            c = t;
        }
        if(b>c){
            t = b;
            b = c;
            c = t;
        }
        h.innerHTML = a+","+b+","+c;
    }
```
### 1.1 第二种方法
```js
    var text = document.getElementById("text");
    var btn = document.getElementById("btn");
    var h = document.getElementById("h");
    btn.onclick = function(){
            var value = text.value;
            var arr = value.split(",");
            var a = +arr[0];
            var b = +arr[1];
            var c = +arr[2];
            var s = arr.sort(function(a, b){
                return a-b;
            });
            console.log(s);
        }

```
## 2、判断101-200之间有多少个素数，并输出所有素数。
```js
    var a ;
    for(var i=101;i<=200;i++) {
        for(var j=2;j<i;j++) {
            if(i%j==0) {
                a = false;
                break;
            } else {
                a = true;
            }
        }
        if(a){
            console.log(i+"是素数！");
        }
    }
```
## 2.1 判断一个数是不是素数
```js
     var b;
        for(var j=2; j<b; j++){
            if(b%j == 0){
                b = false;
                break;
            } else {
                b = true;
            }
        }
        if(b){
            console.log("是素数");
        } else {
            console.log("不是素数");
        }

```
## 3、输入两个正整数m和n，求其最大公约数和最小公倍数。（利用辗除法）
```html
    <form action="">
        <input type="text" name="" id="text">
        <input type="button" value="等级查询" id="button">
    </form>
    <strong id="h"></strong>
```
```js
    var text = document.getElementById("text");
    var btn = document.getElementById("button");
    var h = document.getElementById("h");
    btn.onclick = function () {
        var value = text.value;
        var arr = value.split(",");
        var m = +arr[0];
        var n = +arr[1];
        var a;
        var b;
        for(var i=0; i<m; i++){
            if(m%i == 0 && n%i == 0){
                a = i;
            }

        }
        for(var j=1; j<=m*n; j++){
            if(j%n == 0 && j%m == 0){
                b = j;
                break;
            }
        }
        h.innerHTML = a+","+b;
    }

```
## 4、有一分数序列：2/1，3/2，5/3，8/5，13/8，21/13...求出这个数列的前20项之和。
```js
    var x = 2;
    var y = 1;
    var sum = 0;
    var a;
    for(var i=1; i<=20; i++){
        sum = sum + x/y;//sum += x/y;
        a = x;
        x = x+y;
        y = a;
    }
    console.log(sum);
```
## 5、给一个不多于5位的正整数，要求：一、求它是几位数，二、逆序打印出各位数字。
```html
    <input type="text" name="" id="text">
    <input type="button" value="等级查询" id="button">
```
```js
    var text = document.getElementById("text");
    var btn = document.getElementById("button");
    var h = document.getElementById("h");
     btn.onclick = function () {
        var value = text.value;
        var a = value.length;
        var num = value + "";
        var s = "" ;
        for(var i=value.length; i>0; i--){
            s += value[i-1];
        }
        h.innerHTML = a+","+s;

    }
```
## 6、请输入星期几的第一个字母来判断一下是星期几，如果第一个字母一样，则继续判断第二个字母。
```html
    <input type="text" name="" id="text" placeholder="请输入星期的第一个大写字母"/>
    <input type="button" value="点击" id="btn"/>
    <h1 id="h"></h1>
```
```js
    var text = document.getElementById("text");
    var btn = document.getElementById("button");
    var h = document.getElementById("h");
    btn.onclick = function () {
        var a = text.value;
        var f = a[0];

        if(a.length>1){
            var e = a[1];
        }
        var res =  "";
        switch (f){
            case "m":
            case "M":
                res = "Monday";
                break;
            case "w":
            case "W":
                res = "Wednesday";
                break;
            case "f":
            case "F":
                res = "Friday";
                break;
            case "s":
            case "S":
                if(e == "u"){
                    res = "星期六Sunday";
                }else if(e == "a"){
                    res = "星期天Saturday";
                }else{
                    res = "请输入第二个字母";
                }
                break;
            case "t":
            case "T":
                if(e == "u"){
                    res = "Tuesday";
                }else if(e == "h"){
                    res ="Thursday";
                }else{
                    res = "请输入第二个字母";
                }
                break;
            default:
                res = "您搞错了";

        }

        h.innerHTML = res;
    }
```
## 7、将一个数组逆序输出。
```html
    <input type="text" name="" id="text">
    <input type="button" value="等级查询" id="button">
```
```js
     var text = document.getElementById("text");
    var btn = document.getElementById("button");
    var h = document.getElementById("h");
    btn.onclick = function () {
        var value = text.value;
        var num = value + "";
        var s = [] ;
        for(var i=value.length; i>0; i--){
            s += value[i-1];
        }
        h.innerHTML = s;
        console.log( s);
    }
```
```js
    var arr = [1,3,5];
        var tem = [];
        for(var i=arr.length; i>0; i--){
            tem.push(arr[i-1]);
        }
        console.log(tem);
```