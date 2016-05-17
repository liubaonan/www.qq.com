<?php
/*
 * webservice 服务端
 */
//1:引入类库
include 'lib/nusoap.php';

$NAMESPACE = "";
$server = new nusoap_server();

//配置WSDL
$server->configureWSDL('刘宝南',$NAMESPACE,'http://localhost/webservice/demo/Server.php');

//设置编码类型
$server->soap_defencoding = "utf-8";
$server->decode_utf8 = false;
$server->xml_encoding = "utf-8";

//注册要提供的服务
$server->register(
	'Hello',
		array('user_name'=>'xsd:string','password'=>'xsd:string'),
		array('return'=>'xsd:string'),
		$NAMESPACE); //命名空间可选参数

function Hello($user_name,$password){
	if($user_name == 'admin' && $password == 'admin'){
		return "欢迎您:".$user_name;
	}else{
		return	'0';
	}
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

?>