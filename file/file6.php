<?php
$path ="ml/er";

if(!file_exists("op")){
    mkdir("op");
}
var_dump(is_dir("op"));
//rmdir() 删除文件
/**
 * disk_free_space($directory); 获取磁盘剩余空间
 * disk_free_space(getcwd());
 */
echo  disk_free_space(getcwd());
echo getcwd();
function transByte1($size,$digits=2){
    $unit=array('B','KB','MB','GB','TB','PB','EB');
    $i=0;
    while($size>1024){
        $size/=1024;
        $i++;
    }
    return round($size,$digits).$unit[$i];
}
echo transByte1(disk_total_space(getcwd()));