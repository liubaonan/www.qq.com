<?php
class code{
	
	protected $width;
	protected $height;
	protected $number;
	protected $img;
	protected $randStr="1s23456798mnbvcxzasdfqghjkloYHDNMJUIK,LPOASZX";
	protected $font="ygyxsziti2.0.ttf";
	protected $font_size=50;
		
	public function __construct($width="300",$height="200",$number=4){
		
		$this->width=$width;
		$this->height=$height;
		$this->number=$number;
		
	}
	//取出随机数
	protected function createsuishu(){
		
		$strlen=strlen($this->randStr)-1;
		return substr($this->randStr,rand(0,$strlen),1);
	
	}
	//创建画布资源
	protected function createimg(){
		
		$this->img=imagecreatetruecolor($this->width,$this->height);
		$createcolor=imagecolorallocate($this->img,rand(1,155),rand(1,155),rand(1,155));
		imagefilledrectangle($this->img,0,0,$this->width,$this->height,$createcolor);
		
	}
	//创建随机因子
	protected function createsuiyin(){
		
		
		for($i=0;$i<=$this->number;$i++){
			$x=$this->width/$this->number*$i+30;
			$codeColor=imagecolorallocate($this->img,rand(155,255),rand(155,255),rand(155,255));
			imagettftext($this->img,$this->font_size,rand(-40,30),$x,$this->height/2,$codeColor,$this->font,$this->createsuishu());
		}
	}
	
	protected function createrao(){
		
		$total=1100;
		for($a=1;$a<=$total;$a++){
			$colorrao=imagecolorallocate($this->img,255,255,255);
			imagettftext($this->img,rand(1,13),0,rand(0,$this->width),rand(0,$this->height),$colorrao,$this->font,"*"."~./");
		}
	}
	public function show(){
		
		$this->createsuishu();
		$this->createimg();
		$this->createsuiyin();
		$this->createrao();
	
		header("Contend-type:image/png");
		imagepng($this->img);
	}
	
}

$liu=new code();
$liu->show();

























