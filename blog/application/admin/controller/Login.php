<?php

namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller{
    public function index(){
        return $this->fetch();
    }

    public function login_verify(){
        $user = Db::name('user');
        $map['username'] = $_POST['username'];
        $map['password'] = md5($_POST['password']);

        $res = $user->where($map)->select();
        if($res){
//            print_r($res);
            Session::set('user', $res[0]);
            $this->success("登录成功", 'admin/index/index');
        }else{
            $this->error("登录失败", 'admin/login/index');
        }
    }
}