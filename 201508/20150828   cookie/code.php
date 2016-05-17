<?php


class code {
	
	protected $number;
	protected $width;
	protected $height;
	protected $code;
	protected $randstring="123456789mnbvcxzasdfghjkloiuytrERTYUIKJHGFDSAZXCVBNM";
	protected $font="BAUHS93.TTF";
	protected $font_size=80;
	
	public function __construct($width="600",$height="300",$number=4){
		
		$this->number=$number;
		$this->width=$width;
		$this->height=$height;
		
	}

	//创建随机数
	protected function createsui(){
		$codesui=strlen($this->randstring)-1;
		return substr($this->randstring,rand(0,$codesui),1);//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	}

	//创建画布资源
	protected function createimg(){		
		$this->img=imagecreatetruecolor($this->width,$this->height);
		$imgcolor=imagecolorallocate($this->img,rand(1,155),rand(1,155),rand(1,155));
		imagefilledrectangle($this->img,0,0,$this->width,$this->height,$imgcolor);		
	}
	
	//书写验证字符串
	protected function createcode(){	
		for($i=0;$i<=$this->number;$i++){		
			$x=($this->width/$this->number)*$i+50;
			$white=imagecolorallocate($this->img,rand(156,255),rand(156,255),rand(156,255));
			imagettftext($this->img,$this->font_size,rand(-30,40),$x,$this->height/2,$white,$this->font,$this->createsui());
		}
	}
	
	protected function createrao(){
		
		$total=500;
		for($a=0;$a<=$total;$a++){
			
			$white=imagecolorallocatealpha($this->img,255,255,255,rand(80,100));
			imagettftext($this->img,rand(5,35),0,rand(0,$this->width),rand(0,$this->height),$white,$this->font,"*./.\\");
		}
		
	}
	
	public function show(){
		//header("Content-type:image/png");
		$this->createsui();
		$this->createimg();
		$this->createcode();
		$this->createrao();
		imagepng($this->img);
		imagedestroy($this->img);
	}
	
}

$liu=new code();
$liu->show();


















































































































































