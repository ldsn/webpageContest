<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>报名通道-网页制作大赛</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
			    		{foreach item = item from = $sheji name = foo}
				    		<tr>
				    			<td>{$item.id}</td>
				    			<td>{$item.user}</td>
				    			<td>{$item.major}</td>
				    			<td>{$item.email}</td>
				    			<td>{$item.phone}</td>
				    			<td>{$item.name}</td>
				    			<td>{$item.description}</td>
				    			<td>{$item.upfile}</td>
				    		</tr>
			    		{/foreach}
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
			    		{foreach item = item from = $kaifa name = foo}
				    		<tr>
				    			<td>{$item.id}</td>
				    			<td>{$item.user}</td>
				    			<td>{$item.major}</td>
				    			<td>{$item.email}</td>
				    			<td>{$item.phone}</td>
				    			<td>{$item.name}</td>
				    			<td>{$item.description}</td>
				    			<td>{$item.upfile}</td>
				    		</tr>
			    		{/foreach}
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
			    		{foreach item = item from = $group name = foo}
				    		<tr>
				    			<td>{$item.id}</td>
				    			<td>{$item.user}</td>
				    			<td>{$item.major}</td>
				    			<td>{$item.email}</td>
				    			<td>{$item.phone}</td>
				    			<td>{$item.name}</td>
				    			<td>{$item.description}</td>
				    			<td>{$item.upfile}</td>
				    		</tr>
			    		{/foreach}
			    	</table>
			  </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
