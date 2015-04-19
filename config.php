<?php
//定义基本路径
define('BASEDIR',__DIR__);
$config = array(
	'viewconfig' => array(
		'left_delimiter'   => '{',
		'right_delimiter'  => '}',
		'template_dir'	   => './templates',
		'compile_dir'      => './view/templates_c',
		),
	'dbconfig'   => array(
		'dbms' 		   	   => 'mysql',
		'dbhost'    	   => 'localhost',
		'dbuser'		   => 'arjason',
		'dbpassword'	   => 'woai110..',
		'dbname'		   => 'baoming'
		),
	);
