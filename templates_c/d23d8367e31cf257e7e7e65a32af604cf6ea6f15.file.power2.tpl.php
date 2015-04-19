<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 15:00:24
         compiled from ".\templates\back\power2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18534552ce27d77ab22-22842501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23d8367e31cf257e7e7e65a32af604cf6ea6f15' => 
    array (
      0 => '.\\templates\\back\\power2.tpl',
      1 => 1429145855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18534552ce27d77ab22-22842501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552ce27d7c4eb8_27319436',
  'variables' => 
  array (
    'sheji' => 0,
    'item' => 0,
    'kaifa' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ce27d7c4eb8_27319436')) {function content_552ce27d7c4eb8_27319436($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>报名通道-网页制作大赛</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<style type="text/css">
	.panel{
		margin-top: 20px;
	}
</style>
</head>
<body>
<div class="container-fluid">
	<div class="page-header">
	  <h1>网页报名大赛后台<small>查看信息</small></h1>
	</div>
	<ul class='nav nav-tabs '>
	    <li class='active'><a href='#tab1' data-toggle='tab'>设计组</a></li>
	    <li><a href='#tab2' data-toggle='tab'>开发组</a></li> 
	    <li><a href='#tab3' data-toggle='tab'>团队赛</a></li>
	</ul>
	<div class='tab-content'>
		<div class='tab-pane active' id='tab1'>
			<div class="panel panel-default">
			  <div class="panel-heading">设计组报名名单</div>
			  <div class="panel-body">
			    	<table class="table table-striped sheji">
			    		<tr>
			    			<td>#</td>
			    			<td>姓名</td>
			    			<td>专业</td>
			    			<td>邮箱</td>
			    			<td>手机号</td>
			    			<td>作品名称</td>
			    			<td>作品描述</td>
			    			<td>下载作品</td>
			    		</tr>
			    		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sheji']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				    		<tr>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['major'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['upfile'];?>
</td>
				    		</tr>
			    		<?php } ?>
			    	</table>
			  </div>
			</div>
		</div>
		<div class='tab-pane' id='tab2'>
			<div class="panel panel-default">
			  <div class="panel-heading">开发组报名名单</div>
			  <div class="panel-body">
			    	<table class="table table-striped kaifa">
			    		<tr>
			    			<td>#</td>
			    			<td>姓名</td>
			    			<td>专业</td>
			    			<td>邮箱</td>
			    			<td>手机号</td>
			    			<td>作品名称</td>
			    			<td>作品描述</td>
			    			<td>下载作品</td>
			    		</tr>
			    		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kaifa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				    		<tr>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['major'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['upfile'];?>
</td>
				    		</tr>
			    		<?php } ?>
			    	</table>
			  </div>
			</div>
		</div>
		<div class='tab-pane' id='tab3'>
			<div class="panel panel-default">
			  <div class="panel-heading">团队赛报名名单</div>
			  <div class="panel-body">
			    	<table class="table table-striped tuandui">
			    		<tr>
			    			<td>#</td>
			    			<td>姓名</td>
			    			<td>专业</td>
			    			<td>邮箱</td>
			    			<td>手机号</td>
			    			<td>作品名称</td>
			    			<td>作品描述</td>
			    			<td>下载作品</td>
			    		</tr>
			    		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				    		<tr>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['major'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
				    			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['upfile'];?>
</td>
				    		</tr>
			    		<?php } ?>
			    	</table>
			  </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<?php }} ?>
