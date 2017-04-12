<?php
/**
 * Created by PhpStorm.
 * User: lky
 * Date: 2017/2/23 0023
 * Time: 10:10
 */
/**
 * @param int $width 验证码宽度
 * @param int $height 验证码高度
 * @param int $type 类型： 1.纯数字 2.纯字母 6.数字+字母
 * @param int $len  验证码长度
 * @param int $pixel 干扰元素之点 0表示没有
 * @param int $line 干扰元素之线 0表示没有
 * @param string $session_name 验证码存到SESSION中的名字
 */
function Code($width = 80,$height = 30, $type = 4,$len = 4 ,$pixel = 50,$line = 3,$session_name = "codex"){
    session_start();
    //1.创建一个画布
    $image = imagecreatetruecolor($width, $height);
   //2.
    //imagecolorallocate — 为一幅图像分配颜色

    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);

    //3.填充整个矩形区域
    imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);
    //4.准备字符串
    $str = getStr($type, $len);
   //将字符串存到SESSION中
   $_SESSION[$session_name] = $str;
   //5. 准备字体
   $fontFile = array("DroidSerif.ttf","hakuyoxingshu7000.TTF","Lobster-Regular.ttf","FZLTCXHJW.TTF","msyh.ttf","msyhbd.ttf","simfang.ttf",
       "simhei.ttf","simkai.ttf","simsun.ttc","verdana.ttf","verdanab.ttf","verdanai.ttf","verdanaz.ttf", "ygyxsziti2.0.ttf");
   //单独绘制文字
     for($i=0; $i<strlen($str); $i++){
         $size = mt_rand(14,18);
         $angle = mt_rand(-15, 15);
         $x = 5+$size*$i;
         $y = mt_rand(20, 26);
         $color = imagecolorallocate($image, mt_rand(90, 120), mt_rand(100, 200), mt_rand(120,250));
         //随机字体
         $font_file = "font/".$fontFile[mt_rand(0,count($fontFile)-1)];
         $text = substr($str, $i, 1);
         imagettftext($image, $size, $angle, $x, $y, $color,$font_file , $text);
     }

     if($pixel) {
         for ($i = 0; $i<$pixel; $i++) {
             $color = imagecolorallocate($image, mt_rand(90, 120), mt_rand(100, 200), mt_rand(120,250));
             imagesetpixel($image, mt_rand(1, $width-2), mt_rand(1, $height-2), $color);

         }
     }
     //8.干扰元素之斜线
     if($line){
         for($i = 0; $i<$line; $i++){
             $color = imagecolorallocate($image, mt_rand(90, 120), mt_rand(100, 200), mt_rand(120,250));
             imageline($image, mt_rand(1, $width-2), mt_rand(0, $height-2), mt_rand(1, $width-2), mt_rand(0, $height-2), $color);

         }
     }
    //输出图片
    header("content-type: image/gif");

    imagegif($image);
    imagedestroy($image);
}

/**
 * @param $type $type 类型： 1.纯数字 2.纯字母 3.数字+字母
 * @param $len  $len 验证码的长度
 * @return string 验证码的字符串
 * 可选参数
 */
function getStr($type = 1, $len = 4){
    if($type == 1){
        $str = "1234567890";
    }else if ($type == 2){
        $str = "qwertyuiopasdfghjklzxcvbnm";
    }else if($type == 3){
        $str = "QWERTYUIOPASDFGHJKLZXCVBNM";
    }else if($type == 4){
        $str = "1234567890qwertyuiopasdfghjklzxcvbnm";
    }else if($type == 5){
        $str = "1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
    }else{
        $str = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    }
    //打乱字符串
    $chars = str_shuffle($str);
    //截取$len个长度的字符串，并返回
    return substr($chars, 0, $len);
    /*$chars = substr($chars, 0, $len);
    return $chars;*/
}
//echo getStr(2, 5);