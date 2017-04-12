<?php
/**
 * Created by PhpStorm.
 * User: marmo
 * Date: 2017/3/24
 * Time: 15:40
 */

namespace app\index\controller;


use think\auth\Auth;
use think\Controller;

class Common extends Controller{
    public function _initialize(){
        $auth = new Auth();
        $auth->check();
    }
}