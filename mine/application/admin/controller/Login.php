<?php

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Login extends Controller
{

    function login(){
        return $this->fetch();
    }

    public function login_verify(){
        $map['username'] = $_POST["username"];
        $map['password'] = md5($_POST['password']);

        $member =  Db::name('member');
        $res = $member->where($map)->select();
        if($res){
//            print_r($res);
            session("user", $res[0]);
            return $this->success("登录成功", "admin/index/index", 3);
        }else{
            return $this->error("登录失败", "admin/login/login", 3);
        }
    }
}