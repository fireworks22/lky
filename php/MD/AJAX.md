## GET与POST的区别
    GET:通过网站
        长度有限：4k~10k 容量小
        安全性差
        有缓存
        更适合获取数据
    POST:通过HTTP content
        容量相对比较大：2G
        安全性好一点
        没有缓存
        更适合上传数据
        安全性高的方式：走https
## GET
    GET能在浏览器地址栏看到请求的内容
    **.open("method","url",async)
    method: GET/POST
    url:请求的地址
    async：同步/异步(false/true)
## ajax
    1、创建对象
    if(window.XMLHTTPRequest){
        var xmlhttp = new XMLHTTPRequest();
    }else{
        var xmlhttp = new ActiveObject("Microsoft.XMLHTTP")
    2、
    xmlhttp.open("POST","url",true);
    3、发送请求
        xmlhttp.send();
    4、接受响应
        xmlhttp.onreadystatechange = function(){
            //查看解析是否完成
            if(xmlhttp.readyState == 4){
                //是否请求成功
                if(xmlhttp.states == 200){
                    console.log("OK");
                }
            }
        }