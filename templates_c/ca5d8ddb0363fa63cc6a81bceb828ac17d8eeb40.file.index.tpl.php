<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 14:22:09
         compiled from ".\templates\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25032552ce28f5cd190-69632647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5d8ddb0363fa63cc6a81bceb828ac17d8eeb40' => 
    array (
      0 => '.\\templates\\index\\index.tpl',
      1 => 1429165312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25032552ce28f5cd190-69632647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552ce28f626f33_26060918',
  'variables' => 
  array (
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ce28f626f33_26060918')) {function content_552ce28f626f33_26060918($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>鲁东大学第一届网页制作大赛 - 鲁大学生网</title>
<link rel="stylesheet" href="./templates/css/main.css">

<?php echo '<script'; ?>
 src="./templates/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./templates/js/main1.js"><?php echo '</script'; ?>
>
</head>
<body>
	<!-- 顶部栏目和banner -->
	<div class="header">
		<div class="top-title">
			<div class="logo">
				<a href="http://www.ldustu.com">
					<img src="./templates/images/logo.png" alt="鲁大学生网"/><span>鲁大学生网</span>
				</a>
			</div>
			<div class="search">
				<form action="http://www.baidu.com/baidu" target="_blank">
				<input name="search"  type="text" />
				<a href="javascript:void(0)" onclick="submit()">搜索</a>
				</form>
			</div>
		</div>
		<div class="top-banner">
			<div class="banner-center">
				<a href="http://localhost/com/new/index.php?c=index&m=register"><h1>立即报名</h1></a>
				<span class="bner-num"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span>
			</div>
		</div>
		<div class="top-nav" id="menu">
			<ul class="nav-ul">
				<li><a href="#detials">大赛详情</a></li>
				<li><a href="#get">你将收获</a></li>
				<li><a href="#conditions">参赛条件</a></li>
				<li><a href="#process">参赛流程</a></li>
				<li><a href="#judges">坐镇评委</a></li>
				<li><a href="#teyao">特邀评委</a></li>
				<li><a href="#awards">奖项设置</a></li>
			</ul>
		</div>
	</div>
	<!-- 内容部分 -->
	<div class="content">
		<ul class="content-list">
			<li class="list-item detials" name="detials">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>大赛详情</h2>
						<span class="title-icon"></span>
					</div>
				</div>
				<div class="detials-content">
						<div class="detials-left">
							<div class="title">
								<span>竞赛宗旨</span>
							</div>
							<div class="left-content">
								<p>为使学生重视网页表达的思想性和创新性，兼顾评价信息技术能力。通过本次制作竞赛活动，鼓励广大计算机技术爱好者积极探索、勇于创新、大胆实践。</p>
								<a href="./doc/webcompetitioninfo.doc">网页制作大赛详细要求doc下载>></a>
							</div>
						</div>
						<div class="detials-right">
							<div class="title">
								<span>时间地点</span>
							</div>
							<div class="right-content">
								<p>初赛时间：4月6日~4月20日</p>
								<p>决赛时间：4月23日~4月28日</p>
								<p>公布获奖名单：5月1日</p>
								<p>活动地点：线下活动 校内活动</p>
							</div>
						</div>
				</div>
			</li>
			<li class="list-item get" name="get">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>你将收获</h2>
						<span class="title-icon"></span>
					</div>
					<div class="get-list">
						<a class="list-left"></a>
						<div class="warp-list" id="focus">
							<ul>
								<li>知名互联网内推机会</li>
								<li>鲁大学生网工作机会</li>
								<li>鲁东大学校级证书</li>
								<li>互联网大牛交流机会</li>
							</ul>
						</div>
						<a class="list-right"></a>
						<ul class="icon-ul">
							<li><a href="javascript:void(0)"></a></li>
							<li><a href="javascript:void(0)"></a></li>
							<li><a href="javascript:void(0)"></a></li>
							<li><a href="javascript:void(0)"></a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="list-item conditions" name="conditions">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>参赛条件</h2>
						<span class="title-icon"></span>
					</div>
					<div class="left">
					</div>
					<div class="right">
						<ul>
							<li>
								<span class="icon1"></span>
								<h3>在校学生，年级不限</h3>
							</li>
							<li>
								<span class="icon2"></span>
								<h3>热爱代码，编写规范</h3>
							</li>
							<li>
								<span class="icon3"></span>
								<h3>拼劲十足，勇于挑战</h3>
							</li>
							<li>
								<span class="icon4"></span>
								<h3>有追求，有抱负，有理想</h3>
							</li>
							<li>
								<span class="icon5"></span>
								<h3>乐于探索，肯钻研</h3>
							</li>
							<li>
								<span class="icon6"></span>
								<h3>灵活敏捷，行动派</h3>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class="list-item process" name="process">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>参赛流程</h2>
						<span class="title-icon"></span>
					</div>
					<div class="time-nav">
						<div class="top-line"></div>
						<span class="nav1 nav-icon">报名</span>
						<span class="nav2 nav-icon">审核<br/>作品</span>
						<span class="nav3 nav-icon">决赛<br/>筛选</span>
						<span class="nav4 nav-icon">审核<br/>作品</span>
						<span class="nav5 nav-icon">等次<br/>评选</span>
						<span class="nav6 nav-icon">颁奖<br/>典礼</span>
					</div>
				</div>
				<div class="pro-content"></div>
			</li>
			<li class="list-item judges" name="judges">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>坐镇评委</h2>
						<span class="title-icon"></span>
					</div>
				</div>
				<div class="judges-content">
					<div class="laoda vp">
						<a href="http://weibo.com/ety001" target="_blank"><img src="./templates/images/laoda.png" /></a>
						<span>·于业超<br/>中科院PHP高级工程师<br/>豆果美食高级工程师<br/>豆腐科技创始人<br/>鲁大学生网创始人</span>
					</div>
					<div class="panshu vp">
						<a href="http://weibo.com/waiting7436" target="_blank"><img src="./templates/images/panshu.png" /></a>
						<span>·潘信伍<br/>新浪前端架构师<br/>京东前端架构师<br/>10级网络部成员</span>
					</div>
					<div class="qingjie vp">
						<a href="http://weibo.com/u/2123010245" target="_blank"><img src="./templates/images/qingjie.png" /></a>
						<span>·马晓晴<br/>腾讯高级设计师<br/>10级美工部长</span>
					</div>
					<div class="junge vp">
						<a href="http://weibo.com/lonelysnowmen" target="_blank"><img src="./templates/images/junge.png" /></a>
						<span>·王军<br/>新浪前端工程师<br/>11级学生网副站长</span>
					</div>
					<div class="feishen vp">
						<a href="http://weibo.com/523123683" target="_blank"><img src="./templates/images/feishen.png" /></a>
						<span>·范明非<br/>百度前端工程师<br/>12级学生网站长</span>
					</div>
					<div class="nvshen vp">
						<a href="http://weibo.com/u/3161678827" target="_blank"><img src="./templates/images/nvshen.png" /></a>
						<span>·于新晓<br/>百度高级前端工程师<br/>12级网络部成员</span>
					</div>
				</div>
			</li>
			<li class="list-item teyao" name="teyao">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>特邀评委</h2>
						<span class="title-icon"></span>
					</div>
				</div>
				<div class="judges-teyao">
					<div class="cuiyongjian teyao">
						<a href="http://weibo.com/cuiyj" target="_blank"><img src="./templates/images/cuiyongjian.png" /></a>
						<span>·崔永健<br/>百度EFE前端工程师<br/>09级鲁大电视网络部长<br/>慈善义工网络部长<br/>鲁大在线联合创始人</span>
					</div>
					<div class="zhouweipeng teyao">
						<a href="http://secbone.com/" target="_blank"><img src="./templates/images/zhouweipeng.png" /></a>
						<span>·周伟鹏<br/>腾讯DNSPOD前端工程师<br/>09级网络部成员</span>
					</div>
					<div class="liaojiaguo teyao">
						<a href="https://github.com/jgmiao" target="_blank"><img src="./templates/images/liaojiaguo.png" /></a>
						<span>·缪家国<br/>新浪数据仓库工程师<br/>阿里云OS数据研发工程师<br/>11级网络部成员</span>
					</div>
					<div class="guoshuli teyao">
						<a href="http://www.uisharer.com/" target="_blank"><img src="./templates/images/guoshuli.png" /></a>
						<span>·过舒黎<br/>百度前端工程师<br/>图管会12级网络部长</span>
					</div>
					<div class="fanxiaoliang teyao">
						<a href="#" target="_blank"><img src="./templates/images/fanxiaoliang.png" /></a>
						<span>·范晓亮<br/>百度高级运维</span>
					</div>
				</div>
			</li>
			<li class="list-item awards" name="awards">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>奖项设置</h2>
						<span class="title-icon"></span>
					</div>
					<div class="awards-content">
						<div class="award1 aw">
							<span class="award-img"></span>
							<span class="aw-title">一等奖</span>
							<span class="aw-des">校级证书+奖品<br/>每组各一名</span>
						</div>
						<div class="award2 aw">
							<span class="award-img"></span>
							<span class="aw-title">二等奖</span>
							<span class="aw-des">校级证书+奖品<br/>每组各两名</span>
						</div>
						<div class="award3 aw">
							<span class="award-img"></span>
							<span class="aw-title">三等奖</span>
							<span class="aw-des">校级证书<br/>每组各三名</span>
						</div>
						<div class="some-des">
							(优秀获奖者可直接加入学生网，并有机会获得百度、腾讯、新浪等公司的内推机会)
						</div>
					</div>
				</div>
			</li>
			<li class="list-item contact">
				<div class="item-title">
					<div class="title-center">
						<span class="title-icon"></span>
						<h2>联系我们</h2>
						<span class="title-icon"></span>
					</div>
					<div class="contact-us">
							<span class="ct-title logo">关注我们：</span>
							<span class="sina logo"><a href="http://www.weibo.com/ludongstudent" target="_blank">鲁大学生网-LDSN</a></span>
							<span class="renren logo"><a href="http://page.renren.com/601129214/?checked=true" target="_blank">鲁大学生网</a></span>
							<span class="weixin logo"><a href="http://www.best73.com/weixin/ldsn001.html" target="_blank">ldsn001</a></span>
							<img src="./templates/images/getqrcode.jpg" class="weixin-img" alt="微信号ldsn001"/>
							<span class="qq logo"><a href="http://wpa.qq.com/msgrd?v=3&uin=1307183747&site=qq&menu=yes" target="_blank">QQ:1307183747</a></span>
					</div>
					<div class="friend-href">友情连接：
						<a href="http://www.ldu.edu.cn/" target="_blank">鲁东大学</a>|
						<a href="http://www.ldustu.com/" target="_blank">鲁大学生网</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- 底部版权 -->
	<div class="footer">
		&copy;2015 LDSN. <a href="http://www.ldustu.com">鲁大学生网</a>, ALL rights reserved.鲁 ICP 13008791号
	</div>
</body>
</html><?php }} ?>
