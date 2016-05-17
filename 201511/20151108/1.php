<?php
echo $_SERVER['REMOTE_ADDR'];
//var_dump($_SERVER);

//echo getenv('REMOTE_ADDR');
echo gethostbyname("www.bolaiwu.com");
//echo file_get_contents('http://www.sina.cn')


/* $readcontents = fopen("http://www.baidu.com",'rb');//打开文件句柄
$content = stream_get_contents($readcontents);//与 file_get_contents() 一样，但是 stream_get_contents() 是对一个已经打开的资源流进行操作，并将其内容写入一个字符串返回。 返回的内容取决于 maxlength 字节长度和 offset 指定的起始位置。
fclose($readcontents);//关闭已经打开的文件指针
echo $content; //输出 */
echo "<br/>";
$script_name = basename(__file__); print_r($script_name);//返回文件名
$a = 'abcdefg';

echo substr($a,0,1)
?>