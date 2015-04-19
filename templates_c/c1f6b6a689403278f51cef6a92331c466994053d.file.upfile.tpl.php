<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 22:43:03
         compiled from "./templates/user/upfile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1416529205552f7ca98bcdb5-77704343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f6b6a689403278f51cef6a92331c466994053d' => 
    array (
      0 => './templates/user/upfile.tpl',
      1 => 1429454930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1416529205552f7ca98bcdb5-77704343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552f7ca98f2560_15523264',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f7ca98f2560_15523264')) {function content_552f7ca98f2560_15523264($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>报名通道-网页制作大赛</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/front.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="./templates/js/highlight/highlight.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<style type="text/css">
	.up-btn{
		width: 100%;
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
		    	<form  id= "form-up" method="post">
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
				 <div class="form-group">
				    <label for="exampleInputFile">上传作品</label>
				    <input type="text" name="upfile" class="upfile" id="upfile" />
				    <div class="up-hidden">
		                <div id="container">
		                	<a href="#" id="pickfiles" class="choose btn btn-info">选择文件</a>
		                </div>
		                <div class="up-progress">

				   			<div class="progress progress-bar-info active">
				   				<div class="progress-bar progress-bar-success" role="progressbar" 
							      aria-valuenow="60" aria-valuemin="0"  >
							  	</div>
				   			</div>
				   		<div class="alert alert-success" role="alert">上传成功</div>
				   		</div>
			  		</div>
				  </div>
				  <div class="form-group">
				    <label>作品名:</label>
				    <input type="text" name="name" class="form-control name"  placeholder="请输入作品名称">
				  </div>
				  <div class="form-group">
				    <label>作品描述:</label>
				    <textarea class="form-control description" placeholder="请输入相关作品描述" name="description" rows="3"></textarea>
				  </div>
				  
				  </div>
				  <a  class="btn btn-info up-btn">提交作品</a>
				</form>
		  </div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/plupload/plupload.full.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/plupload/i18n/zh_CN.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/qiniu.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/highlight/highlight.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./templates/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
