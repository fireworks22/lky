<?php
$filename = "file.md";
echo filesize($filename);//获取文件大小，单位为字节（kb）
echo "<hr/>";
//filectime($filename) 获取文件的创建时间，返回的是时间戳
echo date("Y-m-d H:i:s", filectime($filename));
echo "<hr/>";
//filemtime($filename) 获取文件的修改文件时间
echo date("Y-m-d H:i:s", filemtime($filename));

echo "<hr/>";
//fileatime($filename) 获取文件上次的访问时间
echo date("Y-m-d H:i:s", fileatime($filename));
echo "<hr/>";
echo filetype($filename);//获取文件的类型
echo "<hr/>";
var_dump(is_executable($filename));
var_dump(is_readable($filename));
var_dump(is_writable($filename));
var_dump(is_file($filename));
echo "<hr/>";
print_r(pathinfo($filename));
/**
 * Array (
 * [dirname] => .  文件路径
 * [basename] => file.md 文件名+后缀
 * [extension] => md  文件后缀名
 * [filename] => file  文件名
 * )
 */
echo "<hr/>";
echo pathinfo($filename)["dirname"]."<br/>";
echo pathinfo($filename)["basename"]."<hr/>";
echo dirname($filename)."<br/>";
echo basename($filename)."<hr/>";