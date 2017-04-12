<?php
header("Content-type:text/html; charset = utf-8");
$filename = "23.txt";
if(!file_exists($filename)){
   if(touch($filename)){

       $handle = fopen($filename, 'r');
      echo fread($handle, 3);
   }
}else{
    $handle = fopen($filename, 'r');
    echo fread($handle, 3)."<hr/>";
    echo fread($handle, 3)."<hr/>";
    echo fread($handle, 3)."<hr/>";
    rewind($handle);
    echo fread($handle, 6)."<br/>";
    echo ftell($handle)."<hr/>";
    fseek($handle, 3);
    echo fread($handle, 3)."<hr/>";
    if(feof($handle)){
        var_dump(feof($handle));
    }
    //fclose($handle); 关闭资源
    fclose($handle);
}
