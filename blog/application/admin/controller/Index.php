<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Common
{
    public function index(){
        $this->header();
        return $this->fetch();
    }
}
