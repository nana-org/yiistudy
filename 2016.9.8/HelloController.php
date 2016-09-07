<?php	
namespace app\controllers;
use yii\web\Controller;
 class HelloController extends Controller{
 	public function actionIndex(){
 /*	


  //	echo "helow world";//http://127.0.0.1/basic/web/index.php?r=hello/index传入r参数用hello的控制器处理index
 	 $request= \YII::$app->request;//获取yii里面的请求组键




 	//echo $request->get('id',20);
 	//http://127.0.0.1/basic/web/index.php?r=hello/index&id=3获取id的值并输出




 	// $request->post('name',88888);用post方法获取值





 	if($request->isGet){
 		echo 'this is get method!';
 	 }
 	 if($request->isPost){
 		echo 'this is post method!';
 	 }
 	echo  $request->userIp;

 



 	*/
 /*$res = \YII::$app->response;
 //$res->statusCode = '404';
 //$res->header->add('location','http://www.baidu.com');//未能实现
 



//$this->redirect('http://www.baidu.com',302);信息跳转



//$res->header->add('content-disposition','attachment;filename="725.jpg"');//未能实现下载
 
$res->sendFile('./robots.txt');//下载成功
*/



$session = \YII::$app->session;
$session ->open();
//$session->set('user','张三');//存储数据
//echo $session->get('user');//读取以存储数


//$session['user']='张三';//以数组的方式储存数据
//echo $session['user'];//数组读取数据
unset($session['user']);
/*if($session->isActive){
	echo 'session is active';
}//判断session是否开启*/
 	}
 	 
 }