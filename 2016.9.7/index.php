<?php
require_once("a.php");
require_once("b.php");
require_once("c.php");
//$a_app = new a\b\c\Apple();//可以直接调用命名空间a\b\c下的类名Apple
use a\b\c\Apple;//使得默认使用命名空间为a\b\c的类名
use d\e\f\Apple as BApple;//给b.php下的Apple定义一个“名称”
$a_app = new Apple();
$b_app = new BApple();
$a_app->get_info();//打印出$a_app的内容
$b_app->get_info();
$c_app = new \Apple();
$c_app->get_info();