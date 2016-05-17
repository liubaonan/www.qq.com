<?php   
/*
jpeg图片缩放类
1.参数：原始图片，图片缩放宽高，缩放后宽高
2.方法：缩放所用获取函数    imagecreatefromjpeg 或者 imagecreatefrompng
		输出函数				imagepng       imagejpeg
*/

class imgScale{
	protected $old_width;//缩放前宽
	protected $old_heigh;//缩放前高
	protected $new_width;//缩放后宽
	protected $new_heigh;//缩放后高
	protected $imgName;//原始图片文件
	protected $newimage;//新图片

	public function __construct($imgName,$newimage,$new_width,$new_heigh,$width_percent,$heigh_percent){  //percent代表缩放比例，类型为float，当percent的值为0时，调用输入的宽高值
		$this->newimage=$newimage;
		$this->imgName=$imgName;
		list($this->old_width,$this->old_heigh)=getimagesize($this->imgName);//获得原图片的宽高值
		$this->new_width=($width_percent==0)?$new_width:$this->old_width*($width_percent);//缩放后宽,当输入percent为0时调用
		$this->new_heigh=($heigh_percent==0)?$new_heigh:$this->old_heigh*($heigh_percent);//缩放后高
	}
	  public function Scale(){
		  $imgResource=imagecreatefromjpeg($this->imgName);			//缩放前图片资源
		  //$oldimg=imagecreatetruecolor($this->old_width,$this->old_heigh);
		  $newImgresource=imagecreatetruecolor($this->new_width,$this->new_heigh);//缩放后画布资源
		  imagecopyresampled($newImgresource,$imgResource,0,0,0,0,$this->new_width,$this->new_heigh,$this->old_width,$this->old_heigh);//缩放  
		//header("Content-type:image/jpeg");
		imagejpeg($newImgresource,$this->newimage);
		imagedestroy($imgResource);
		imagedestroy($newImgresource);  
	  }
}
/*
$name="D:/wamp/www/www.message.com/upload/2015/09/new_1441986948763.jpg";
$zoom=new imgScale($name,60,62,0,0);
$zoom->Scale();

*/


   
/*
jpeg图片缩放类
1.参数：原始图片，图片缩放宽高，缩放后宽高
2.方法：缩放所用获取函数    imagecreatefromjpeg 或者 imagecreatefrompng
		输出函数				imagepng       imagejpeg
*/

class pngScale{
	protected $old_width;//缩放前宽
	protected $old_heigh;//缩放前高
	protected $new_width;//缩放后宽
	protected $new_heigh;//缩放后高
	protected $pngName;//原始图片文件
	protected $newpng;//新文件

	public function __construct($pngName,$newpng,$new_width,$new_heigh){  //缩放后宽高
	$this->newpng=$newpng;
		$this->pngName=$pngName;
		list($this->old_width,$this->old_heigh)=getimagesize($this->pngName);//获得原图片的宽高值
		//$this->new_width=($width_percent==0)?$new_width:$this->old_width*($width_percent);//缩放后宽,当输入percent为0时调用
		//$this->new_heigh=($heigh_percent==0)?$new_heigh:$this->old_heigh*($heigh_percent);//缩放后高
		if($new_width==0&&$new_heigh!=0){
			$this->new_heigh=$new_heigh;
			$this->new_width=$this->old_width/$this->old_heigh*$this->new_heigh;
		}
		if($new_width!=0&&$new_heigh==0){
			$this->new_width=$new_width;
			$this->new_heigh=$this->old_heigh/$this->old_width*$this->new_width;
		}
		if($new_width!=0&&$new_heigh!=0){
			$this->new_width=$new_width;
			$this->new_heigh=$new_heigh;
		}
		if($new_width==0&&$new_heigh==0){
			$this->new_width=$this->old_width;
			$this->new_heigh=$this->old_heigh;
		}
		
	}
	  public function Scale(){
		  $pngResource=imagecreatefrompng($this->pngName);			//缩放前图片资源
		  //$oldimg=imagecreatetruecolor($this->old_width,$this->old_heigh);
		  $newPngresource=imagecreatetruecolor($this->new_width,$this->new_heigh);//缩放后画布资源
		  imagecopyresampled($newPngresource,$pngResource,0,0,0,0,$this->new_width,$this->new_heigh,$this->old_width,$this->old_heigh);//缩放
		 
		//header("Content-type:image/png");
		imagepng($newPngresource,$this->newpng);
		imagedestroy($pngResource);
		imagedestroy($newPngresource);  
	  }
}







/*gif*/
class gifScale{
	protected $old_width;//缩放前宽
	protected $old_heigh;//缩放前高
	protected $new_width;//缩放后宽
	protected $new_heigh;//缩放后高
	protected $pngName;//原始图片文件
	protected $newpng;//新文件

	public function __construct($pngName,$newpng,$new_width,$new_heigh){  //缩放后宽高
	$this->newpng=$newpng;
		$this->pngName=$pngName;
		list($this->old_width,$this->old_heigh)=getimagesize($this->pngName);//获得原图片的宽高值
		//$this->new_width=($width_percent==0)?$new_width:$this->old_width*($width_percent);//缩放后宽,当输入percent为0时调用
		//$this->new_heigh=($heigh_percent==0)?$new_heigh:$this->old_heigh*($heigh_percent);//缩放后高
		if($new_width==0&&$new_heigh!=0){
			$this->new_heigh=$new_heigh;
			$this->new_width=$this->old_width/$this->old_heigh*$this->new_heigh;
		}
		if($new_width!=0&&$new_heigh==0){
			$this->new_width=$new_width;
			$this->new_heigh=$this->old_heigh/$this->old_width*$this->new_width;
		}
		if($new_width!=0&&$new_heigh!=0){
			$this->new_width=$new_width;
			$this->new_heigh=$new_heigh;
		}
		if($new_width==0&&$new_heigh==0){
			$this->new_width=$this->old_width;
			$this->new_heigh=$this->old_heigh;
		}
		
	}
	  public function Scale(){
		  $pngResource=imagecreatefromgif($this->pngName);			//缩放前图片资源
		  //$oldimg=imagecreatetruecolor($this->old_width,$this->old_heigh);
		  $newPngresource=imagecreatetruecolor($this->new_width,$this->new_heigh);//缩放后画布资源
		  imagecopyresampled($newPngresource,$pngResource,0,0,0,0,$this->new_width,$this->new_heigh,$this->old_width,$this->old_heigh);//缩放
		 
		//header("Content-type:image/png");
		imagegif($newPngresource,$this->newpng);
		imagedestroy($pngResource);
		imagedestroy($newPngresource);  
	  }
}




?>









