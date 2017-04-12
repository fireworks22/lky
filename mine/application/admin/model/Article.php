<?php
/**
 * Created by PhpStorm.
 * User: marmo
 * Date: 2017/3/19
 * Time: 19:31
 */

namespace app\admin\model;


use think\Model;

class Article extends Model{
    /**
     * 插入数据
     * @param $post 提交的POST数据
     * @param $path 分类的路径
     * @param int $isRelease 是否发布
     * @return int|string
     */
    function insertData($post, $path, $filename, $isRelease = 1){
        $data = $this->getPostData($post, $path,$filename, $isRelease);
        return $this->insert($data);
    }

    /**
     * 更新数据
     * @param $post
     * @param $path
     * @param int $isRelease
     * @return $this
     */
    function updateData($post, $path,$filename, $isRelease = 1){
//        print_r($post);
        $data = $this->getPostData($post, $path,$filename, $isRelease);
        return $this->where('id', $post['id'])->update($data);
    }

    function deleteData($id){
        return $this->where('id', $id)->delete();
    }
    /**
     * 格式化post传过来的数据
     * @param $post 提交的POST数据
     * @param $path 分类的路径
     * @param int $isRelease 是否发布
     * @return mixed
     */
    private function getPostData($post, $path, $filename, $isRelease = 0){
        $data['title'] = $post["title"];
        $data['cate_id'] = $post["cate_id"];
        $data['cate_path'] = $path;
        if(isset($post["isTop"]) && $post["isTop"] == 'on'){
            $data['isTop'] = 1;
        }
        if(isset($post["isHot"]) && $post["isHot"] == 'on'){
            $data['isHot'] = 1;
        }
        if(isset($post["isCommend"]) && $post["isCommend"] == 'on'){
            $data['isCommend'] = 1;
        }
        $data['isRecycle'] = 0;
        $data['isRelease'] = $isRelease;
        $data['tags'] = $post["tags"];
        $data['imgpath'] = $filename;
        $data['content'] = $post["content"];
        $data['create_time'] = date('Y-m-d H:i:s');
        $data['publish_time'] = date('Y-m-d H:i:s');

        return $data;
    }
}