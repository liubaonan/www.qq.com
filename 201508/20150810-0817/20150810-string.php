<?php
/*
	为了放置输出格式乱码
	文件保存格式 必须与输出格式一致
	utf-8  GBK	
*/
// 这样做就会提示下载 PDF 文件 downloaded.pdf
//header('Content-Disposition: attachment; filename="downloaded.pdf"');
//告诉浏览器 我要以什么格式进行输出
//header("Content-type:text/html;charset=utf-8");
echo "<hr />";
//print 值允许输出一个字符串，而ECHO 可以输出多个字符串
//echo和print都可以做输出,不同的是,echo不是函数,没有返回值,而print是一个函数有返回值,所以相对而言如果只是输出。
$string = "启奥";
$number = 12;
$total = 100;
$f = 2.3;
//启奥 共有教师12名 学生100名
/*
sprintf 有返回这
printf 直接输出格式化后的结果
*/
$temp = sprintf("%s共有教师%d名学生%d名sprintf",$string,$number,$total);
printf("%s共有教师%d名学生%d名,我要输出小数:%f",$string,$number,$total,$f);
echo "<br />";
echo $temp;
/*
	去除空白字符串
	ltrim(); 去除左边；
	rtrim();去除右边；
	trim();去除两边；
*/
$temp = "\t    我叫    CCCCCC洋洋，是启    dddddd奥20    15届 PHP班   学生         1AAAAAzzzzzz ";
echo "\r\n",ltrim($temp);
echo "\r\n",rtrim($temp);
echo "\r\n",trim($temp);
echo "\r\n",str_replace(" ","",$temp);
$temp2 = str_replace(" ","",$temp);
echo "\r\n",str_replace("\t","",$temp2);


$temp = <<<EOT
	</ul>
	<h2>HTML 媒体</h2>
	<ul>
	<li><a href="/html/html_media.asp" title="HTML 多媒体">HTML 媒体</a></li>
	<li><a href="/html/html_object.asp" title="HTML Object 元素">HTML 对象</a></li>
	<li><a href="/html/html_audio.asp" title="HTML 音频">HTML 音频</a></li>
	<li><a href="/html/html_video.asp" title="HTML 视频">HTML 视频</a></li>
	</ul>
	<h2>HTML XHTML</h2>
	<ul>
	<li><a href="/html/html_xhtml.asp" title="XHTML 简介">XHTML 简介</a></li>
	<li><a href="/html/html_xhtml_elements.asp" title="XHTML - 元素">XHTML 元素</a></li>
	<li><a href="/html/html_xhtml_attributes.asp" title="XHTML - 属性">XHTML 属性</a></li>
	</ul>
EOT;
$entityHtml = htmlspecialchars($temp);			//把html 特殊字符 转化为实体
$html = htmlspecialchars_decode($entityHtml);	//把实体转化为html 代码	
echo $entityHtml;						
echo $html;

//删除html 标签
echo strip_tags($html);

echo "<hr />";
//字符串翻转 不适应中文字符串翻转;

$enString = "adfasdfasdfasdfsadfasdfAAAAZZZZ";
$zhString ="启奥科技实训学校";

echo strrev($enString);
//echo strrev($zhString)

/*
	计算字符串长度
	utf8 下格式字符长度
	英文、数字及特殊字符 都看成一个字符
	一个中文字符 是3个字符；
	
	GBK格式下 一个中文字符 是2个字符
	
*/

$enString = "aZ1@+] ";
echo strlen($enString);
$zhString = "中";
echo strlen($zhString);

/*
	字符编码的转换
	iconv()
*/
echo "<br />";
//把字符串UTF8"中"转换成GBK 格式编码集的格式 字符串
$zhString = "中国河北唐山启奥科技实训学校";
echo strlen($zhString);
$gbkString = iconv("utf-8","GBK",$zhString);
echo strlen($gbkString);

/*
	字符串截取 subStr()
*/
echo "<br />";
$enString = "adsfasdfasdfasdf11113213123";
echo substr($enString,-3,2);
echo "<br />";
$string = "11@中";
//echo subStr($zhString,10,5);
echo mb_substr($string,0,5,"utf-8");
echo "<br />";
echo strlen($string);
echo "<br />";
echo mb_strlen($string);
echo "<br />";
echo mb_strlen($string,"utf-8");
echo "<br />";
/*
	md5()//字符串加密
*/
$password = "中文";
echo md5($password);


