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
					<li><a href="">发布文章</a></li>
					<li><a href="show.html">管理文章</a></li>
				</ul>
			</div>
			<div class="content">
				<h1><center>发布文章</center></h1>
				<div class="title">
					<p>标题</p>
					<input type="text" name="title" id="title" />
				</div>
				<div class="author">
					<p>作者</p>
					<input type="text" name="author" id="author" />
				</div>
				<div class="detail">
					<p>内容</p>
					<textarea name="content" cols="60" rows="15" id="content"></textarea>
				</div>
				<input type="submit" name="button" id="button" value="提交" />
			</div>
			
		</div>
	</body>
</html>
