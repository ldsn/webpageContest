<?php
namespace libs\controller;

class indexController
{
	/**
	 * 鲁大学生网 网页制作大赛首页
	 *@author Jason
	 */
	public function index()
	{	
		$index  = M('index');
		$num    = $index  -> getnum();
		\ldsn\LDSN::$view ->assign('num',$num);
		// $index = M('index');
		// $index ->index();
		\ldsn\LDSN::$view ->display('index/index.tpl');
	}
	/**
	 * 报名网页后台
	 *@author Jason
	 */
	public function power1()
	{
		$index  = M('index');
		$sheji  = $index -> findall('register',1);
		$kaifa  = $index -> findall('register',2);
		$group  = $index -> findall('register',3);
		\ldsn\LDSN::$view->assign('sheji',$sheji);
		\ldsn\LDSN::$view->assign('kaifa',$kaifa);
		\ldsn\LDSN::$view->assign('group',$group);
		\ldsn\LDSN::$view->display('back/power1.tpl');
	}
	/**
	 * 上传作品网页后台
	 *@author Jason
	 */
	public function power2()
	{
		$index  = M('index');
		$sheji  = $index -> findall('baoming',1);
		$kaifa  = $index -> findall('baoming',2);
		$group  = $index -> findall('baoming',3);
		\ldsn\LDSN::$view->assign('sheji',$sheji);
		\ldsn\LDSN::$view->assign('kaifa',$kaifa);
		\ldsn\LDSN::$view->assign('group',$group);
		\ldsn\LDSN::$view->display('back/power2.tpl');
	}
	/**
	 * 网页大赛报名页面
	 *@author Jason
	 */
	public function register()
	{
		\ldsn\LDSN::$view->display('user/register.tpl');
	}
	/**
	 * 接收网页报名数据
	 * 
	 */
	public function setRegister()
	{

		$name  = check_str($_POST['user']);
		$phone = check_str($_POST['phone']);
		$data = array(
			'user'		 => $name,
			'type'		 => check_str($_POST['type']),
			'major'		 => check_str($_POST['major']),
			'email'		 => check_str($_POST['email']),
			'phone'		 => $phone,
			'time'		 =>time(),
			);
		$index = M('index');
		$res   = $index -> insert($data);
		$fnum  = $index ->getf();
		$return = array(
			'code' =>2,
			'msg'=>'error',
			);
		if($res){
			 //调用函数发送短信	
			$return = array(
				'res'  =>$res,
  				'name' =>$name,
				'funm' =>$fnum,
				'code' =>1,
				'msg'  =>'报名成功，正在跳转',
				);
			sendmsg($name,$phone,$fnum);
		}else{
			$return = array(
				'code' =>1,
				'msg'  =>'error,报名失败',
				);
		}
		echo json_encode($return);
	}
	/**
	 * 网页大赛作品提交页面
	 *@author Jason
	 */
	public function upfile()
	{

		\ldsn\LDSN::$view->display('user/upfile.tpl');
	}
	/**
	 * 接受报名数据页面
	 */
	public function setUpfile()
	{

		$data = array(
			'user'		 => check_str($_POST['user']),
			'type'		 => check_str($_POST['type']),
			'major'		 => check_str($_POST['major']),
			'email'		 => check_str($_POST['email']),
			'phone'		 => check_str($_POST['phone']),
			'name'		 => check_str($_POST['major']),
			'description'=> check_str($_POST['description']),
			'upfile'	 => $_POST['upfile'],
			'time'		 =>time(),
			);
		$index = M('index');
		$res   = $index -> upfile($data);
		if($res){
			$return = array(
				'res'  =>$res,
				'code' =>1,
				'msg'  =>'作品提交成功，正在跳转',
				);
		}else{
			$return = array(
				'res'  =>$res,
				'code' =>1,
				'msg'  =>'作品提交失败',
				);
		}
		echo json_encode($return);
	}
	/**
	 * 生成UPTOKEN
	 */
	public function uptoken()
	{
		$bucket = 'baiketest';
		$accessKey = 'W_Lf3TuOZiPuA1FCtCbFEx6AGKZQBV5Sk_yaHyt8';
		$secretKey = 'qlyHVubJ9rK7UKjyDsk8Z_YDIJSw3YgmgKC8MzY2';

		Qiniu_SetKeys($accessKey, $secretKey);
		$putPolicy = new \Qiniu_RS_PutPolicy($bucket);
		$upToken = $putPolicy->Token(null);
		if(!$upToken){
			$upToken = 'error';
		}
		$arr=array(
			"uptoken"=>$upToken,
			);

		print_r(json_encode($arr));
	}
}