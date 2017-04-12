<?php
namespace app\index\controller;

use think\Controller;
// use think\Db;
class Index extends Controller
{
    public function index()
    {
        /*$m = Db::table("thinkphp");
        $data = $m->select();
        print_r($data);*/
        return$this->fetch();
    }
    public function lists(){
        return$this->fetch();
    }
    public function xq(){
        return$this->fetch();
    }
}
