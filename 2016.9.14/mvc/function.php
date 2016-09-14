<?php
function C($name,$method){
	require_once('/libs/Controller/'.$name.'Controller.class.php');
	$controller = $name.'controller';
	$obj = new $controller();//实例化
	$obj -> $method();//调用方法
}
C('test','show');
function M($name){
	require_once('/libs/Model/'.$name.'Model.class.php');
	$model = $name.'model';
	$obj = new $model();
	return $obj;
}
function V($name){
	require_once('/libs/View/'.$name.'View.class.php');
}