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
	.row{
		width: 100%;
		height: 500px;
		background: #e5e5e5;
		padding-top: 50px;
		padding-left: 20%;
		padding-right: 20%;
	}
	.row-row{
		width: 100%;
		height: 50vh;
		background:#efefef;
		padding: 20px;
	}

	.user-box{
		width: 80%;
		height: 40px;
		background: red;
		margin-bottom: 20px;
		position:relative;
	}
	input{
		width: 100%;
		height: 100%;
		outline: none;
		border: none;
		padding-left: 20px;
	}
	.user-box span{
		position: absolute;
		display: inline-block;
		right: 10px;
		top: 30%;
		line-height: 100%;
		color: red;
	}
	.input-submit{
		width: 100%;
		height: 100%;
		outline: none;
		border: none;
		background: red;
		padding-left: 0px;
	}






	.other a{
		display: inline-block;
		text-align: center;
		width: 80%;
		height: 40px;
		line-height: 40px;
		border-radius: 5px;
		margin-bottom: 10px;
	}
	.qq{
		background: #17b4df;
		color: white;
	}
	.wb{
		background: #fff;
		color: black;
		border: 1px solid #e5e5e5;
	}
	.wx{
		background: #00bb0d;
		color: white;

	}
</style>
<body>
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




	<div class="row">
		<div class="row-row">
			<div class="col-md-6">
				<form action="__URL__/regist" method="post">
					<h4>注册</h4>
					<div class="user-box">
						<input type="text" name="username" placeholder="手机或邮箱" class="input input-text"><span></span>
					</div>	
					<div class="user-box">	
						<input type="password" name="password" placeholder="密码" class="input input-password"><span></span>	
					</div>	
					<div class="user-box">	
						<input type="password" name="repassword" placeholder="确认密码" class="input input-repassword"><span></span>
					</div>
					<div class="user-box">	
						<input type="submit"  value="注册" class="input-submit">
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<h4>选择其它方式登录</h4>
				<div class="other">
					<a href="#" class="qq">QQ快捷登陆</a>
					<a href="" class="wb">微博快捷登陆</a>
					<a href="#" class="wx">微信快捷登陆</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(function(){
		$('.input').blur(function(){
			$(this).css('background','#fed9d9')
		})
	})
	// 手机验证
	 $(function(){
		$(".input-text").bind('input porpertychange',function(){
			var phone =$(this).val();
			if(!(/^1[3|4|5|7|8]\d{9}$/.test(phone))){
				$(this).next().show().text('手机或邮箱');
			}else{
				//是否注册
				var user = <?php echo ($json); ?>;
				var result= $.inArray(phone,user);
				if( ($.inArray(phone,user)) > -1){
					$('.input-text').next().show().text('手机号已注册!');
				}else{
					$(this).next().text('ok');
				}
			}
		});
	});


	 //密码验证
	 $(function(){
	 	$('.input-password').bind('input porpertychange',function(){
	 		$password=$(this).val();
	 		if($(this).val().length<6){
				$(this).next().show().text('密码至少6位');
	 		}else{
				$(this).next().text('ok');
			}
	 	})
	 })

	 //二次密码验证
	 $(function(){
	 	$('.input-repassword').bind('input porpertychange',function(){
	 		$password=$('.input-password').val();
	 		if($(this).val()==$password){
				$(this).next().text('ok');
	 		}else{
				$(this).next().show().text('两次密码不一致');
	 		}
	 	})
	 })
</script>
</html>