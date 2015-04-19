<?php
namespace ldsn;
class LDSN
{
	public static $controller;
	public static $method;
	public static $view;
	private static $config;
	private static $cAllow = array('index');
	private static $mAllow = array('index','register','power1','power2','setRegister','upfile','setUpfile','uptoken');
	private static function init_db()
	{
		DB::init(self::$config['dbconfig']);
		DB::connect();
	}
	private static function init_view()
	{
		self::$view = ORG('Smarty/','Smarty',self::$config['viewconfig']);
	}
	private static function init_controllor()
	{
		@self::$controller = in_array($_GET['c'],self::$cAllow)?daddslashes($_GET['c']):'index';
	}
	private static function init_method()
	{
		@self::$method     = in_array($_GET['m'],self::$mAllow)?daddslashes($_GET['m']):'index';
	}
	public static function run($config)
	{
		self::$config = $config;
		self::init_db();
		self::init_view();
		self::init_controllor();
		self::init_method();
		C(self::$controller, self::$method);
	}
}