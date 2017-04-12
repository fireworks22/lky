<?php

namespace app\admin\controller;


use think\Controller;

class Category extends Controller{

    function category_list(){
        return $this->fetch();
    }

    /**
     * 查询所有的分类数据
     */
    function category_tree_ajax(){
        $cate = new \app\admin\model\Category();
        $data = $cate->field('id, pid, cate_name')->select();
        for($i=0; $i<count($data); $i++){
            $data[$i]["name"] =  $data[$i]["cate_name"];
        }
        echo json_encode($data);
    }

    /**
     * 通过ajax删除分类
     * @throws \think\Exception
     */
    function category_del_ajax(){
        $id = $_GET['id'];
        $msg = [
            "error"=>0,
            "msg"=>"删除分类成功"
        ];

        //查询该分类下是否还有子分类存在
        $data = db('category')->where('pid',"=", $id)->find();
        if($data){
            $msg["msg"] = "分类下面存在子分类，不允许删除";
        }else{
            $res = db('category')->where("id", $id)->delete();
            if(!$res){
                $msg["msg"] = "分类删除失败";
            }
        }
        echo json_encode($msg);
    }

    /**
     * 添加分类
     * @return mixed
     */
    function category_add(){
        $cate = new \app\admin\model\Category();
        $data = $cate->getAllFormatData();
        $this->assign('data', $data);
        return $this->fetch();
    }

    /**
     * 添加分类到数据库
     */
    function category_add_real(){
        $data['cate_name'] = $_POST["name"];
        $data['pid'] = $_POST["pid"];
        if($data['cate_name'] != ""){
            $cate = new \app\admin\model\Category();


            if($data['pid'] == 0 ){
                $data['level'] = 1;
                $data['path'] = "0"; //后面会更改掉
            }else{
                $path = $cate->field('path')->find($data['pid']);
                $data['path'] = $path["path"]; //后面会更改掉
                $data['level'] = substr_count($path, ',')+1;
            }
            //插入数据并获取id
            $id = $cate->insertGetId($data);
            if($id){
                $data['path'] = $data["path"].','.$id;
                $res = $cate->where('id', $id)->update(['path'=>$data['path']]);
                if($res){
                    $this->success("添加分类成功", 'admin/category/category_add');
                }else{
                    $this->error("添加分类失败", 'admin/category/category_add');
                }

            }else{
                    $this->error("添加分类失败", 'admin/category/category_add');
            }
        }else{
            $this->error("请填写分类名称", 'admin/category/category_add');
        }
    }
}