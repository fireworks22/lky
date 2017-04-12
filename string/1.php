<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/28 0028
 * Time: 15:11
 */
header("Content-type: text/html; charset=utf-8");
// session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$passwordes = $_POST['passwordes'];
$email = $_POST["email"];
$fav = $_POST['fav'];
//$varify = $_POST['varify']
//print_r($fav);
//echo $username, $password, $passwordes, $email, $varify;

$msg = array(
    "error"=>0, //0表示没有出错， 1表示出错了
    "msg"=>""   //错误的消息
);
//$veri = checkVeri($verify, $msg);
$f = checkFav($fav, $msg);
$user = checkUser($username, $msg);
$pass = checkPassword($password, $passwordes, $msg);
$userEmail = checkEmail($email, $msg);
/*if($veri["error"] == 0){

}else{
    echo $veri["msg"];
}*/

if($user["error"] == 0){
    if($pass["error"] == 0){
        if($userEmail["error"] == 0){
            echo "ok";
        }else{
            echo  $userEmail["msg"];
        }
    }else{
        echo $pass["msg"];
    }
}else{
    echo $user["msg"];
}

/**
 * @param $username
 * @param $msg
 * @return mixed
 *
 */
function checkUser($username, $msg){
    if($username != ""){
        $char = $username[0];
        $ascii = ord($char);
        $len = strlen($username);
        if($ascii>64 && $ascii<91){
            if(!($len>=6 && $len<=10)){
                $msg["error"] = 1;
                $msg["msg"] = "用户名长度不符合规范<a href='index.php'>重新注册<a/>";
            }
        }else{
            $msg["error"] = 1;
            $msg["msg"] = "首字母大写<a href='index.php'>重新注册<a/>";
        }
    }else{
        $msg["error"] = 1;
        $msg["msg"] = "请输入账号<a href='index.php'>重新注册<a/>";
    }
    return $msg;
}

/**
 * @param $verify
 * @param $msg
 *
 *
 */
/*function checkVeri($verify, $msg){
    $code = $_SESSION[''];
    /**
     * strtolower() 将字符串转换成小写
     *strtoupper（）；将字符串转换成大写
     */
    /*if(strtolower($code) != strtolower($verify)){
        $msg["error"] = 1;
        $msg["msg"] = "验证码输入错误<a href='index.php'>重新注册<a/>";
    }
    return $msg;
}*/
function checkPassword($password, $passwordes, $msg){
    if($password != ""){
        $len = strlen($password);
        if($len>=6 && $len <=10){
            if(strcmp($password, $passwordes) !== 0 ){
                $msg["error"] = 1;
                $msg["msg"] = "密码不一致<a href='index.php'>重新注册<a/>";
            }
        }else{
            $msg["error"] = 1;
            $msg["msg"] = "密码长度不符合规范<a href='index.php'>重新注册<a/>";
        }
    }else{
        $msg["error"] = 1;
        $msg["msg"] = "请输入密码<a href='index.php'>重新注册<a/>";
    }
    return $msg;
}

function checkEmail($email, $msg){
    if($email != ""){
        if(!strpos($email,"@")){
            $msg["error"] = 1;
            $msg["msg"] = "邮箱格式错误<a href='index.php'>重新注册<a/>";
        }
    }else{
        $msg["error"] = 1;
        $msg["msg"] = "请输入邮箱<a href='index.php'>重新注册<a/>";
    }
    return $msg;
}
