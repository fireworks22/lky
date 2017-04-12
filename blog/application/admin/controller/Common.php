<?php
/**
 * Created by PhpStorm.
 * User: marmo
 * Date: 2017/3/27
 * Time: 11:16
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\Session;

class Common extends Controller
{
    protected function header(){
       $user = Db::name('user');
        //判断session是否存在
        if(Session::has('user')){
            //获取存在session中的id
            $uid = Session::get('user')['id'];

            //根据id查询数据
            $res = $user->where('id', $uid)->select();
            if($res){
//                print_r($res);
                //将数据分配到模板
                $this->assign('user', $res[0]);
            }
        }else{
            $this->error("你还没登录呢！", 'admin/login/index');
        }
    }

    public function logout(){
        $res = Session::pull('user');
        if($res){
             $this->success("退出登录成功", 'admin/login/index');
        }else{
             $this->error("退出登录失败");
        }
    }
}