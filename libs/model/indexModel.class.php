<?php
namespace libs\model;
use ldsn;
class indexModel
{
	/**
	 * 模块主要函数
	 * @author Jason
	 */
	public function index()
	{
		$db  = new ldsn\DB();
		$res = $db ->findnum();
		echo json_encode($res);
	}
	/**
	 * 主页获取参与人数
	 */
	public function getnum()
	{
		$db  = new ldsn\DB();
		$res = $db ->findnum('register');
		return $res;
	}
	/**
	 * 插入报名人数
	 */
	public function insert($data)
	{
		$db  = new ldsn\DB();
		$res = $db ->insert($data);
		return $res;
	}
	/**
	 * 插入上传作品数据
	 */
	public function upfile($data)
	{
		$db  = new ldsn\DB();
		$res = $db ->upfile($data);
		return $res;		
	}
	/**
	 * 取出数据库中的所有数据
	 */
	public function findall($table,$type)
	{
		$db = new ldsn\DB();
		$res = $db ->findall($table,$type);
		return $res;
	}
	/**
	 * 获取F码
	 */
	public function getf()
	{
		$db = new ldsn\DB();
		$res = $db ->getf();
		return $res;
	}
	
}