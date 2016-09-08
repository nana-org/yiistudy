<h1>hello index!</h1>


<?php $this->beginBlock('block1');?>
//定义数据库
<h1>index</h1>

<?php $this->endBlock();?>
<?php echo $this->render('about',array('v_hello_str'=>'hello world!'));
/*use yii\helpers\Html;

use yii\helpers\HtmlPurifier;
?>
<h1><?=Html::encode($view_hello_str) ;?></h1>
<h1><?=HtmlPurifier::process($view_hello_str);?></h1>
*/

?>