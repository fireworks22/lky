<?php

namespace app\admin\model;


use think\Model;

class Category extends Model{
    function getAllFormatData(){
        $data = $this->field("*, CONCAT(path, id) as paths")->order('paths desc')->select();
        foreach($data as $key=>$val){
            if($val['level'] != 0){
                $val['cate_name'] = str_repeat("┣━━", $val['level']-1).$val["cate_name"];
            }
        }
        return $data;
    }
}