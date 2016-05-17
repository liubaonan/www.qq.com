<?php
/*
 * 
 * 
 *  $_POST：通过 HTTP POST 方法传递的变量组成的数组。是自动全局变量。
 *  $GLOBALS['HTTP_RAW_POST_DATA'] ：总是产生 $HTTP_RAW_POST_DATA 变量包含有原始的 POST 数据。
 *	此变量仅在碰到未识别 MIME 类型的数据时产生。$HTTP_RAW_POST_DATA 对于 enctype="multipart/form-data" 表单数据不可用。
 *	也就是说基本上$GLOBALS['HTTP_RAW_POST_DATA'] 和 $_POST是一样的。
 *	但是如果post过来的数据不是PHP能够识别的，你可以用 $GLOBALS['HTTP_RAW_POST_DATA']来接收，比如 text/xml 或者 soap 等等。
 * 
*/
class wxMessage {
	
	private $appId;										//应用ID
	private $appSecret;									//应用秘钥
	private $accessToken;								//票据
	private $accessTokenFileName = "accessToken.conf";	//本地票据文件名
	private $httpRawPostDate;							//存储传递过来的XML 文档数据
	private $grant_type = "client_credential";			//访问获取票据接口的参数

	
	public function __construct($appId,$appSecret){
		
		$this->appId = $appId;
		$this->appSecret = $appSecret;
		$this->accessToken = $this->createAcceseToeken();		//获取到了票据

		if(isset($GLOBALS['HTTP_RAW_POST_DATA']))
			$this->httpRawPostDate =  $GLOBALS['HTTP_RAW_POST_DATA'];
	}

	//web接收普通文本消息
	public function getTextMessage(){
		if(!empty($this->httpRawPostDate)){	
			//就得回复消息
			$postObj = simplexml_load_string($this->httpRawPostDate,'SimpleXMLElement',LIBXML_NOCDATA);
			$fromUsername = $postObj->FromUserName; 				//发送方帐号（一个OpenID）
			$toUsername = $postObj->ToUserName; 					//开发者微信号
			$content = $postObj->Content;							//发送过来的内容
			$msgtype = 'text';										//返回数据类型									
			echo $this->resoponseTextMessage($fromUsername,$toUsername,$content,$msgtype);	
		}
	}

	//web服务器响应文本信息 
	private   function resoponseTextMessage($fromUsername,$toUsername,$content,$msgtype){
	  	$textTpl = "<xml>
					<ToUserName><![CDATA[%s]]></ToUserName>
					<FromUserName><![CDATA[%s]]></FromUserName>
					<CreateTime>%s</CreateTime>
					<MsgType><![CDATA[%s]]></MsgType>
					<Content><![CDATA[%s]]></Content>
				</xml>";
	  	$replay = "";
	  	switch ($content){
	  		case "铅笔":
	  			$replay="100";
	  			break;

	  		case "橡皮":
	  			$replay = "200";

	  		default:
	  			$replay = "没有此商品";
	  			break;
	  	}
		$data = sprintf($textTpl,$fromUsername,$toUsername,time(),$msgtype,$replay);
		return  $data;
	}
		


	//创建菜单
	public function createMenu(){
	
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create";	//创建菜单的接口地址
		$apiUrl = $url."?access_token=".$this->accessToken;
		
		$data = '{
		     "button":[
		     {
		          "type":"click",
		          "name":"产品查询",
		          "key":"铅笔"
		      },
		      {
		           "name":"多级菜单",
		           "sub_button":[
		           {
		               "type":"view",
		               "name":"搜索",
		               "url":"http://www.soso.com/"
		            },
		            {
		               "type":"view",
		               "name":"视频",
		               "url":"http://v.qq.com/"
		            },
		            {
		               "type":"click",
		               "name":"赞一下我们",
		               "key":"V1001_GOOD"
		            }]
		       },
				{
		          "type":"click",
		          "name":"公司简介",
		          "key":"company"
		      },						
			]
	 }';
	
		return $this->https_request($apiUrl,$data);
	
	}
	
	
	//获取票据
	private function createAcceseToeken(){
		
		//接口地址
		$getAccessTokenUrl = "https://api.weixin.qq.com/cgi-bin/token";
	
		//判断 文件里面的票据
		if(file_exists($this->accessTokenFileName)){
			$fileName = file_get_contents($this->accessTokenFileName);
			$fileContent = json_decode( $fileName);
			$access_token = $fileContent->access_token;		//票据内容
			$expires_in = $fileContent->expires_in;			//过期时间
			//判断过期时间
			if($expires_in>time())
				return $access_token;
		}
		
		//去互联网获取接口
		$url = $getAccessTokenUrl."?grant_type=".$this->grant_type."&appid=".$this->appId."&secret=".$this->appSecret;
		$accesToken = $this->https_request($url);
		$acceseTokenArry = json_decode($accesToken);
		
		//重新构造返回ACCCESSTOKEN 的过期时间
		$acceseTokenArry_new['access_token'] = $acceseTokenArry->access_token;
		$acceseTokenArry_new['expires_in'] = time()+7200;
		$json = json_encode($acceseTokenArry_new);
		file_put_contents($this->accessTokenFileName, $json);
		
		return $acceseTokenArry_new['access_token'];
	}

	
	//https请求（支持GET和POST）
	private function https_request($url, $data = null)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		if (!empty($data)){
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($curl);
		curl_close($curl);
		return $output;
	}
	
	
}
var_dump($_POST);
var_dump($_GET);
?>