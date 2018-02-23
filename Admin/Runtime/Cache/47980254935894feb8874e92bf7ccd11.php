<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bs/css/bootstrap.min.css">
	<script type="text/javascript" src="__PUBLIC__/bs/jquery.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/bs/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.login{
		text-align: center;
		width: 50%;
		height: 50%;
		background:yellow;
		margin:20% auto;
		border: 1px solid #ccc;
		box-shadow: 0px 0px 3px 3px #888;
		border-radius: 10px;
		padding: 20px;
	}
</style>
<body>
	<div class="login">
		<form action="__URL__/check" method="post">
			<div class="form-group">
				<label>用户名</label>
				<input type="username" name="username" class="form-control" placeholder="username">
			</div>
			<div class="form-group">
				<label>密码</label>
				<input type="password" name="password" class="form-control" placeholder="password">
			</div>
			<div class="form-group">
				<input type="submit" name="" value="登陆" class="btn btn-toolbar">
			</div>
		</form>
	</div>
</body>
</html>