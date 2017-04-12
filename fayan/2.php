<?php


class StringUtils{
    private  $url = "<a href=''>请重新注册</a>";
    private $arr = array(
        "error"=> 0,
        "msg"=>""
    );
    /**
     * 检测用户名是否合法
     * @param $username
     * @return string
     */
    function checkUsername($username){

        //1. 首字母大写
        $char = $username{0}; //补充strsub()
        /**
         * 首先获取ASCII码，然后进行对比(65~98)(A-Z)或(97~122)(a~z)
         */
        $ascii = ord($char); //补充chr

        if(!(($ascii>=65&&$ascii<=98) || ($ascii>=97&&$ascii<=122))){
            $this->arr["msg"] = "用户名首字母不是字母{$this->url}";
            $this->arr["error"] = 1;
        }else{
            //2. 6-10位
            $len = strlen($username);
            if(!($len>=6 && $len<=10)){
                $this->arr["msg"] = "用户名的长度不符合规范{$this->url}";
                $this->arr["error"] = 1;
            }
        }

        return json_encode($this->arr);
    }

    /**
     * 检查密码是否符合规范
     * @param $pwd
     * @param $pwd1
     * @return string
     */
    public function checkPWD($pwd, $pwd1){
        $len = strlen($pwd);
        //密码不能为空
        if($len == 0){
            $this->arr["msg"] = "密码不能为空{$this->url}";
            $this->arr["error"] = 1;
        }else{
            //密码的长度
            if($pwd<6|| $pwd>10){
                $this->arr["msg"] = "密码长度不符合规范{$this->url}";
                $this->arr["error"] = 1;
            }else{
                /**
                 * 补充：strcmp()
                 */
                if($pwd !== $pwd1){
                    $this->arr["msg"] = "两次密码不一致{$this->url}";
                    $this->arr["error"] = 1;
                }
            }
        }

        return json_encode($this->arr);
    }

    /**
     * 检查用邮箱
     * @param $email
     * @return string
     */
    public function checkEmail($email){
        /**
         * strpos(): 查找字符串首次出现的位置
         * stripos(): 忽略大小写
         * strrpos(): 倒序查找
         */
        if(strpos($email, '@') == false){
            $this->arr["msg"] = "非法邮箱{$this->url}";
            $this->arr["error"] = 1;
        }
        return json_encode($this->arr);
    }

    /**
     * 检查验证码
     * @param $verify 输入的验证码
     * @param $code 真实的验证码
     * @return string
     */
    public function checkVerify($verify, $code){
        /**
         * strip_tags()
         */
        if(strtolower($verify) !== strtolower($code)){
            $this->arr["msg"] = "验证码错误{$this->url}";
            $this->arr["error"] = 1;
        }
        return json_encode($this->arr);
    }
}


