<?php

namespace app\admin\controller;



use think\auth\Auth;
use think\Controller;
use think\Db;
use think\Session;

class Common extends Controller{
    /**
     * 默认的方法自动执行
     */

    public function _initialize(){
        if(isset(session('user')['id'])){
            $uid = session('user')['id'];
            $auth = new Auth();

            $action = request()->action();
            $controller = request()->controller();
            echo $action, $controller;
            if(!$auth->check($controller.'/'.$action, $uid)){
                $this->error("您没有权限访问", "admin/index/index");
            }
        }else{
            $this->error("没有登录", "admin/login/login");
        }


       /* $uid = session('user')['id'];

        if(empty($uid)){
            $this->error("您还没有登录","admin/login/login", 3);
        }

        $auth = new Auth();
//// MODULE_NAME(index).'/'.CONTROLLER_NAME(index).'/'.ACTION_NAME(index)==index/index/index
        if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('user')['id'])){

        }*/


    }

    protected function header(){
        $uid = session('user')['id'];
        echo $uid;
        $data = Db::name('member')
            ->alias('m')
            ->join('bo_auth_group g', 'm.group_id = g.id')
            ->field('m.id, m.username, g.title')
            ->where('m.id', $uid)
            ->select();
       if($data){
            $this->assign('user', $data[0]);
       }else{
           $data = [
               'title'=>"cesjo",
               'username'=>"cesjo"
           ];
           $this->assign("user", $data);
       }
    }

    public function logout(){
        $res = Session::pull('user');
        if($res){
            $this->success("退出登录成功", 'admin/login/login');
        }else{
            $this->success("退出失败", 'index/index/index');
        }
    }
}