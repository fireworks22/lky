<?php

namespace app\admin\controller;


use app\admin\model\Category;
use think\Controller;
use think\Db;

class Article extends Common{

    private $msg = [
        "error"=>0,
        "msg"=>"删除文章成功"
    ];
    /**
     * 文章列表-分配模板
     * @return mixed
     */
    public function article_list(){
        $this->header();
        // 获取分类数据
        $cate = new Category();
        $da = $cate->getAllFormatData();

        //获取文章的总数
        $article = Db::name('article');
        $count = $article->count();
        //搜索
        if((isset($_GET['cate_id']) && $_GET['cate_id']!=0) || (isset($_GET['keyword']) && $_GET['keyword']!="")){
            $data = $this->article_search();
            $this->assign('cate_select',$_GET['cate_id']);

        }else{
            //查询分页数据
            $data = $article->alias('a')
                ->join('bo_category cate','a.cate_id=cate.id')
                ->field('a.id, a.title,a.cate_id, a.cate_path,cate.cate_name, a.isTop, a.isCommend,a.isHot,a.tags,a.isRelease,a.create_time,a.publish_time')
                ->paginate(7);
            $this->assign('cate_select',0);
        }
//        $data = $this->

        $data->render();


        $this->assign('data', $data);
        $this->assign('ca', $da);
        $this->assign('count', $count);
        return $this->fetch();
    }
    function article_search(){
        if(isset($_GET['cate_id'])){
            $map['cate_id'] = $_GET['cate_id'];
        }

        if(isset($_GET['keyword'])){
            $map['title'] = array('like', '%'.$_GET['keyword'].'%');
        }

        $article = Db::name('article');
        $data = $article->alias('a')
            ->join('bo_category cate','a.cate_id=cate.id')
            ->field('a.id, a.title,a.cate_id, a.cate_path,cate.cate_name, a.isTop, a.isCommend,a.isHot,a.tags,a.isRelease,a.create_time,a.publish_time')
            ->where($map)
            ->paginate(7);


        print_r($data);
        return $data;
    }
    /*
     * 添加文章
     */
    public function article_add(){
        $cate = new \app\admin\model\Category();
        $data = $cate->getAllFormatData();
        $this->assign('data', $data);
        return $this->fetch();
    }

    /**
     * 向表中插入数据
     */
    public function article_insert(){
        $filename = $this->article_upload_thumb();
        if($filename){
            $cate = new \app\admin\model\Category();

            $path = $cate->field('path')->where('id', $_POST['cate_id'])->find();


            $article = new \app\admin\model\Article();


            $res = $article->insertData($_POST, $path["path"], $filename);
            if($res){
                $this->success("文章添加成功", "admin/article/article_list", 3);
            }else{
                $this->error("文章添加失败", "admin/article/article_list", 3);
            }
        }else{
            $this->error("上传封面失败", "admin/article/article_list", 3);
        }

    }


    /** 编辑文章
     * @param $id 文章的id
     * @return mixed
     */
    public function article_edit($id){
        $cate = new \app\admin\model\Category();
        $data = Db::name('article')->find($id);
        $category = $cate->getAllFormatData();
        $this->assign('cate', $category);
        $this->assign('data', $data);
        return $this->fetch();
    }

    /**
     * 将编辑后的文章保存到数据库
     */
    public function article_edit_update(){
        /**
         * 1. 查询图片是否被更改（根据查询图片地址与提交过来的地址进行对比）
         */

        if($_POST['file_name']){
            $ipath = Db::name("article")
                ->field('imgpath')
                ->where("id", $_POST["id"])
                ->select();
//            print_r($ipath[0]['imgpath']);
            if($ipath[0]['imgpath'] == $_POST['file_name']){
                //图片没有被更改
                $this->upload_article($_POST['id'], $_POST["imgpath"]);
            }else{
                //图片已经被更改了
                $filename = $this->article_upload_thumb();
                if($filename){
                    $this->upload_article($_POST['id'], $filename);
                }
            }
        }

    }

    /** 更新文章
     * @param $id
     * @param $img
     */
    private function upload_article($id, $img){

        $cate = new \app\admin\model\Category();

        $path = $cate->field('path')->where('id', $id)->find();
        $article = new \app\admin\model\Article();
        $res = $article->updateData($_POST, $path["path"], $img);
        if($res){
            $this->success("文章修改成功", 'admin/article/article_list');
        }else{
            $this->success("文章修改失败", 'admin/article/article_list');
        }
    }

    /**
     * ajax方式删除数据
     */
    public function article_del_ajax(){
        $article = new \app\admin\model\Article();
        $res = $article->deleteData($_POST['id']);

        if(!$res){
            $this->msg['error'] = 1;
            $this->msg['msg'] = "删除分类失败";
        }

        echo json_encode($this->msg);
    }

    /**
     * 上传图片
     * @return int
     */
    public function article_upload_thumb(){
        $file = request()->file('file');
        $info = $file->move(UPLOADS."/article");
        if($info){
            return $info->getSaveName();
        }else{
            return 0;
        }
    }

    /**
     * 按关键字查找
     */
    public function article_search_keyword($keyword){
        if($keyword){

        }
    }


}