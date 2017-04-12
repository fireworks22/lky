<?php

namespace app\admin\model;


use think\Model;

class Topic extends Model{

    protected $table = "bo_topic";
    public function getAllData(){
         return $this->all();
    }

    public function article_insert_data($post, $filepath){
        $data['topic_name'] = $post['topic_name'];
        $data['topic_desc'] = $post['topic_desc'];
        $data['topic_thumb'] = $filepath;
        $data['article_id'] = "";
        $data['create_time'] = time();
        return $this->insert($data);
    }


}