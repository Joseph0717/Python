<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bs/css/bootstrap.min.css">
	<script type="text/javascript" src="__PUBLIC__/bs/jquery.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/bs/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Public/css/header.css">
</head>
<style type="text/css">
	


	.home{
		width: 100%;
		height: 600px;
		background:url('__PUBLIC__/image/home.jpg'); 
		background-repeat: no-repeat;
		background-size:100% 100%;
		background-position: center top; 
		}
	.home-left{
		width: 30%;
		height: 250px;
		float: left;
		margin-left: 89px;
		margin-top: 79px;
		text-align: center;
	}
	.home-left img{
		margin-bottom: 10px;
	}
	.home-left p{
		text-align: center;
		font-size: 20px;
	}
	.home-left a{
		display: inline-block;
		width: 50%;
		height: 40px;
		line-height: 40px;
		border:1px solid black;
		margin-bottom: 46px;
	}





	.photo{
		width: 100%;
		height: 500px;
		background-image: url('__PUBLIC__/image/winer.jpeg');
		background-repeat: no-repeat;
		background-size: 100% 100%;
		text-align: center;
	}
	.photo h1{
		display: inline-block;
		margin-top: 180px;
		color: white;
		font-size: 50px;
	}
	.photo button{
		outline: none;
		width: 130px;
		height: 40px;
		display: block;
		margin: 0 auto;
		border: 2px solid white;
		cursor: pointer;
		background: 0 0;
		color: white;
		z-index:1;
		position: relative;
	}
	.photo div{
		display: inline-block;
		width: 0px;
		height: 40px;
		position: absolute;
		left: -2px;
		top: -2px;
		z-index: -1;
		transition-property: width;
		transition-duration: 0.2s;
		background: white;
	}
	.photo button:hover div{
		width: 130px;
	}
	.photo button:hover{
		color: black;
	}

	

	.row ul{
		margin-top: 40px;
	}

	.row ul div{
		width:100%;
		height: 150px;
		background: #F6F3F3;
		padding: 25px;
	}

	.row ul li a{
		display: inline-block;
		width: 100%;
		height: 100%;
	}
	.row ul li a:hover{
		-moz-box-shadow:3px 6px 20px #333333; -webkit-box-shadow:3px 5px 20px #333333; box-shadow:3px 6px 20px #333333;
	}









	.foolt{
		width: 100%;
		height: 400px;
		/*background: red;*/
		margin-top: 50px;
	}
	.foolt-ul{
		width: 100%;
		height: 200px;
		text-align: center;
	}
	.foolt-ul li{
		display: inline-block;
		width: 20%;
		height: 200px;
		padding-top: 40px;
	}

	.foolt-ul span{
		display: inline-block;
		width: 60px;
		height: 60px;	
	}
	.span-1{
		background: url('__PUBLIC__/image/jing.png') no-repeat;
		background-position: -10px -410px;
	}
	.span-2{
		background: url('__PUBLIC__/image/jing.png') no-repeat;
		background-position: -10px -10px;
	}
	.span-3{
		background: url('__PUBLIC__/image/jing.png') no-repeat;
		background-position: -10px -250px;
	}
	.span-4{
		background: url('__PUBLIC__/image/jing.png') no-repeat;
		background-position: -10px -570px;
	}


	.jumbotron{
		text-align: center;
	}
</style>
<body>
	<div class="container">

		<div class="header">
			<div class="logo">
				<a href="__APP__/Index/index.html"><img src="__PUBLIC__/image/logo.png" height="50"></a>
			</div>
			<div class="nav">
				<ul class="nav-ul">
					<li class="li-1">
						<a href="__APP__/Index//T">OnePlus 5T</a>
					</li>
					<li>
						<a href="#">商城</a>
					</li>
					<li>
						<a href="#">服务</a>
					</li>
					<li>
						<a href="#">博客</a>
					</li>
					<li>
						<a href="#">论坛</a>
					</li>
				</ul>
			</div>
			<div class="user">
				<a href="#">
					<span class="glyphicon glyphicon-search"></span>

				</a>
				<a href="#">
					<span class="glyphicon glyphicon-shopping-cart"></span>
				</a>
				<a href="__APP__/User/regist.html">
					<span class="glyphicon glyphicon-user"></span>
				</a>
			</div>
		</div>



		<div class="home">
			<div class="home-left">
				<img src="__PUBLIC__/image/one.svg" width="80%">
				<p>
					￥2999 起
				</p>
				<a href="#">
					了解更多
				</a>
				<p>
					星辰黑/熔岩红/砂岩白 现货开售
				</p>
			</div>
		</div>



		<div class="row">
			<div class="col-md-4">
				<h4>报名吃鸡,赢万元奖金</h4>
				<a href="#">
					<img src="__PUBLIC__/image/game.jpg" width="100%">
				</a>
			</div>
			<div class="col-md-4">
				<h4>推荐有礼</h4>
				<a href="#">
					<img src="__PUBLIC__/image/box.jpg" width="100%">
				</a>
			</div>
			<div class="col-md-4">
				<h4>以旧换新</h4>
				<a href="#">
					<img src="__PUBLIC__/image/black.jpg" width="100%">
				</a>
			</div>
		</div>



		<div class="photo">
			<h1>
				Shot on OnePlus
			</h1>
			<button><div></div>我要参加</button>
		</div>




		<div class="row">
			<ul>
				<li class="col-md-4">
					<a href="#">
						<img src="__PUBLIC__/image/people.png" width="100%">
						<div>
							<h4>校招</h4>
							<p>OnePlus 2018 春季招聘正式开启</p>
						</div>
					</a>
				</li>
				<li class="col-md-4">
					<a href="#">
						<img src="__PUBLIC__/image/phone.png" width="100%">
					<div>
						<h4>新闻</h4>
						<p>OnePlus 5T 入选时代周刊最值得购买手机</p>
					</div>
				</a>
				</li>
				<li class="col-md-4">
					<a href="#">
						<img src="__PUBLIC__/image/red.jpg" width="100%">
					<div>
						<h4>视频</h4>
						<p>四周年纪念版 OnePlus 5T 熔岩红</p>
					</div>
				</a>
				</li>
			</ul>
		</div>




		<div class="foolt">
			<ul class="foolt-ul">
				<a href="#">
					<li>
						<span class="span-1"></span>
						<h5>七天无理由退货</h5>
					</li>
				</a>
				<a href="#">
					<li>
						<span class="span-2"></span>
						<h5>15天退保障</h5>
					</li>
				</a>
				<a href="#">
					<li>
						<span class="span-3"></span>
						<h5>30天换货保障</h5>
					</li>
				</a>
				<a href="#">
					<li>
						<span class="span-4"></span>
						<h5>99元全场包邮</h5>
					</li>
				</a>
			</ul>

			<hr>

			<div class="jumbotron">
				<h1>模仿版</h1>
			</div>

		</div>
	</div>
</body>
<script type="text/javascript">
	

</script>
</html>