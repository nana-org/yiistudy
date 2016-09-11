<?php	
	namespace app\controllers;
	use yii\web\Controller;
	//use yii\web\Cookie;
	use app\models\Test;
	use app\models\Customer;
	use app\models\Order;
	 class HelloController extends Controller{

	 	public function actionIndex(){




//*********************数据库*****************//
//查询数据
/*$id = 1;
$sql = 'select * from test where id=:id';
$results = Test::findBySql($sql,array(':id'=>1))->all();

*/


//id=1
//$results = Test::find()->where(['id'=>1])->all();

//id>0
//$results = Test::find()->where(['>','id','0'])->all();

//id=1和id<2
//$results = Test::find()->where(['between','id',1,2])->all();


//title like "%title%"
//$results = Test::find()->where(['like','title','title'])->all();




//查询结果转化为数组
//$results = Test::find()->where(['between','id',1,2])->asArray()->all();

//批量查询,每次查多少
/*foreach (Test::find()->batch(1) as $tests) {
	print_r(count($tests));
}*/



//print_R($results);









//删除数据
//删除一行
//$results = Test::find()->where(['id'=>1])->all();
//$results[0]->delete();
//删除全部
//Test::deleteAll('id>:id',array(':id'=>0));





//增加数据
/*$test = new Test;
$test->id = 'abc';
$test->title = 'title3';
$test ->validate();
if($test->hasErrors()){
	echo 'data is error';
	die;
}
$test->save();

*/








//修改数据
/*$test = Test::find()->where(['id'=>3])->one();
$test->title = 'titlettttt3';
$test->save();
*/


//关联查询
//根据顾客查询其订单信息
//$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
//$orders = $customer->hasMany(Order::className(),['customer_id'=>'id'])->asArray()->all();//可以封装一下
         //$orders = $customer->getOrders();
//$orders = $customer->Orders;
//print_r($orders);
//根据订单查询顾客信息

$order = Order::find()->where(['id'=>1])->one();
$customer = $order->customer;
print_r($customer);



//**********************cookie********************//
/*

$cookie = new \yii\web\Cookie([
        'name' => 'name',
        'value' => 'value',
	'expire' => time() + 18000,
	'httpOnly' => true
]);
\Yii::$app->response->getCookies()->add($cookie);  


$cookie = \Yii::$app->request->cookies;
$cookie->has('name');			//判断cookie是否存在
echo $cookie->get('name');			//get()方法读取cookie
echo $cookie->getValue('name');		//getValue()方法读取cookie
echo <br/>;
echo $cookie->count();			//获取cookie个数
echo $cookie->getCount();

	 		//return $this->renderPartial('index');

	 
	 //	public $layout = 'common';
	 	//public function actionIndex(){
	// return $this->render('about');//存储在 变量$content
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