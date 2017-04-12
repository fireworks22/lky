<?php
namespace app\admin\model;
use think\Model;

class Category extends Model{
    function getAllData(){
        $data = $this->field("*, concat(path, id) as paths")
            ->order('paths desc')
            ->select();
        foreach($data as $key=>$value){
            $data[$key]['name'] = str_repeat("┣━━━", $value['level']-1).$value['name'];
        }

        return $data;
    }
}