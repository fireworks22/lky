<?php
/**
 * Created by PhpStorm.
 * User: marmo
 * Date: 2017/3/24
 * Time: 14:49
 */

namespace app\admin\controller;


use think\auth\Auth;
use think\Controller;

class Base extends Controller{

    public function _initialize(){
        new Auth();
    }
}