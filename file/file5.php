<?php
header("Content-type:text/html; charset = utf-8");
$filename = "er.csv";
if(file_exists($filename)){
    $handle = fopen($filename, 'a+');
    while (($data = fgetcsv($handle))!=false){
        echo print_r($data)."<hr/>";
    }
    /*$list = array('aaa','sss','bbbb','cccc');
    fputcsv($handle, $list);*/
}else{
    if(touch($filename)){
        $handle = fopen($filename, 'r+');
    }
}