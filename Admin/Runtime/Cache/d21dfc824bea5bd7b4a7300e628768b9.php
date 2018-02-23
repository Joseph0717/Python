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
	h2{
		color:#fff;
	}
</style>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
   
   				 <div class="navbar-header">
      				<a class="navbar-brand" href="__APP__/Index/index"><img src="__PUBLIC__/image/logo.gif" width="100"></a>
  				  </div>

   
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     				 <ul class="nav navbar-nav navbar-right">
        				<li><a href="__APP__/Login/index" class="btn btn-success">login</a></li>
        				<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">后台管理<span class="caret"></span></a>
          				<ul class="dropdown-menu">
           					<li><a href="#">Admin</a></li>
            				<li><a href="#">修改口令</a></li>
            				<li><a href="#">首页</a></li>
           					<li><a href="#">退出</a></li>
          				</ul>
        				</li>
      				</ul>
    			</div>
 		 	</div>
		</nav>
		





		<div class="row">
			<div class="col-md-2">
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    					用户管理
    				<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="__APP__/User/index" class="btn btn-toolbar">
						查看用户
					</a></li>

					<li><a href="__APP__/User/index" class="btn btn-toolbar">
						添加用户
					</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-10">
				
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>password</th>
		</tr>
		<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($rows['id']); ?></td>
				<td><?php echo ($rows['username']); ?></td>
				<td><?php echo ($rows['password']); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	

			</div>
		</div>
	</div>
</body>
</html>