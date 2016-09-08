<?php	
	namespace app\controllers;
	use yii\web\Controller;
	//use yii\web\Cookie;
	 class HelloController extends Controller{

	 //	public function actionIndex(){
	 		//return $this->renderPartial('index');


	 
	 	public $layout = 'common';
	 	public function actionIndex(){
	 return $this->render('about');//存储在 变量$content
	 /*
	$cookies = \YII::$app->response->cookies;
	$cookie_data = array('name'=>'user','value'=>'zhangsan');
	$cookies->add(new Cookie($cookie_data));
*/
	//echo "<h1>hello world!</h1>";
	 /*$hello_str = 'Hello God!<script>alert(3)</script>';
	$test_arr = array(1,2);
	//创建一个数组
	$data = array();
	//把需要传递给视图的数据放到数组中
	$data['view_hello_str'] = $hello_str;
	$data['view_hello_arr'] = $test_arr;
	return $this->renderPartial('index',$data);
	*/
	 	}
	 	 
	 }