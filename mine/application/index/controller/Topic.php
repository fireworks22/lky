<?php
/**
 * Created by PhpStorm.
 * User: marmo
 * Date: 2017/3/23
 * Time: 13:58
 */

namespace app\index\controller;


use think\Controller;

class Topic extends Controller{
    public function topic_list(){
        return $this->fetch();
    }
}