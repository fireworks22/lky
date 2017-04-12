<?php

require_once "model/model.php";
require_once "view/Index.php";
class IndexController{
    function index($key){
        //访问我们的model，将返回的数据给视图
        $model = new model();
        $data =  $model->getDate($key);
        //将从模型中返回的数据交给视图去显示
        $view = new Index();
        $view->display($data);
    }
}