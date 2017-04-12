function ajax(url, fnS, fnF){
    // 1. 创建Ajax对象
    if(window.XMLHttpRequest){
        var ajax = new XMLHttpRequest();
    }else{//非IE6
        var ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }

    //2. 连接服务器（打开与服务器的连接）
    // 方法 文件名 是否异步
    /**
     * ajax天生就是异步操作的
     * 同步：一件一件来
     * 异步：多件事一起
     */
    ajax.open("GET", url, true);

    //3. 发送
    ajax.send();

    //4. 接受
    ajax.onreadystatechange = function(){
        /**
         * 0 未初始化，还没有调用open
         * 1 载入，已经调用send方法，正在发送请求
         * 2 载入完成，send已经完成，已接受到全部响应内容
         * 3 解析，正在解析响应内容
         * 4 完成，响应内容解析完成，可以在客户端调用了
         */
        if(ajax.readyState == 4){ //浏览器与服务器进行到哪一步 4表示整个过程已经完成
            if(ajax.status == 200){
                fnS(ajax.readAsText);
                //console.log("成功了", ajax.readAsText);
            }else{
                if(fnF){
                    fnF(ajax.status);
                }
            }
        }
    }
}