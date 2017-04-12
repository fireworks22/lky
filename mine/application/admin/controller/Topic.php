<?php

namespace app\admin\controller;


use app\admin\model\Category;
use think\Controller;
use think\Db;

class Topic extends Controller{

    private $msg = [
        "error"=>0,
        "msg"=>"图片上传成功"
    ];
    public function topic_list(){
        $topic = new \app\admin\model\Topic();
        $data = $topic->getAllData();

        foreach($data as $key=>$value){
            $dArr = explode(",", $value['article_id']);
            $data[$key]["count"] = count($dArr);
        }
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function topic_add(){
        return $this->fetch();
    }

    /**
     * 向数据库中插入数据
     */
    public function topic_insert(){
//        print_r($_POST);
        $file = request()->file('file');
//        print_r($file);
        if($file){
            $info = $file->move(UPLOADS.'/topic');
            if($info){
                $topic = new \app\admin\model\Topic();
                $res = $topic->article_insert_data($_POST,  $info->getSaveName());

                if($res){
                    $this->error("专题添加成功", 'admin/topic/topic_list', 3);
                }
            }else{
                $this->error($file->getError(), 'admin/topic/topic_list', 3);
            }
        }

    }


    /**
     * 编辑专题
     * @param $id
     * @return mixed
     */
    public function topic_edit($id){
        $topic = new \app\admin\model\Topic();
        $data = $topic->where('id', $id)->find();
        $this->assign('data', $data);
        return $this->fetch();
    }

    /**
     * 执行修改操作
     */
    function topic_modify(){
        $topic = new \app\admin\model\Topic();
        $data = $topic->field('topic_thumb')->where('id', $_POST['id'])->select();

        if($_POST['topic_thumb'] == $data[0]['topic_thumb']){
            //封面没有做任何修改
            $to['topic_name'] = $_POST['topic_name'];
            $to['topic_thumb'] = $_POST['topic_thumb'];
            $to['topic_desc'] = $_POST['topic_desc'];
            $res = $topic->where('id', $_POST['id'])->update($to);
            if($res){
                $this->success("修改成功", 'admin/topic/topic_list', 3);
            }else{
                $this->error("修改失败", 'admin/topic/topic_list', 3);
            }
        }else{
            //上传图片成功后载走修改
            $filename = $this->article_upload_thumb();
            if($filename){
                $topic = new \app\admin\model\Topic();
                $d['topic_name'] = $_POST['topic_name'];
                $d['topic_desc'] = $_POST['topic_desc'];
                $d['topic_thumb'] = $filename;
                $res = $topic->where('id', $_POST['id'])->update($d);
                if($res){
                    $this->success("专题编辑成功", 'admin/topic/topic_list', 3);
                }else{
                    $this->error("专题编辑失败", 'admin/topic/topic_list', 3);
                }
            }
        }
    }

    /**
     * 向专题添加文章
     */
    public function add_article_to_topic(){

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
            echo "er";
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

        return $this->fetch('topic/add_article');
    }

    public function insert_article_to_data(){

    }
    /**
     * 公共的
     * @return int
     */
    public function article_upload_thumb(){
        $file = request()->file('file');
        $info = $file->move(UPLOADS.'/topic');
        if($info){
            return $info->getSaveName();
        }else{
            return 0;
        }
    }

}