<?php
require_once "model/model.php";
require_once "view/index.php";
class IndexController{
    function index($key){
        //访问model，将返回的数据给视图
        $model = new Model();
        $data = $model->getDate($key);
        //将从模型中返回的数据交个视图去显示
        $view = new Index();
        $view->display($data);
    }
}