<?php
/**
 * 自动载入函数
 *
 *@author Jason <wangfengxin@ldustu.com>
 *@param  $class 类名
 *
 */
function autoload($class)
{
    require (BASEDIR.'\\'.$class.'.class.php');
}
/**
 * C方法 调用控制器和方法
 *@author Jason
 *@param  $controller  控制器名称
 *@param  $method      对应方法
 */
function C($controller,$method)
{   
    require_once ('./libs/controller/'.$controller.'Controller.class.php');
    $controller = 'libs\\controller\\'.$controller.'Controller';
    $obj =  new $controller();
    $obj -> $method();
}
/**
 * M方法 初始化一个模型对象
 *@author Jason
 *@param  $model  模型名称
 *@return $obj    返回对象
 */
function M($model)
{
    require_once ('./libs/model/'.$model.'Model.class.php');
    $model = 'libs\\model\\'.$model.'Model';
    $obj   = new $model;
    return $obj;
}
/**
 * ORG方法 初始化第三方类对象
 *@author Jason
 *@param  $path  类对象路径
 *@param  $name  类名称
 *@param  $viewconfig  类初始化属性
 *@return $obj   返回对象
 */
function ORG($path, $name, $viewconfig)
{
    require_once('libs/org/'.$path.$name.'.class.php');
    $obj = new $name();
    if(!empty($params))
    {
        foreach ($params as $key => $value) {
            $obj->$key = $value;
        }
    }
    return $obj;
}
/**
 * html过滤函数
 * @param $str 接受传来的数据
 * @author Jason
 *
 */
function daddslashes($str)
{
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}
/**
 * 过滤函数
 * @author form web
 */
function check_str($string, $isurl = false) 
{ 
    $string = preg_replace('/[\\x00-\\x08\\x0B\\x0C\\x0E-\\x1F]/','',$string); 
    $string = str_replace(array("\0","%00","\r"),'',$string); 
    empty($isurl) && $string = preg_replace("/&(?!(#[0-9]+|[a-z]+);)/si",'&',$string); 
    $string = str_replace(array("%3C",'<'),'<',$string); 
    $string = str_replace(array("%3E",'>'),'>',$string); 
    $string = str_replace(array('"',"'","\t",' '),array('“','‘',' ',' '),$string); 
    return trim($string); 
} 
/**
 * 模拟POST发送数据
 */
function sendmsg($name,$phone,$fnum)
{
    $post_data = array();
    $post_data['tpl_id'] = "753621";
    $post_data['tpl_value'] = "#name#={$name}&#fnum#={$fnum}";
    $post_data['apikey'] = "0d679b8688ff199c06196328e578eeae";
    $post_data['mobile'] = $phone;
    $url='http://yunpian.com/v1/sms/tpl_send.json';
    $o="";
    foreach ($post_data as $k=>$v)
    {
        $o.= "$k=".urlencode($v)."&";
    }
    $post_data=substr($o,0,-1);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL,$url);
    //为了支持cookie
    // curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_exec($ch);
}