<?php
class code{
	protected $width;
	protected $height;
	protected $number;
	protected $img;
	protected $randStr='12ewt345dy67w8ert9mnbvrty46cxza456sd654fghjklo456iuytreMN13B79GTY43HUJI456KOLPQ4687WSAE4767DZXF';
	protected $font='ygyxsziti2.0.ttf';
	protected $font_size=150;
	protected $code;

	public  function __construct($width='1300',$height='800',$number='4'){
		$this->width=$width;
		$this->height=$height;
		$this->number=$number;
	}
	//建立随机数
	protected function codeStr(){
		$strlen=strlen($this->randStr)-1;
		return substr($this->randStr,rand(1,$strlen),1);
	}
	//建立画布
	protected function img2(){
		$this->img=imagecreatetruecolor($this->width,$this->height);
		$bao=imagecolorallocate($this->img,rand(0,155),rand(0,155),rand(0,155));
		imagefilledrectangle($this->img,0,0,$this->width,$this->height,$bao);
	}
	//建立随机因子
	protected function createsui(){
		for($i=0;$i<$this->number;$i++){
			$x=$this->width/$this->number*$i+80;
			$white=imagecolorallocate($this->img,rand(156,255),rand(156,255),rand(156,255));
			imagettftext($this->img,$this->font_size,rand(-40,30),$x,$this->height/2,$white,$this->font,$this->codeStr());
		}
	}	
	//书写干扰因素
	protected function createrao(){
		$total=1000;
		for($a=0;$a<=$total;$a++){
			$white2=imagecolorallocatealpha($this->img,255,255,255,rand(80,100));
			imagettftext($this->img,rand(5,35),0,rand(0,$this->width),rand(0,$this->height),$white2,$this->font,"*./.~.\\");
		}
	}
	
	public function show(){
		header('Content-type:image/png');
		$this->codeStr();
		$this->img2();
		$this->createsui();
		$this->createrao();
		imagepng($this->img);
		
	}
	
}
$liu=new code();
$liu->show();

