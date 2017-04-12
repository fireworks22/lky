<?php


namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\Validate;

class Permission extends Common{

    /**
     * 管理员列表
     * @return mixed
     */
    public function admin_list(){
        $this->header();
        $data = Db::name('member')
            ->alias('m')
            ->join('bo_auth_group g', 'm.group_id = g.id')
            ->field('m.id, m.username, g.title')
            ->select();
        print_r($data);
        $this->assign('data', $data);
        return $this->fetch();
    }

    /**
     * 添加管理员
     * @return mixed
     */
    public function admin_add(){
        $member = Db::name('auth_group');
        $data = $member->select();
        print_r($data);
        $this->assign("data", $data);
        return $this->fetch();
    }

    public function admin_add_save(){
        $validate = new Validate([
            'username'=>'require',
            'password'=>'require',
            'password_confirm'=>'require|confirm:password'
        ]);
        $d = [
            'username'=>$_POST['username'],
            'password'=>$_POST['password'],
            'password_confirm'=>$_POST['password_confirm']
        ];
        //验证用户名和密码
       if($validate->check($d)){
           $member = Db::name('member');
           //检查用户名是否重复
           $name = $member->where('username', $_POST['username'])->select();
           $s = $member->getLastSql();
           echo $s;
           if(!$name){
                $data['username'] = $_POST['username'];
                $data['password'] = md5($_POST['password']);
                $data['group_id'] = $_POST['group_id'];

                $res = $member->insertGetId($data);

                //向auth_group_access插入数据

                $group['group_id'] = $_POST['group_id'];
                $group['uid'] = $res;

                $res2 = Db::name('auth_group_access')->insertGetId($group);
                echo $res, $res2;
            }else{
                $this->error("用户名已经存在");
            }
       }else{
          dump($validate->getError());
       }

    }
    /**
     * 编辑管理员
     * @return mixed
     */
    public function admin_edit(){
        return $this->fetch();
    }

    /**
     * 角色列表
     * @return mixed
     */
    public function admin_role(){
        $this->header();
        $data = Db::name('auth_group')->where('status=1')->select();
        $this->assign("data", $data);
        return $this->fetch();
    }

    /*
     * 添加角色
     */
    public function admin_role_add(){
        /**
         * 获取所有的规则（权限）
         */
        $data = Db::name('auth_rule')->where("status=1")->select();
        $this->assign("data", $data);
        return $this->fetch();
    }

    /**
     * 保存角色
     */
    public function admin_role_save(){
        print_r($_POST);
        if(!empty($_POST['title']) && isset($_POST['rules'])){
            $data['title'] = $_POST['title'];
            $str = "";
            foreach($_POST['rules'] as $k=>$rule){
                $str .= $rule.",";
            }
            $str = substr($str, 0, strlen($str)-1);
            echo $str;
            $data['rules'] = $str;
            $res = Db::name('auth_group')->insertGetId($data);
            if($res){
                $this->success("添加角色成功");
            }else{
                $this->error("角色添加失败");
            }
        }else{
            $this->error("请书写标题或者选择权限");
        }
    }

    /**
     * 编辑角色
     * @return mixed
     */
    public function admin_role_edit(){
        return $this->fetch();
    }

    /**
     * 权限列表
     * @return mixed
     */
    public function admin_permission(){
        $this->header();
        $rule = Db::name('auth_rule');
        $data = $rule->where('status=1')->select();
        $this->assign("data", $data);
        return $this->fetch();
    }

    /**
     * 添加权限
     * @return mixed
     */
    public function admin_permission_add(){
        return $this->fetch();
    }

    /**
     * 添加权限到数据库
     */
    public function admin_permission_save(){
            if(!empty($_POST["title"]) && !empty($_POST['name'])){
                $id = Db::name('auth_rule')->insertGetId($_POST);
                if($id){
                    $this->success("添加成功");
                }else{
                    $this->error("添加失败");
                }
            }else{
                $this->error("请填写节点标题或节点URL");
            }
//        return $this->fetch();
    }

    public function admin_permission_edit(){
        return $this->fetch();
    }
}