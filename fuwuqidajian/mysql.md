## mysql 搭建
### 下载mysqli
    地址：https://dev.mysql.com/downloads/mysql/
### 概念
    RDBMS  关系型数据库管理系统（Relational Database Management System）
### 导入SQL文件
    登录mysqli
    准备好SQL文件，记住地址
    source

### 安装
        打开mysql的安装目录（mysql-5.7.17-winx64），复制一份 my-default.ini
        并将其改名为my.ini 打开my.in文件修改如以下内容
```ini
    basedir = C:\wbroot\mysql-5.7.17-winx64
    datadir = C:\wbroot\mysql-5.7.17-winx64\data
    port = 3306
```
        注意：路径根据mysqli安装路径来决定
        退出 1 exit 2 /q
### 配置环境变量
        在系统属性中的 psth 中输入mysqli 安装的目录文件中bin的路径
        启动管理员 并输入 mysqld -install 成功后输入net start mysql
        显示启动成功。
### 安装mysqli
        1.打开mysqli 命令 net start mysql
        2.关闭mysqli 命令 net stop mysql
### 登录mysql
        1. mysqli -u root -p
        2.设置密码 mysqladmin -u root password "设置密码";
### mysql数据库相关操作
        1.查看数据库 show databases;
        2.创建一个数据库 create database 数据库名; 例create database book;
        3.删除一个数据库 drop database 数据库名;   例drop database book;
        4.使用数据库 use 数据库名  例use book;
### mysql数据表的相关操作
        1.创建表 create table book_version(
                        id int(11) primart key not null unique auto_increment comment "id",
                        name varchar(20));
        2.查看数据表 show tables;
        3.查看表的结构 desc 表名; 例desc book;
        4.查看表的详细信息 show create table 表名;
        5.查看表的信息（更容易查看） show create table 表名\G;
        补充：
            定义：主键：唯一标识一条记录，不能有重复的，不允许为空表的外键是另一表
            的主键
            外键：可以有重复的,可以是空值该字段没有重复值，但可以有一个空值
            作用：用来保证数据完整性用来和其他表建立联系用的是提高查询排序的
            速度
            个数：主键只能有一个，一个表可以有多个外键，一个表可以有多个惟一索引

```sql
    +-------+-------------+------+-----+---------+-------+
    | Field | Type        | Null | Key | Default | Extra |
    +-------+-------------+------+-----+---------+-------+
    | id    | int(11)     | YES  |     | NULL    |       |
    | name  | varchar(20) | YES  |     | NULL    |       |
    | sex   | char(1)     | YES  |     | NULL    |       |
    +-------+-------------+------+-----+---------+-------+
    Field :字段名
    Type ：类型
    Null：
    Key：
    Default：默认值
    Extra：附加信息
        ENGINE：存储引擎 支持的引擎Myisam， InnoDB， BDB， Merory， Archive
    CHARSET:设置字符集
```
### 修改数据库内字段的数据类型
    alter table 表名 modify 字段名 类型;
        例 alter table book_user modify `id` int(10);
### 增加一个字段
    alter table 表名 add 字段名 类型;
### 将id设置成主键
    alter table 表名 add primary key (id);
### 将id设置成唯一字段
    alter table 表名 add unique (id);
### 修改表名
    alter table 表名 rename 新表名;
### 删除主键
    alter table 表名 drop primary key;
### 删除字段
    alter table 表名 drop 字段名;
### 修改字段
    alter table 表名 change 字段名 新的字段名 类型;
### 删除表
    drop table 表名;
# 修改密码
    1. 在DOS窗口下输入net stop mysql
    2. 开一个DOS窗口，这个需要切换到mysql的bin目录

```sql
    mysqld --skip-grant-tables;
```

```text
    不要关闭窗口
    3. 再开一个DOS窗口，`mysql -u root`
    4. 输入
```

```sql
    use mysql
    update mysql.user set authentication_string=password('123qwe') where user='root' and Host = 'localhost';
    flush privileges;
    exit
```
        5 . 使用任务管理器，找到mysqld-nt的进程，结束进程
### 向表中插入数据
        INSERT INTO `user` (`Name`) VALUES("JACK");
        insert into 表名 (字段) values(数据)；
### 消除数据库表中重复的数据
        select distinct name from user; 或
        SELECT DISTINCT `name` FROM `user`
