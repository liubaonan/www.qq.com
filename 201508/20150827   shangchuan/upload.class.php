<?php
/*
	文件上传类
	文件上传上去
	然后我们要求判断文件上传类型
	并且限制上传文件大小 
	否则我们返回文件错误类型 		
*/
class upload{

	protected $files;		//上传的文件
	protected $oldName;		//上传文件的原名字	$_FILES['picture']
	protected $newName;		//上传文件新的名字
	protected $allowType;	//允许的文件类型
	protected $type;		//上传文件类型
	protected $allowSize;	//允许上传的文件大小
	protected $size;		//文件的大小
	
	protected $errorCode;	//文件上传错误码
	protected $uploadPath;	//文件上传的路径
	

	//构造函数
	public function __construct($files){
	
		$this->files = $files;				//上传的文件
		$this->oldName = $this->files['name'];	//文件原名字
		$this->type = $this->files['type'];		//文件类型
		$this->size = $this->files['size'];		//文件类型
		
		//允许上传文件类型
		$this->allowType = ['image/gif','image/jpeg','image/pjpeg','image/png','image/x-png'];
		$this->allowSize = 1;		//10M 最大
		$this->uploadPath = "./upload/".date("Y")."/".date("m");	//文件上传的目录

	}
	
	//获取错误类型 
	protected function getErrorCode($errorCode){
	
		$msg = "";
		switch($errorCode){
			case 0:
				$msg = false; 
				break;
			case 1:
				$msg =  "上传文件的大小超出了php.ini 的限制值"; 
				break;
			case 2:
				$msg =  "上传文件的大小超出了php.ini 的限制值"; 
				break;
			case 3:
				$msg = "文件部分上传";
				break;
			case 4:
				$msg = "没有上传任何文件";
				break;
			case 5:
				$msg = "文件类型不符合，只允许上传.".implode(",",$this->allowType);
				break;
			case 6:
				$msg = "文件大小最多为.".$this->allowSize."M";
				break;
		}
		return $msg;
	}

	//判断是否是允许的文件类型,并返回错误信息
	protected function checkFilesType(){
		foreach($this->type as $k =>$t){
			if(!in_array($t,$this->allowType)){
				if($this->files['error'][$k] == 4){
						$this->files['errorMsg'][$k] = $this->oldName[$k].$this->getErrorCode(4);
				}else{
						$this->files['errorMsg'][$k] = $this->oldName[$k].$this->getErrorCode(5);
				}
			}else{
						$this->files['errorMsg'][$k] = $this->getErrorCode($this->files['error'][$k]);
			}
		}
	}
	
	//判断是否超出大小
	protected function checkAllowSize(){
		foreach($this->size as $k=>$s ){
			if(	$s > $this->allowSize*1024*1024){
				$this->files['errorMsg'][$k] = $this->oldName[$k].$this->getErrorCode(6);
				
			}elseif(!$this->files['errorMsg'][$k]){
				  $this->files['errorMsg'][$k] = $this->getErrorCode($this->files['error'][$k]);
			}
		}
	}
	
	//进行路径文件夹的建立
	protected function checkMkdir(){
		if(!file_exists($this->uploadPath))
			mkdir($this->uploadPath,0777,true);
	}
	
	
	//获取上传文件的扩展名
	protected function getFileType($file){
		return substr($file,strripos($file,"."));
	}
	
	
	//文件上传处理
	public function actionUpload(){
		$this->checkFilesType();		//检测文件类型
		$this->checkAllowSize();		//检测文件大小
		//创建目录
		$this->checkMkdir();
		//文件上传
		foreach($this->files['errorMsg'] as $k =>$f){
			$this->newName[$k] = "new_".rand(100,1000).$this->getFileType($this->oldName[$k]);
			$path = $this->uploadPath."/".$this->newName[$k];
			if(!$f){	//判断文件是否可以上传
				if(is_uploaded_file($this->files['tmp_name'][$k])){
					if(move_uploaded_file($this->files['tmp_name'][$k],$path)){
						$this->files['errorMsg'][$k] = $this->oldName[$k]."上传成功";
					}
				}
			}

		}
	
		return $this->files['errorMsg'];
	}
	
}


