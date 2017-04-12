# 修改时间的方式
    1. 在php.ini 文件中查找到date.time : date.timezone = "UTC"

        UTC 世界标准时间

        RPC 北京时间

    2.date_default_timezone_set("UTC")
#   获取时间戳的四中方式
        1.time();
        2.date();
        3.mktime(时，分， 秒 ，月， 日，年)
        4.strtotime();
