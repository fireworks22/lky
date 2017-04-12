<?php
/**
 * Created by PhpStorm.
 * User: lky
 * Date: 2017/2/22 0022
 * Time: 10:50
 */
    header("Content-type: text/html; charset=utf-8");
    //mysqli_set_charset($mysqli, "utf8");
    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "123456";
    const DB_NAME = "user";

    /*链接数据库
     * @return $mysqli mysqli对象
     *
     * */
   function content(){
       //实例化一个mysqli对象
       $mysqli = new mysqli();
       //链接数据库
       $link = $mysqli -> connect(HOST,USERNAME,PASSWORD,DB_NAME);
       $mysqli->set_charset("utf8");
       //判断数据库是否连接成功
       if($mysqli->errno){
           die( "数据库链接失败".$mysqli->error);
       }else{
           return $mysqli;
       }
   }
    /*查询数据
     * @param $mysqli mysqli对象
     * @return array 查询出来的数据
     *
     * */
    function queryData($mysqli){
        //查询t_comment表中的所有字段的SQL语句
        $sql = "select * from u_user";
        //执行SQL语句
        $res = $mysqli->query($sql);
        if($res && $res->num_rows>0){
            $rows=[];
            while($row = $res->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
    };