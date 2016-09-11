<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Article;
/**
* 
*/
class ArticleController extends Controller
{
	
	public function actionIndex(){

/*$test = new Article;

$test->title = 'title4';
$test->author = 'tit';
$test->content = 'titledddddddddd';
$test ->validate();
if($test->hasErrors()){
	echo 'data is error';
	die;
}
$test->save();
*/


$results = Article::find()->where(['>','id','0'])->asArray()->all();
$data = array();
$data['view_data'] = $results;
print_r($data);
return $this->renderPartial('index',$data);
	}
}








