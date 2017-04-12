<?php
header("Content-type: text/html; charset = utf-8");
/*require_once "controller/controller.php";
$index = new IndexController();
$index->index("title");*/
/*$c = $_GET["c"];//控制器
$a = $_GET["a"];//操作
$param = $_GET["param"];//参数
$controller = "{$c}Controller"; //获取控制器的名字
$path = "controller/{$controller}.php";//引入控制器的路径
//echo $path;
require_once $path;
$cont = new $controller;//实例化控制器
$cont->$a($param);*/
$c = $_GET["c"]; //控制器
$a = $_GET["a"]; //操作
$param = $_GET["param"]; //参数


$controller = "{$c}Controller"; //控制器的名字 //IndexController
$path = "controller/{$controller}.php";//引入控制器的路径
//echo $path;
//controller/indexController.php

require_once $path; //引入控制器

$cont = new $controller; //实例化控制器

$cont->$a($param);