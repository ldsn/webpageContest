<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 14:36:29
         compiled from ".\templates\user\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31717552ce2847af0b2-01509622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327e4c2ef463bf5a99bb9a71d3fbc7aed3cd4686' => 
    array (
      0 => '.\\templates\\user\\register.tpl',
      1 => 1429166030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31717552ce2847af0b2-01509622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552ce2847f55c6_86049432',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ce2847f55c6_86049432')) {function content_552ce2847f55c6_86049432($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>报名通道-网页制作大赛</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/front.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<style type="text/css">
	.panel-body{
		width: 400px;
  		margin: 0 auto;
	}
	.up-btn{
		margin-left: 475px;
		margin-bottom: 20px;
	}
	.progress{
		display: none;
	}
	.upfile{
		display: none;
	}
	.alert{
		display: none;
	}
	.zuopin{
		margin-bottom: 20px;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
	  	<div class="page-header">
		  <h1>鲁东大学<small>首届网页大赛报名处</small></h1>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">报名表</div>
		  <div class="panel-body">
		    	<form method="post" action="http://localhost/com/new/index.php?c=index&m=setRegister" id= "form-up"method="post">
				  <div class="form-group">
				    <label>性质:</label>
				    <select name="type"  id = "select" class="form-control" ><span>*<span>
						<option value='1'>个人设计赛</option>
						<option value='2'>个人开发赛</option> 
						<option value='3'>团队赛</option> 
	            	</select>
				  </div>
				  <div class="form-group">
				    <label>姓名:</label>
				    <input type="text" name="user" class="form-control user"  placeholder="请输入姓名或团队代表姓名">
				  </div>
				  <div class="form-group">
				    <label>学院专业班级:</label>
				    <input type="text" name="major" class="form-control major"  placeholder="请输入专业班级">
				  </div>
				  <div class="form-group">
				    <label>Email地址:</label>
				    <input type="text" name="email" class="form-control email"  placeholder="请输入邮箱地址">
				  </div>
				  <div class="form-group">
				    <label>手机号码:</label>
				    <input type="text" name="phone" class="form-control phone"  placeholder="请输入手机号码">
				  </div>
				  </div>
				  <button type="submit"  class="btn btn-info up-btn">点击报名</button>
				  <a  href="http://localhost/com/new/index.php?c=index&m=upfile" target="_blank" class="btn btn-info zuopin">我要提交作品</a>
				</form>
		  </div>
		</div>
	</div>
</body>
</html><?php }} ?>
