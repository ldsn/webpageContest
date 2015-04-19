<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 22:28:50
         compiled from "./templates/user/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219172348552f774c05d970-20258324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada0ad1c74a454744f595b63eec7efc09ee7fbd5' => 
    array (
      0 => './templates/user/register.tpl',
      1 => 1429451171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219172348552f774c05d970-20258324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552f774c096bb7_94322015',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f774c096bb7_94322015')) {function content_552f774c096bb7_94322015($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>报名通道-网页制作大赛</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/front1.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<style type="text/css">
	.up-btn{
		width: 100%;	
	}
	.zuopin{
		width: 100%;
		margin-top:20px;
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
		    	<form method="post" action="#" id= "form-up"method="post">
				  <div class="form-group">
				    <label>性质:</label>
				    <select name="type"  id = "select" class="form-control type" ><span>*<span>
				    	<option value='2'>个人开发赛</option> 
						<option value='1'>个人设计赛</option>
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
				  <a  class="btn btn-info up-btn">点击报名</a>
				  <a  href="http://localhost/com/new/index.php?c=index&m=upfile" target="_blank" class="btn btn-info zuopin">我要提交作品</a>
				</form>
		  </div>
		</div>
	</div>
</body>
</html><?php }} ?>
