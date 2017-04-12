<?php
header("Content-type:text/html; charset = utf-8");
$filename = "25.txt";
if(file_exists($filename)){
    $handle = fopen($filename, 'r');
    while (!feof($handle)){
        echo fgetss($handle)."<hr/>";
    }
    file_put_contents("25.txt", "有点不好", FILE_APPEND);
    echo file_get_contents("er.csv");
}else{
    if(touch($filename)){
        $handle = fopen($filename, 'r+');
        while (!feof($handle)){
            echo fgetss($handle)."<hr/>";
        }
       // file_put_contents("25.txt", "有点不好", FILE_APPEND);
        echo file_get_contents("er.csv");
    }
}