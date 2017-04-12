<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/20 0020
 * Time: 13:31
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Category extends Controller
{
    public function product_category(){
        return$this->fetch();
    }
    public function product_category_add(){
        /**
         * mysql中的一个函数
         * concat('u', 'dsf')
         *
         * 链式操作(Jquery)
         */
        $cate = new \app\admin\model\Category();
        $data = $cate->getAllData();
        $this->assign('data', $data);
        //加载模板
        return$this->fetch();
    }
    function category_insert(){
        /**
         * 1,2
         *
         */
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
                $this->success('数据插入成功', 'admin/category/product_category_add', 3);
            }else{
                $this->error('数据插入失败', 'admin/category/product_category_add', 3);
            }
        }else{
            //失败
            $this->error('数据插入失败', 'admin/category/product_category_add', 3);
        }
    }
    public function category_list_tree(){
       $date = Db::name('category')->field('id,pid,name')->select();
       //将数据转换成json格式并输出
       echo json_encode($date);
    }
    public function category_del_ajax(){
        /**
         * Db::table("bo_category") 获取数据库的全称
         * Db::name("category")
         *
         */

       if(isset($_GET['id'])){
           $res = Db::name("category")->where('id',$_GET['id'])->delete();
           echo $res;
       }


    }
}