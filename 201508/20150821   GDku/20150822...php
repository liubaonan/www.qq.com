<?php

/* header('Content-type:image/png');
$width=800;
$height=600;
$img=imagecreatetruecolor($width,$height);
$white=imagecolorallocatealpha($img,255,255,255,100);
imagefilledrectangle($img,1,1,$width-2,$height-2,$white);
$red=imagecolorallocatealpha($img,255,255,0,20);
imagefilledellipse($img,$width/3,$width/4,$width/3,$width/3,$red);

$yellow=imagecolorallocatealpha($img,255,0,0,20);
imagefilledellipse($img,$width/1.8,$width/4,$width/3,$width/3,$yellow);

$black=imagecolorallocatealpha($img,115,148,52,20);
imagefilledellipse($img,$width/2.2,$width/2.2,$width/3,$width/3,$black);

$string='www.liuxiaosen.com';       //imagestring 只有五个内置字体，12345，不能随意变换大小，可以用英文的转换
imagestring($img,$width,$width/1.3,$height/1.1,$string,$red);

imagepng($img); */


$img='b.jpg';
$percent=0.7;
$img2="d.jpg";
//第一幅图像
list($width,$height)=getimagesize($img);//取得图像大小，不用赋予宽度和高度 直接取得图像的宽高
$new_width=$width*$percent;  
$new_height=$height*$percent;
$src_img=imagecreatetruecolor($new_width,$new_height);//创建缩略后的图像(即真彩画布)
$image=imagecreatefromjpeg($img);// 从 JPEG 文件或 URL 新建一图像
imagecopyresampled($src_img,$image,0,0,0,0,$new_width,$new_height,$width,$height);
//第二幅图像
$print=imagecreatefromjpeg($img2);
list($print_width,$print_height)=getimagesize($img2);
imagecopymerge($src_img,$print,0,0,0,0,$print_width,$print_height,80);
//书写字符串
$zhstring='www.qq.com';
$font='ygyxsziti2.0.ttf';
$red2=imagecolorallocate($src_img,255,0,0);
imagettftext($src_img,80,20,200,500,$red2,$font,$zhstring);
//书写字符串
$string='www.liubaonan.com';
imagestring($src_img,7,500,100,$string,$red2);//imagestring 只有五个内置字体，12345，不能随意变换大小，可以用英文的转换
header('Content-type:image/jpeg');
imagejpeg($src_img);
imagedestroy($image);
imagejpeg($imgs);
            







/* 
//谢谢你长得那么好看，还肯为我点赞
header('Content-type:image/png');
$width=1300;
$height=300;
$img=imagecreatetruecolor($width,$height);
$red=imagecolorallocate($img,255,0,0);
imagefilledrectangle($img,1,1,$width-2,$height-2,$red);
//添加字符串
$string='谢谢你长得那么好看 还肯给我点赞';
$font="ygyxsziti2.0.ttf";
$white=imagecolorallocate($img,255,255,255);
imagettftext($img,58,0,40,165,$white,$font,$string);

imagepng($img);
imagedestroy($img); 
*/






/*
//类的复习
class person{
	
	public $name;
	public $age;
	const jing='景县';
	
	function __construct($name='',$age=''){
		$this->name=$name;
		$this->age=$age;
	}
	private  function fun(){
		echo "唐山学院东校区&nbsp".$this->name.'年龄'.$this->age.'&nbsp来自'.self::jing.'<br/>';
	}
	function show(){
		$this->fun();
	}
	function get($name){
		$this->name=$name;
	}
	function __destruct(){
		echo "释放".$this->name;
	}
	function __tostring(){
		return '没错'.$this->name.$this->age.'<br/>';
	}
	
	
}
$liu=new person('刘宝南','22');
$liu->show();
$liu->get('崔艳伟');
$liu->show();
$liu->get('刘小森');
$liu->show();
echo $liu;



class person2{
	public $name;
	
	function fun(){
		echo "我叫".$this->name;
	}
	
}

class person3 extends person2{
	public $height;
	
	function fun(){
		parent::fun();
		echo '身高'.$this->height;
	}
}
$liu=new person3;
$liu->name='刘宝南';
$liu->height='177';
$liu->fun();



abstract class A{
	
	function fun(){
		echo "哈哈";
	}
	abstract function fun2();  //抽象方法 没有方法体，见笔记41；
	
}
class  B extends A{
	function fun2(){
		echo "吼吼";
	}
}
$liu=new B;
$liu->fun2();




class person2{
	public $name;
	static $age;
	function fun(){
		echo "我叫".$this->name.'三年后'.self::$age;
	}
	
}
class person3 extends person2{
	public $height;
	
	function fun(){
		parent::fun();
		echo '身高'.$this->height;
	}
}
$liu=new person3;
person2::$age=25;
$liu->name='刘宝南';
$liu->height='177';
$liu->fun();


echo "<br/>";

$array=[1,2,3,3,4,5,6];

var_dump(array_reverse($array,true));
var_dump(count(array_unique($array)));//移除数组中重复的值。

$a='ALDFHKALSKLJSHFKJaslfj';
echo strrev($a);



try{
	$a=2;
	if($a==3){
		echo '回答正确';
	}else{
		throw new liu('异常处理',1);
	}
}catch(liu $bao){
	echo $bao->getMessage();
}
class liu extends Exception{
	const ERROR_SERVER = 1;
	const ERROR_CLIENT = 2;	
	public function showError(){
		if($this->getCode() == self::ERROR_SERVER)
			return "我说是服务器出现的问题。你敢说不是么?";
		if($this->getCode() == self::ERROR_CLIENT)
			return "我说是客户端出现的问题。你敢说不是么?";		
	}
}
echo "脚本运行到这里@了";



*/



