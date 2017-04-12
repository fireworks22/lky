## JQUERY转换成JavaScript对象（DOM）对象？
```js
var div = $("#div");// jquery对象[div#div,dfs]
//转换成DOM对象
div[index]//index指的是“数组”下的坐标
```
## DOM转换成JQuery对象？
```js
var div = document.getElementById("div");//dom对象
$(div);//将dom对象转换成jquery对象
```
## data
```html
<div id="box">
    <span data-index = "0001"></span>
</div>
<div></div>
```
```js
var span = $("span");
console.log(span);
 var s = span.data("index");
 alert(s);
```
## 选择器
    基本选择器
    关系选择器
    伪类选择器
    属性选择器
## window.onload 与$(document).ready()的区别
    window.onload ：需要页面中的DOM树、图片、音频、视屏等资源加载完成
    之后才允许允许javascript
    $(document).ready()：当DOM树加载完成之后就允许运行javascript代码了