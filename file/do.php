<?php
header("Content-type:text/html; charset = utf-8");
//print_r($_FILES);
$file = $_FILES["file"];
//print_r($file);
$name = $file["name"];
$type = $file["type"];
$tmp_name = $file["tmp_name"];
$error = $file["error"];
$size = $file["size"];
$exts = array("jpg","png", "txt");
$max_size = 2*1024*1024;
$ext = pathinfo($name)["extension"];
$flag = true;
$dir = "up";
if($error == UPLOAD_ERR_OK) {
    if ($size > $max_size) {
        echo "上传文件太大";
    }
    if (!in_array($ext, $exts)) {
        exit("不支持改格式");
    }
    if (!is_uploaded_file($tmp_name)) {
        exit("该文件不是通过HTTP POST提交的");
    }
    /*if ($flag){
        if (!getimagesize($tmp_name)) {
            exit("不是图片");
        }
    }*/

    if(!file_exists($dir)){
        mkdir($dir);
    }
    $file_name = md5(uniqid(microtime())).".".$ext;
    //echo $file_name;
    if(move_uploaded_file($tmp_name, $dir."/".$file_name)){
        echo "上传成功";
    }else{
        echo "上传失败";
    }
}else{
    switch ($error){
        case "0":
            echo "文件上传成功";
            break;
        case "1":
            echo "上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值";
            break;
        case "2":
            echo "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值";
            break;
        case "3":
            echo "文件只有部分被上传";
            break;
        case "4":
            echo "没有文件被上传";
            break;
        case "6":
            case "找不到临时文件夹";
            break;
        case "7":
            case "文件写入失败";
            break;
        default:
            echo "操作有误";
            break;
    }
}

