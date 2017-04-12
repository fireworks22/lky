<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/20 0020
 * Time: 17:17
 */

namespace app\admin\controller;


use think\Controller;

class Admin extends Controller
{
    public function admin_role(){
        return $this->fetch();
    }
    public function admin_role_add(){
        return $this->fetch();
    }
    public function admin_permission(){
        return $this->fetch();
    }
    public function admin_add(){
        return $this->fetch();
    }
    public function admin_permission_add(){
        return $this->fetch();
    }
    public function admin_list(){
        return $this->fetch();
    }
}