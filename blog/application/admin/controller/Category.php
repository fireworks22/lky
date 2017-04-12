<?php

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Category extends Common{

    public function category_list(){
        $this->header();
        return $this->fetch();
    }

    public function category_add(){
        $cate = new \app\admin\model\Category();
        $data = $cate->getAllData();
        //分配数据到模板
        $this->assign('data', $data);
        //加载模板
        return $this->fetch();
    }


    function category_insert(){
        /**
         * 1,2
         *
         */
        if($_POST['name'] != ""){
            $data['name'] = $_POST['name'];
            $data['pid'] = $_POST['pid'];
            $cate = Db::name('category');
            //根据pid获取父级的path
            if($_POST['pid'] == 0){ //一级目录
                $data['path'] = $_POST['pid'];
                $data['level'] = 1;
            }else{
                $path = $cate->field('path')->where('id', $_POST['pid'])->find();
                $data['path'] = $path["path"]; //后面还需根据id进行修改
                //根据path获取level（几级目录）
                $data['level'] = substr_count($path["path"], ",")+1;
            }

            //插入数据并返回id
            $id = $cate->insertGetId($data);
            if($id){
                //更新path
                if($_POST['pid'] == 0){
                    $data['path'] = '0,'.$id;
                }else{
                    $data['path'] = $path['path'].",".$id;
                }
                $res = $cate->where('id', $id)->update($data);
                if($res){
                    $this->success('数据插入成功', 'admin/category/category_add', 3);
                }else{
                    $this->error('数据插入失败', 'admin/category/category_add', 3);
                }
            }else{
                //失败
                $this->error('数据插入失败', 'admin/category/category_add', 3);
            }
        }else{
                $this->error('请输入分类名称', 'admin/category/category_add', 3);
        }
    }
    public function category_add_ajax(){
        
    }

    public function category_list_tree(){
        /**
         * Db:table($tableName): $tableName数据表的全称
         * Db:name($tableName): $tableName忽略数据库的前缀（前提是设置了前缀）
         */
//        Db:table("bo_category");
        $data = Db::name('category')->field('id,pid, name')->select();

        //将数据转换成json格式，并输出
        echo json_encode($data);
    }
    public function category_del_ajax(){

        if(isset($_GET['id'])){
            $res = Db::name('category')->where('id', $_GET['id'])->delete();
            echo $res;
        }

    }

}