<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>小发布系统</title>
		<style>
		*{
			margin: 0;
			padding: 0;
		}
		
			.main-box{
				width: 800px;
				height:800px;
				border:1px solid #333;
				margin:0 auto;
				background: #FFFF99;
			}
			.top{
			border-bottom: 1px solid #333;
			line-height: 80px;
			font-size: 28px;
		}
		.side{
			width: 200px;
			border-right: 1px solid #333;
			height: 720px;
			float: left;
		}
		.side ul li{
			line-height: 40px;
			list-style: none;
			text-align: center;
		}
		.content{
			padding: 10px;
			width: 578px;
			height: 698px;
			background: #fff;
			float: left;
		}
		</style>
	</head>
	<body>
		<div class="main-box">
			<div class="top">
				后台管理系统
			</div>
			<div class="side">
				<ul>
					<li><a href="index.html">发布文章</a></li>
					<li><a href="">管理文章</a></li>
				</ul>
			</div>
			<div class="content">
				
				<table width="580" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF">文章管理列表</td>
        </tr>
      <tr>
        <td width="37" bgcolor="#FFFFFF">编号</td>
        <td width="50" bgcolor="#FFFFFF">标题</td>
       <td bgcolor="#FFFFFF">内容</td>
      </tr>
	<tr>
        <td width="37" bgcolor="#FFFFFF"><?=$view_data[0]['id'];?></td>
        <td width="50" bgcolor="#FFFFFF"><?=$view_data[0]['title'];?></td>
       <td bgcolor="#FFFFFF"><?=$view_data[0]['content'];?></td>
      </tr>

      <tr>
        
        <td bgcolor="#FFFFFF"></td>
        
      </tr>
       
    </table>
			</div>
			
		</div>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>




		
	</body>
</html>
