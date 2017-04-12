## query()
        失败时返回 FALSE，通过mysqli_query() 成功执
        行SELECT, SHOW, DESCRIBE或 EXPLAIN查询会返回
        一个mysqli_result 对象，其他查询则返回TRUE。
## 改
    $sql = "delete from u_user where id=6";
## 删
    $sql = "delete from u_user where id=6";
## 查
#### 1
    echo  $res->num_rows;
#### 2.0 fetch_all() 取出结果集中的所有数据，默认返回一个二维索引数组
    print_r($res->fetch_all());
```php
if($res && $res->num_rows>0){
    $rows = [];
    while ($row = $res->fetch_assoc()){
        $rows[] = $row;
    }
}
print_r($rows);

```
#### 2.1 fetch_all(MYSQLI_NUM) 返回索引数组
    print_r($res->fetch_all(MYSQLI_NUM));
#### 2.2 fetch_all(MYSQLI_ASSOC) 返回关联数组
    print_r($res->fetch_all(MYSQLI_ASSOC));
#### 2.3 fetch_all(MYSQLI_BOTH) 返回关联+索引数组
    print_r($res->fetch_all(MYSQLI_BOTH));
#### 3 fetch_array() 取出结果集中的一条数据，默认返回索引+关联数组
#### 4 fetch_row()  取出结果集中的一条数据,返回的是索引数组
#### 5 fetch_object() 从结果集中取出一行作为对象
#### 6 fetch_assoc() 从结果集中取出一条数据作为关联数组
#### 1 use_results() 从多个结果集中获取更多的结果集数据
#### 2 more_results() 检查是否有更多的结果集
#### 3 next_result() 将结果集指针向下移动一位
## PDO
### PDO 全称为php data object，数据库访问抽象层，统一各种数据库的访问接口
### PDO的特性
        1.编码一致性
        2.灵活性
        3.高能性
        4.面向对象特性
##  SESSION 和 COOKIE的区别
        两个都可以用来存私密的东西，同样也都有有效期的说法。
        区别在于。
        session是放在服务器上的，过期与否取决于服务期的设定，cookie是存在客户端的，过去与否可以在cookie生成的时候设置进去。
        1、cookie数据存放在客户的浏览器上，
        session数据放在服务器上
        2、cookie不是很安全，别人可以分析存放在本地的COOKIE并进行COOKIE欺骗
        考虑到安全应当使用session
        3、session会在一定时间内保存在服务器上。当访问增多，会比较占用你服务器的性能
        考虑到减轻服务器性能方面，应当使用COOKIE
        4、单个cookie在客户端的限制是3K，就是说一个站点在客户端存放的COOKIE不能3K。
        5、300个的限制我没听说
        6、所以个人建议：
        将登陆信息等重要信息存放为SESSION
        其他信息如果需要保留，可以放在COOKIE中
