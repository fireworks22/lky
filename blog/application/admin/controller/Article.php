<?php
namespace app\admin\controller;

use app\admin\model\Category;
use think\Controller;
use think\Db;

class Article extends Common{
    function article_list(){
        $this->header();
        /*echo request()->controller();
        echo request()->action();*/
        //查询分类
        $cate = new Category();
        $cateD =  $cate->getAllData();

        //查询总数
        $article = Db::name('article');
        $count = $article->field('count(*) as count')->select();
        if((isset($_GET['pid']) && $_GET['cate_id']!=0) || (isset($_GET['keyword']) && $_GET['keyword']!="")){
            $data = $this->article_search($_GET, $article);
        }else{
            //查询列表数据
            $data = $article
                ->alias('a')
                ->field('a.id, a.title,a.create_time,a.author,c.name')
                ->join('bo_category c', 'a.cate_id=c.id')
                ->paginate(3);
        }

        $page = $data->render();

        //将分类信息分配到模板
        $this->assign('cateD', $cateD);
        $this->assign('data', $data);
        $this->assign('count', $count[0]['count']);
        $this->assign('page', $page);
        return $this->fetch();
    }

    function article_search($get, $article){
        $map['cate_id'] = $get['pid'];
        if(!empty($get['keyword'])){
            $map['title'] = array('like', "%{$get['keyword']}%");
        }

//        print_r($map);
        $data = $article
            ->alias('a')
            ->field('a.id, a.title,a.create_time,a.author,c.name')
            ->join('bo_category c', 'a.cate_id=c.id')
            ->where($map)
            ->paginate(3);
//        print_r($data);
        return $data;
    }
    function article_add(){
        $cate = new Category();
        $data =  $cate->getAllData();
        $this->assign('data', $data);
        return $this->fetch();

    }
    function article_save(){
//        print_r($_POST);exit;
        //$_POST
        $article = Db::name('article');
       $data = $this->formatPostData($_POST);
            if($data){
                $res = $article->insert($data);
                if($res){
                    $this->success("添加文章成功", 'admin/article/article_list', 3);
                }else{
                    $this->error("添加文章失败", 'admin/article/article_list', 3);
                }
        }else{
            $this->error("请输入文章内容", 'admin/article/article_list', 3);
        }
    }
    function formatPostData($post){
        $data = [];
        if(isset($post['content'])){
            if(!empty($post['file_name'])){
                $file = request()->file('file');
                if($file){
                    $info = $file->move(UPLOADS.'/article');
                    $data['imgpath'] = $info->getSaveName();
                }
            }
            $data['title'] = $post['title'];
            $data['cate_id'] = $post['cate_id'];
            $data['abstract'] = $post['abstract'];
            $data['author'] = $post['author'];

            if(isset($post['isHot'])){
                $data['isHot'] = 1;
            }
            if(isset($post['isCommend'])){
                $data['isCommend'] = 1;
            }
            if(isset($post['isTop'])){
                $data['isTop'] = 1;
            }
            $data['create_time'] = time();
            $data['publish_time'] = time();
            $data['content'] = $post['content'];
            return $data;
        }else{
            return 0;
        }
    }
    function article_edit($id){
        $article  = Db::name('article')->where('id', $id)->select();

        $cate = new Category();
        $data = $cate->getAllData();
        $this->assign("data", $data);
        print_r($article);
        $this->assign("article", $article[0]);
        return $this->fetch();
    }

    function article_update(){
        $data = $_POST;

        Db:name('article')->where('id', $_POST['id'])->update($data);
    }

    function article_del_ajax(){
        /**
         * php中，将数据转换成json：json_encode()
         * json转换成数组：json_decode()
         */
        $id = $_GET["id"];
        $res = Db::name("article")->where('id', $id)->delete();
        if($res){
            echo $res;
        }else{
            echo 0;
        }
    }


}