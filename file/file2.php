<?php
header("Content-type:text/html; charset = utf-8");

$filename = "23.txt";
//touch($filename); 创建文件 设定文件的访问和修改时间，
//file_exists($filename) 判断文件是否存在
//unlink($filename)删除文件

if(file_exists($filename)){
   echo "已存在".$filename."文件";
}else{
    if(touch($filename)){
        echo "文件创建成功"."<hr/>";
        //"test/".time().mt_rand(0,10)."txt"
        if(file_exists($filename)){
            /*if(copy($filename, "test/".time().mt_rand(0,10).".txt")){
                echo "复制成功"."<hr/>";
                if(file_exists($filename) && unlink($filename)){
                    echo "删除成功！"."<hr/>";
                }else{
                    echo "删除失败！"."<hr/>";
                }
            }else{
                echo "复制失败"."<hr/>";
            }*/
            /*if(rename($filename, "test/".mt_rand(0,10).".txt")){
                echo "重命名成功";
            }else{
                echo "重命名失败";
            }*/
        }
    }else{
        echo "文件创建失败"."<hr/>";
    }
}

