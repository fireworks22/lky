## php入门
    php是一种服务器端脚本编程语言。
    官方名称 早先persen Home page 个人主页
            现在php 超文本预处理器
    php这门编程语言（系统）是由c语言开发的。
    类c语言：
            1.由c语言开发
            2.语法风格与c语言相似
    php的编程范式：
                1.面向过程
                2.面向对象
    php真正意义上支持面向对象是从5.0大改版开始
    LAMP体系（Xampp、 Wamp、 phpStudy）
    开发环境：php-study（web开发/运行环境集成软件包）
                    |-- http server （apache、 naginx、 iis）
                    |-- script engine（php）
                    |-- DBMS（mysql）
    互联网Internet（广域网）
    IP协议 -> 互联网协议  （I -> Internet P -> protocol）
    IP地址和IP端口
        http server 超文本传输协议服务（器），这个服务器可以让可相连的
    电脑通过域名、IP、端口从HTTP服务器上获得静态网页！
    长链接：socket -> 套接字
    http超文本传输协议：
        使用tcp/IP协议作为作为基础协议进行网页传输的互联网协议。
        无状态/短链接：请求/响应
        打开网页过程中所经过的步骤：
                1.输入浏览器的域名 => DNS（Domain Name SERVER）
            域名服务器解析 => 获取到IP地址 => 根据IP地址访问互联
            网/局域网中的服务器。以上的访问实际上就是对服务器网页资
            源的请求。
                2.服务器（HTTP Server）获得这个请求后，对其用户的
            请求进行相应的处理，然后对其请求进行响应
                3.响应结果以网页或者其他资源形式返回给客户端（用户代
            理 -> 通指浏览器）。
    在heml中镶嵌php <!-- <?php ?> --> 代码的写法叫多页面写法
    多页面php 快速 效率高。
    逻辑代码和 耦合
    php中注释有：单行注释， 多行注释， #号注释，三种方式
    php的运行机制：用户代理-->请求（超文本）URL--> HTTP服务器（域名：ip/端口）-->由
                dns解析域名成IP--> 静态网页直接由http服务器处理，并以响应的方式将静
                态网页数据返回给用户代理--> 动态网页，譬如说php，则由http服务器代用
                php引擎进行处理，并以响应的方式将处理后的网页变成静态网页数据返回给用
                户代理；
## php字符串常用处理函数
        字符串修剪函数：
            剪裁函数：
                trim();
                rtrim();
                ltrim()
            填充及换行：
                pad_string();
                nl2br();
            大小写转换：
                strtoupper();
                strtolower();
                ucfirst();
                ucwords();
                lcfirst()
            反斜杠处理：
                addslashes();
                stripslashes()
            特殊字符处理:
                htmlspecialchars();
                strip_tags()
            字符串格式化处理:
                sprintf();
                printf()
        字符串长度函数:
            strlen();
            mb_strlen()
        子字符串操作函数:
            取出指定位置的子字符串:
                substr();
                mb_substr();
                mb_strcut()
            查找指定子字符串位置:
                strpos();
                strrpos();
                mb_strpos();
                mb_strrpos()
            取出指定字符串子串的剩余字符串:
                strstr();
                stristr()
            计算字符串出现的次数:
                substr_count();
                mb_substr_count()
        字符串比较函数:
            strcmp();
            strcasecmp()
        字符串链接和分割函数:
            implode();
            strtok()
        字符串替换函数:
            str_replace();
            substr_replace();
            strtr()
        URL处理函数:
            解析url字符串:
                parse_url();
                parse_str()
            url转义处理:
                urlencode();
                urldecode();
                rawurlencode();
                rawurldecode()
            构造查询字符串:
                http_build_query()
        其他字符串常用函数:
            strrev();
            str_repeat();
            mb_convert_encoding()
