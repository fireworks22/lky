<?php
require_once "A.php";
require_once "B.php";
use namespaces\a\Apply as a;
use namespaces\b\Apply as b;
$a = new a();
$a->get_info();
$b = new b();
$b->get_info();
echo namespaces\b\OK;