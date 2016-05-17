<?php

/*
	验证码

*/

class code{

	protected $width;				//图像宽度
	protected $height;				//图像高度
	protected $number;				//显示的字符个数
	
	protected $randStr ="abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789";
	protected $code;				//随机数
	
	protected $img;					//画布资源
	protected $font="BRLNSB.TTF";		//字体
	protected $font_size = 25;
	
	protected $codestr;			//存储显示的字符串



	/*
		@number int 显示的字符个数
	*/
	public function __construct($number = 4,$width=160,$height=50){
	
		$this->number = $number;
		$this->width= $width;
		$this->height = $height;
		$this->codestr = "";
	}
	
	//随机取出一个随机因子
	protected function getcode(){
		$strlen = strlen($this->randStr)-1;
		return substr($this->randStr,rand(0,$strlen),1);
	}
	
	//创建画布资源 ,并填充颜色
	protected function createImgResouce(){
	
		$this->img = imagecreatetruecolor($this->width,$this->height);	//1
		$groundColor = imagecolorallocate($this->img,rand(0,156),rand(0,156),rand(0,156));	//定义矩形颜色
		imagefilledrectangle($this->img,0,0,$this->width,$this->height,$groundColor);	
	}
	
	//书写验证字串
	protected function createCode(){
	
		
		for($i=0;$i<$this->number;$i++){
		
			$x = ($this->width/$this->number)*$i+10;
			
			$code = $this->getcode();
			$this->codestr .= $code;
			$codeColor = imagecolorallocate($this->img,rand(160,250),rand(160,250),rand(160,250));	//定义矩形颜色
			imagettftext($this->img,$this->font_size,rand(-40,30),$x,40,$codeColor,$this->font,$code);
		}
	
	}
	
	//书写干扰元素
	protected function createNoice(){
	
		$total = 100;
		for($i=0;$i<$total;$i++){
			$noiceColor = imagecolorallocatealpha($this->img,250,250,250,rand(80,100));
			imagettftext($this->img,rand(5,10),0,rand(1,$this->width),rand(1,$this->height),$noiceColor,$this->font,"*");
		}
	
	}

	//输出验证码
	public function showCode(){
	
		session_start();	//启动session
		header("Content-type:image/png");
		$this->createImgResouce();				//创建画布并填充资源
		$this->createNoice();					//干扰元素
		$this->createCode();
		$_SESSION['code'] = strtolower($this->codestr);
		imagepng($this->img);
		imagedestroy($this->img);
	}
	

}


$code = new code();
$code->showCode();

