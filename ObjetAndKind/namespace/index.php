<?php
require_once "A.php";
//require_once "B.php";
/**
 * 第一种方式：实例化时直接加上命名空间$a = new \namespaces\a\Apply();
 * 第二种方式：使用 use 关键字，使用它的前提是已经将文件倒进来了use namespaces\a\Apply;
 *
 */

use namespaces\a\Apply;
$a = new Apply();
$a->get_info();
use namespaces\a\C;
$c= new C();
$c->info();
