<?php
header("Content-type:text/html;charset='utf-8'");
include 'lib/nusoap.php';

$url = "http://www.qq.com/www.qq.com/20151029%20%20webservice/webservice.php?wsdl";
$client = new nusoap_client($url);
	
$client->soap_defencoding = "utf-8";
$client->decode_utf8 = false;
$client->xml_encoding = "utf-8";

$arr = [
	'user_name'=>'admin',
	'password'=>'admin'
];
$str = $client->call('Hello',$arr);

echo $str;
echo "<hr/>";
$b = 0;
for($a=0;$a<10;$a++){
	$b+=0.1;
}
echo $b;
if($b=1){
	echo "success";
}else{
	echo "default";
}


?>