### from子句
        限定表名
            select `字段名` from 数据库名.表名
        非限定表名
            select `字段名` from 表名
### 查看表所有数据
        select*from 表名
### 修改表中的数据
        update `表名` set `字段`=25 Where `id`=2;
            例：update `user` set `age`=30 Where `id`=2;
        update `表名` set `字段`=25,`字段`=` ` Where `id`=2;
### 增加表中的数据
        update `表名` set `字段`=25
        或者
```sql
        INSERT INTO `Orders` (OrderDate,OrderPrice, Customer)
        VALUES
        	("2016/12/29", 1000, "Bush"),
        	("2016/12/23", 1600, "Carter"),
        	("2016/10/05", 700, "Bush"),
        	("2016/09/28", 300, "Bush"),
        	("2016/08/06", 2000, "Adams"),
        	("2016/07/21", 100, "Carter");
```
### 删除表中的数据
        delete from `user` where 字段=数据;
        删除表中的所有数据
            delete from `表名`;
### where子句
        操作符

|操作符|作用|
|----|----|
|=|等于|
|<> !=|不等于|
|>|大于|
|<|小于|
|>=|大于等于|
|<=|小于等于|
|between...and...|在什么之间|
|like|收索字符|
        例子： select *from 表名 where 字段名 between num and num;
              select *from user where age between 18 and 45;
### order by子句
    order by 字段名 asc|desc
    默认为升序，为asc；降序为desc；
    select*from Order order by orderdate
### 聚合函数
|函数|作用|
|----|----|
|Max|最大|
|Min|最小|
|Avg|平均数|
|Sum|求总和|
|Count|求总行数|
### 查询总数
       ·select count(*) from Order;

### limit
    ·select *from Order limit 10;
    ·select *from Order limit 2(从多少开始取), 10(在多少结束);
### 求平均数
    select C_name,avg(Grade) from Score group by C_name;
    select 字段,聚合函数(字段) from 表名 group by 字段;
    select C_name, avg(Grade) as avg_Grade from Score group by C_name having avg_Grade>90;
### in
    sleect * from 表名 where 字段 in (查询的对象, 查询的对象)

### 列类型
|类型|名称|字节|范围/注释|算法/参数的意义|
|----|----|----|----|----|
|整数|tinyint|1|-128~127|2^8=256|
|整数|smallint|2|-32786~32785|2^(2*8)=655|
|整数|mediumint|3|||
|整数|int|4|||
|整数|bigint|8|||
|浮点数|float(m,d)|4|4字节8位精度，|m表示总个数，d表示小数位|
|浮点数|double(m,d)|8|8字节16位精度||
|定点数|decimal(m,d)|16|m<65 是总个数 d<30 小数位 |d<m|
|字符串|char(n)||长度固定，最大255字符|n表示字符的个数|
|字符串|varchar(n)||长度可变，最多可有65535字符||
|字符串|text||长度可变，最多可有65535字符||
|字符串|tinytext||长度可变，最大255字符||
|字符串|mediumtext||长度可变，最多可有2^24 - 1个字符||
|字符串|longtext||长度可变，最多可有2^23 - 1个字符||
|日期|date||||
|日期时间|datetime||||
|时间|time||||
|自动存储记录修改时间|timestemp||存的是最后记录修改的时间<时间日期>||
#### 浮点数存放的值不精确，定点数存放的值是精确的值，一般用于银行账目计算。
### default 默认值
### varchar和char的区别：
            1. char(n)：如果存入的数据小于n，则其余部分使用空格填充，查询时在去掉空格。
            2.char(n)不管存了几个字符，都要占4个字节。
            3.varchar(n)：存入的数据小于255占（实际字符长度+1个字节），
              大于255占（实际字符长度+2个字节）。
            4.char类型索引时比varchar快。
### varchar和text的区别：
            1.varchar存入的是实际的字符+1（n<=255）或+2个字节（n>255），
              text是实际字符+2字节。
            2.text 不能有默认值。
            3.varchar可以直接创建索引，text创建索引要指定前多少个字符，
              varchar的索引速度比text块。
## 数据库的设计
### 数据库的范式
#### 目标
        1.减少数据的冗余
        2.消除异常
        3.让数据组织更加和谐
