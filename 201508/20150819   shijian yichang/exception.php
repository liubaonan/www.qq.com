<?php
/*
	异常
*/
try{
	 $a = 0;	 
	 if($a==1){
			echo "服务器在正常运行，可以执行下面的代码<br/>";	
	 }else{
		throw new myException("异常处理<br/>",1);		
	 }	 
}catch(myException $m){
	echo $m->getMessage();
	exit($m->showError());
}
/*
	自定义异常处理类
*/
class myException extends Exception{
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





















?>