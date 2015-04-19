<?php
header("Content-Type:text/html;charset=utf-8");
include('./config.php');
include('./ldsn/ldsn.php');
include('./ldsn/function.php');
include('./ldsn/db.class.php');
require_once("./libs/org/qiniu/rs.php");
//$view = ORG('Smarty/','Smarty',$config['viewconfig']);
ldsn\LDSN::run($config);