<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/21 0021
 * Time: 8:57
 */

namespace app\admin\controller;


use think\Controller;

class Picture extends Controller
{
    public function picture_list(){
        return $this->fetch();
    }
    public function picture_add(){
        return $this->fetch();
    }
}
