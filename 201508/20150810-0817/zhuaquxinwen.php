<?php
/*
	模拟抓取新浪社会最新新闻
*/
/*
   cURL
   /1.要进行 初始化
   /2.一些参数进行设置
   /3.发送请求
   /4.释放资源     
*/
$url = "http://news.sina.com.cn/society/";	//新浪新闻
$sinaHtml = file_get_contents($url);
preg_match_all("/<h2><a href=\"(.*?)\" target=\"_blank\">(.*?)<\/a><\/h2>/uis",$sinaHtml,$result);
$temp = [];
//
for($i=8;$i<=70;$i++){
	$temp[$i]['title']= $result[2][$i];	
	$temp[$i]['url']= $result[1][$i];	
}
var_dump($temp);
function UrlHttpGet($url){
	$ch = curl_init();
	//2.设置URL和相应的选项
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	//3.抓取URL并把它传递给浏览器
	$result = curl_exec($ch);
	//4.关闭cURL资源，并且释放系统资源
	curl_close($ch);
	return $result;
}
