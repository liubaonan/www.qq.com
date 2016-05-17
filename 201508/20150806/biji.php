<?php
//php班同学，书中无为与学关之事，勿于总群话说，若须，自办一群，勿伤他窗同学——裴子
//select a.name as a_name,b.name as b_name from a as biao1,b as biao2 where id=1 order by a.createtime desc limit 1,11;
/*
1:  include_once(""); 引用某个路径。
2:  str_repeat($n,4); 函数把字符串重复指定的次数（重复一个字符串）.
3:  isset()只能用于检测变量是否设置，因为传递任何其它参数都将造成解析错误。若想检测常量是否已设置,可使用 defined()函数。 
	$foo = NULL;  var_dump( isset ($foo) );  将返回的是false 因为不能被设置成null。
	unset()为释放指定的变量，即视为之前没有设置。
4：	empty()检测一个变量是否为空，如果是非空或非零的值，则 empty() 返回 FALSE。换句话说，""、0、"0"、NULL、FALSE、array()、var $var;
	 以及没有任何属性的对象都将被认为是空的，如果 var 为空，则返回 TRUE。 除了当变量没有置值时不产生警告之外
5:  implode(",",$v) 输出数组。
6:  取得系统的环境变量 echo getenv('REMOTE_ADDR');  类似于$_SERVER
	打印服务器IP:echo gethostbyname("www.bolaiwu.com")
	echo file_get_contents('http://www.sina.cn')//抓取网站
	 
	$readcontents = fopen("http://www.baidu.com",'rb');//打开文件句柄
	$content = stream_get_contents($readcontents);//与 file_get_contents() 一样，但是 stream_get_contents() 是对一个已经打开的资源流进行操作，并将其内容写入一个字符串返回。 返回的内容取决于 maxlength 字节长度和 offset 指定的起始位置。
	fclose($readcontents);//关闭已经打开的文件指针
	echo $content; //输出
7:  in_array  检测数组中是否存在某个值。
8:  array_slice在数组中取出一段			$stemp=array_slice($stemp, 1,-4);  var_dump($stemp); 在数组中取出一段。
9:  array_push 将单元放入数组末尾		array_unshift  将单元放入数组开头。
10：echo 和print 的区别   第一个能输出 ，第二个不能			echo "aa","bb";		print "aa","bb";			
11：ltrim rtrim  trim 去除空白字符串ltrim(); 去除左边； rtrim();去除右边； trim();去除两边； 还可以用preg_replace方法替换。(正则表达式的替换)
12: strtolower( )本函数将字符串str全部变小写字符串。  strtoupper( )本函数将字符串str全部变大写字符串。echo strtoupper($hou);
13: 输出<>;echo "&lt"."&gt";//输出<>;    
14：$entityHtml = htmlspecialchars($temp);	//把html 特殊字符 转化为实体  $html = htmlspecialchars_decode($entityHtml);	//把实体转化为html代码	
	//删除html 标签   echo strip_tags($html);
15: 函数在执行时所产生的变量，在函数结束时就消失了，有时因为程序的需要，函数在循环中，当不希望变量在每次执行完函数就消失的话，
	静态变量 (static variable) 就派上用场了。
19：md5加密    $a="刘宝南";  echo md5($a);
20: “{m}”表示其前原子恰好出现m次。   “{m，n}”表示其前原子至少出现m次，至多出现n次。    “{m，}”表示其前原子出现不少于m次。
21:  Pr[ae]y匹配”Pray”或者”Prey ”  [^]成为排除原子表，[^u] 如果这样就是查找不到带有u字符的
22： /I   love    you/ix  		匹配“iloveYou”,忽略大小写(i)以及空白(x)。
23:  preg_match_all()  进行全局正则表达式匹配
24:  /zo{1,3}m/只能匹配字符串“zom”、“zoom”、或“zooom”		/zo{3}m/只能匹配字符串“zooom”
25:	
26: ucwords( )本函数返回字符串str每个词的首字母全都改成大写。ucfirst( )将字符串第一个字符改大写。
16: echo  strrev();字符串的反转 不适用于中文
17: echo strlen($liu);计算字符串长度。一个中文相当于3个长度。
18: echo substr($liu,3,5);字符串截取，3表示从第三个（算第三个,但从零开始）开始，5表示截取5个。
27: echo strstr($liu,"3"); 输出第一个出现的至最后的字符，strrchr（$liu,"3"）；输出最后一个出现的至最后的字符
28: echo strpos($liu,"m");取得某字符第一次出现的位置  echo strrpos($liu,"m"); 取得某字符最后一次出现的位置
29：echo str_replace("2","3",$liu);	str_replace("","") 函数使用一个字符串替换字符串中的另一些字符。
30: var_dump (array_count_values($liu)); 计算数组中每个值总共出现的次数
31: var_dump(array_flip($liu));  使数组中的健和值颠倒   
32： var_dump(array_keys($liu));  返回数组中所有的键名；
	将数组开头的单元移出数组array_shift
	想数组开头压入一个单元  array_unshift();
	向数组最后压入一个或几个元素array_push("a","b");即进栈
	将数组最后一个元素弹出array_pop();即出栈
	从数组中随机取出一个或多个元素array_rand();
	在数组中搜索给定的值，如果成功返回相应的值 array_search（）
33：var_dump(array_pad($liu,15,0));  用指定值将数组填充到指定长度，15代表数组的长度，0代表用0填充
34: var_dump(array_rand($liu,5)); 从数组中随机取出指定个单元 5代表取出随机5个
35： var_dump(array_reverse($liu));  返回一个单元顺序相反的数组
	var_dump(array_reverse($array,true)); 如果后面括号里面加上true的话就是连键值一起倒过来 ，如果不加的话，键值不变。
36：var_dump(array_search("32",$liu)); 在数组中寻找给定的值，如果找到就返回相应的键名
37：var_dump(array_values($liu)); 返回数组中所有的值
38：var_dump(array_unique($liu)); 移除数组中重复的值
39: final用于类前面不可以被继承，用于成员方法前面不可以被覆盖，也不可以被重写。 parent::来引用父类的成员方法
40：list的用法   $liu=array('liu','bao','nan');   list($cui,$yan,$wei)=$liu;    echo "$cui $yan $wei 是最帅的";
41:抽象方法？
	如果一个类继承了某个抽象类，则它必须实现该抽象类的所有抽象方法，(除非他自己也是抽象类)
	我们在类里面定义的没有方法体的方法就是抽象方法，所谓没有方法体就是在方法声明的时候没有大括号以及其中的内容，
	而是直接声明时在方法名后加上分号结束，另外在声明抽象方法时还要加一个关键字"abstract"来修饰：
	抽象类？只要一个类里面有一个方法是抽象方法，那么这个类就要定义为抽象类，但是抽象类不一定有抽象方法，抽象类也必须要使用关键字"abstract"来修饰，
	抽象类不能实例化对象，即不能new；那么要她有什么用呢？ 咱们可以给它写一个子类来继承它，将抽象类中的抽象方法覆盖（加上方法体）；并且有几个抽象方法子类就必须覆盖几个；
	抽象类的作用就是要求子类的结构，所以抽象类就是一个规范  抽象类之写出结构，而没有实现，功能交给子类实现
多态：
 	多态必须有继承关系，父类最好是接口或 抽象类  （笔记本电脑 和鼠标 键盘）的关系；
接口：	
	接口是一种特殊的抽象类，1：接口中的方法必须都是抽象方法。2接口中的属性必须是常量。3：接口中的权限必须都是公有的（public）4：声明接口不用class 而是用 interface
	接口中的抽样方法不需要使用abscract，因为每一个都是抽象方法 所以就都不用写了
	先实现继承在实现接口（class fun extends run implements gun）; 继承接口用implemnts 而不用extends
42:static  在类的外部 调用静态方法和静态属性的时候用类名::$静态属性名   类名::静态成员方法	  在类的内部调用静态的属性 用 self:: 关键字
43:GD库，是php处理图形的扩展库，GD库提供了一系列用来处理图片的API，使用GD库可以处理图片，或者生成图片
 	  在网站上GD库通常用来生成缩略图，或者用来对图片加水印，或者用来生成汉字验证码，或者对网站数据生成报表等。在PHP处理图像，可使用GD库
    imagecreate($width,$height)  创建一块画布，传入两个参数分别为高度和宽度
    imagecreatetruecolor($width,$height)同imagecreate一样，创建一个空白的画布，区别在于这个函数创建的画布支持的色彩数更多，所以效果更好，
    imagecreatefromjpeg  - 创建一块画布，并将一张jpg格式的图片读取到这块画布
    imagecreatefromgif  -  创建一块画布，并将一张gif格式的图片读取到这块画布
    var_dump(gd_info()) 打印当前安装的GD库信息
	getimagesize 取得图像大小var_dump(getimagesize(a.jpg));返回一个数组，详细如下:
		索引0给出的是图像的宽度的像素值；
		索引1给出的是图像的高度的像素值；
		索引2给出的是图像的类型，返回的是数字，其中1 = GIF，2 = JPG，3 = PNG，4 = SWF，5 = PSD，6 = BMP，7 = TIFF(intel byte order)，8 = TIFF(motorola byte order)，9 = JPC，10 = JP2，11 = JPX，12 = JB2，13 = SWC，14 = IFF，15 = WBMP，16 = XBM；
		索引3给出的是一个宽度和高度的字符串，可以直接用于HTML的标签。
		索引bits给出的是图像的每种颜色的位数，二进制的；（低版本的GD可能不返回这个值）
		索引channels给出的是图像的通道值，RGB图像默认是3.（低版本的GD可能不返回这个值）
		索引mime给出的是图像的MIME信息，此信息可以用来在 HTTP Content-type 头信息中发送正确的信息，如：
	header("Content-type: image/png");
44：$tmp = 0 == "a"? 1: 2;   echo $tmp;  答案是1；  字符串强制转化为整型是0；如果改成===答案就变成2； 
45:200 请求成功。404 没有找到  403 不明原因的禁止 400 错误的请求 401未被授权
46：:get是发送请求HTTP协议通过url参数传递进行接收,而post是实体数据,可以通过表单提交大量信息.
47：session与cookie的区别?  答:session:储存用户访问的全局唯一变量,存储在服务器上的php指定的目录中的（session_dir）的位置进行的存放   
  cookie:用来存储连续訪問一个頁面时所使用，是存储在客户端，对于Cookie来说是存储在用户WIN的Temp目录中的,两者都可通过时间来设置时间长短 
48:echo date('Y-m-d H:i:s',strtotime('-1 days'));     ?h - 带有首位零的 12 小时小时格式       ?i - 带有首位零的分钟  ?s - 带有首位零的秒（00 -59
49:echo(),print(),print_r()的区别:echo是PHP语句, print和print_r是函数     语句没有返回值    函数可以有返回值 prin（）
   只能打印出简单类型变量的值(如int,string) print_r（）可以打印出复杂类型变量的值(如数组对象) echo输出一个或者多个字符串
50:php的意思   答PHP是一个基于服务端来创建动态网站的脚本语言，您可以用PHP和HTML生成网站主页  
51: 变量的概念 ：变量用于存储值，比如数字、字符串或函数返回的结果
52：变量名必须以字母或下划线 "_" 开头。变量名只能包含字母数字字符以及下划线。变量名不能包含空格
	如果变量名由多个单词组成，那么应该使用下划线进行分隔（比如 $my_string），或者以大写字母开头（比如 $myString）
53" $a=strtotime('December 31');     $b=ceil(($a-time())/60/60/24);     echo $b;  此时此刻距离十二月31日 还有多少天
54: echo __LINE__; 	//显示当前代码所在行         echo __FILE__;		//显示当前脚本所在系统中的绝对路径
55: 常量变量的区别？？？
	1 常量前面没有标记符号  $ 
	2 定义方法不同 常量只能通过define()来定义，变量是通过赋值来定义的
	3 常量不用考虑作用域问题。
	4 常量不能被重新定义，也不能被销毁。
	5 常量的值只能是标量 integer float string boolean
56: 获取所有已定义的常量列表方法： var_dump(get_defined_constants());
57: fopen 新建文件 $ds=fopen("ren.txt","a");      复制文件 copy("ren.txt","renren.txt");  
	$handle = fopen(a.txt,"a+");
	echo  fread($handle,5);//fread();	读取资源里面的数据
	$txt = "sd.txt";
	echo unlink($txt);//删除文件
	判断文件是否存在：var_dump(file_exists('liu.txt'));
	判断目录是否存在：var_dump(is_dir('文件夹名称'));
	获取目录句柄 打开目录opendir('文件夹名称') closedir() 关闭目录句柄
	创建目录：@mkdir('文件夹名称',0755); 删除目录：@rkdir('文件夹名称';
	改变工作目录：chdir('文件夹名称');取得当前工作路径：echo getcwd();
	遍历出文件和目录  返回一个数组：var_dump(scandir('201508'));
	获取文件大小：filesize();类型：filetype; 
	只读'r' 读写'r+'
	删除目录：unlink('a.txt');
	使用file_put_contents('要写入数据的文件名'，'写入文件的数据')函数，可以把一个字符串变量写入文件
	新闻抓取函数：$webPage = file_get_contents("http://www.baidu.com/");  echo $webPage; 
    1.echo getcwd(); 2.echo dirname(__FILE__); //获取当前文件所在目录    echo gettimeofday(true); //显示当前时间   可以打印成数组
58：echo( is_dir($liu));//判断是否是目录 与file_exists基本一样，但是is_dir效率快
	echo file_exists($liu);//检测目录是否存在，也可以检测文件
	echo getcwd();//取得当前工作路径
59: opendir(路径); 打开一个目录
60:$bao= str_replace("\\","/",substr(dirname(__FILE__),0,-9));  $ff=$bao."/"."liubaonan";  @mkdir($ff,0777);  //建立目录
61：@rmdir( dirname(__FILE__) ."/"."amige");//删除目录
62：opendir($paht) 打开一个目录句柄，（简单理解就是把目录名称记住）
63:   var_dump(scandir()) 函数返回一个数组，其中包含指定路径中的文件和目录		scandir() 函数返回一个数组，其中包含指定路径中的文件和目录
64:表单中enctype="multipart/form-data"的意思，是设置表单的MIME编码。默认情况，这个编码格式是application/x-www-form-urlencoded，
   不能用于文件上传；只有使用了multipart/form-data，才能完整的传递文件数据
65：函数的优越性：
	          控制程序设计的复杂性 
	          提高软件的可靠性    
	          提高软件的开发效率   
	          提高软件的可维护性    
	          提高程序的重用性
66：$c="D:\wamp\www\www.qq.com";      echo chdir($c);//改变建立目录的路径  mkdir("333333333333",0777);//建立目录
67:$s= opendir($c);//打开一个目录句柄
		echo "<br/>";   
		echo readdir($s);//读取目录句柄
		echo closedir($s);//关闭目录句柄
68:var_dump( scandir($c)); 函数返回一个数组，其中包含指定路径中的文件和目录
69:xml相对于html的优势:内容描述和表现形式相分离   结构清晰，便于阅读、维护    支持深层次的嵌套表达，适合表示结构复杂的文档数据
   允许用户定义自己的扩展标签
70：$zhstring=iconv("utf-8","GBK",$name);//强文本$name由utf-8格式转换为GBK格式，
71：session_start():启用session机制,在需要用到session的程序文件的最开始调用它.
	session_is_registered(): 判断session变量是否注册
	清除session数组，里面所定义的全部清空$_SESSION = array();
	删除客户端cookie中的sessionid  setcookie(session_name(),"",time(-1),"/");
	彻底销毁服务器文件 session_distroy(): 销毁所有session变量(所有session变量销毁，包括文件)
	session_auto_start;默认开启session_start();不建议开启
72: 数据库完整定义：数据库是存储在一起的相关数据的集合，这些数据是结构化的，无有害的或不必要的冗余，并为多种应用服务
73: 数据库优点
	数据按一定的数据模型组织、描述和储存
	可为各种用户共享
	冗余度较小，节省存储空间
	易扩展，编写有关数据库应用程序
74:创建数据库：creacte database数据库名；  删除数据库：drop database数据库； 
	修改密码：mysqladmin -u root -p password 新密码 ；然后点回车输入旧密码 更改成功、
77：从数据库导出数据：mysqldump -u root -p 2015php >D:\a.sql(不加分号)
78：修改表名：rename table 原表名 to 现表名 
79：查看表：describe 表名   删除用户:drop user 用户名@localhost;
80: 添加字段：alter table 表名 回车 add(字段名 varchar());
	
	更新字段:update Person set FirstName = 'Fred' whereLastName = 'Wilson' 
81:修改字段名：alter table 表名 change 原列名 新列名 类型；
82：修改存储方式：alter table 表名 character set 字符集;
83:删除字段：alter table 表名 drop 字段名;
84:表 降序：select * from 表名 order by 字段名（id） desc （asc表升序）
85:通配符：select * from 表名 where name like "%d&";
86:导出数据：\q先退出 mysqldump -u root -p 数据库名  >d:\s.sql
87:导入数据库: 先use 数据库名  然后 source d:\wenjianming.sql;
88：显示数据库语句：show databases;使用数据库 use 数据库名
89:插入数据：insert into 表名(``,``,``,``) values ("","","","");
90:删除数据：delete from employee where `name`="";
91:从表中找出最小工资的人：select id,name from employee where `salary`=(select min(salary)) from employee;            
92://处理图片上传 上传文件必须在form表单中加上enctype="multipart/form-data"
93：整型 布尔 浮点 数组 对象 null 资源 resource 字符串 
94：$_GLOBLES $_GET $_POST $_REQUEST $_COOKIE $_SISSION $_SERVER $_FILES
95：define(name,value,case_insensitive);name:常量的名称  value:常量的值; case_insensitive：设置是否对大小写敏感，true不敏感，默认false
	constant(); 返回一个常量的值    defined();  检测一个常量是否存在  var_dump(defined("add"));
	die(); 输出一条消息，并退出当前脚本 相当于exit();
	sleep();延迟执行代码若干秒  sleep(3); 也就是3秒后执行  usleep();延迟执行若干微秒
96：常量一旦定义不可更改，不能用++来进行累加 
97:链接mysql数据库的方法是：mysql_connect("localhost");
98:.请判断以下说法是否正确：在 PHP 5 中，在默认情况下 MySQL 支持是启用的  错误
99:	$dsn = "mysql:host=localhost;dbname=students";			//链接字符集
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,				//警告级别
		PDO::ATTR_CASE => PDO::CASE_LOWER,						//列字符大小
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".'utf8'		//设置连接字符集
	];
$pdo = new PDO($dsn,'root','222',$options);
100:更改数据库数据
		$sql = "update ds_article set `title`=:title,`author`=:author,`sourcefrom`=:sourcefrom where mid=:mid ";
			$stmt=$pdo->prepare($sql);
			$stmt->bindParam(':mid',$mid);
			$stmt->bindParam(':title',$title);
			$stmt->bindParam(':sourcefrom',$fourcefrom);
			$stmt->bindParam(':author', $author);
			$result=$stmt->execute();
		if($result){
			exit("<script>alert(\"保存成功\");window.location.href=\"../article_list.php\";</script>");
		}
101：try{
		if("/usr/local">1){
			echo "绝对正确啊";
		}else{
			throw new Exception(“类型不正确”,3);
		//如果要调用信息的话 必须在这里写上信息，		
		}
		}catch (Exception $e){
		echo "1.抛出异常的文件名".$e->getFile()."<br />";
		echo "2.抛出异常的行号".$e->getLine()."<br />";
		echo "3.传递给构造函数的错误代码".$e->getCode()."<br />";//写上第二个参数错误代
		echo "4.返回传递给构造函数的错误信息".$e->getMessage()."<br />";
		echo "5.返回前一个异常".$e->getPrevious()."<br />";;
		echo "6.返回一个数组包括错误的文面名，行号，函数名等。。";
		print_r($e->getTrace());
		echo "<br />7.返回与getTrace()完全相同的信息,只是返回的信息是一个字符串不是一个数组".$e->getTraceAsString()."<br />";
102:break;跳出本次循环，break 2;跳出两层循环
103:声明函数的时候叫形参 function fun($a,$b){}   $a,$b是形参                   调用函数的时候是实参fun(2,2); 2,2是实参
	函数加括号 fun()代表调用  不加括号fun代表整个函数
104: js中的global对象的几种方法   escape 方法 | eval 方法 | isFinite 方法 | isNaN 方法 | parseFloat 方法 | parseInt 方法 | unescape 方法
105:ceil 向前取整  ceil(2.2)取值为3；  floor 向下取整 floor(3.8)取值为3；round 四舍五入 round(3.8)取值为4；
106:basename -- 返回路径中的文件名部分  $script_name = basename(__file__); print_r($script_name);

*/

//


//		js知识点							js知识点											js知识点
	

//


/*

 1.var obj=getElementById('id');
 obj.style属性中的font-size 在js里面写应该写成fontSize;
 2:lastIndexOf返回 String 对象中子字符串最后出现的位置。
   indexOf:返回 String 对象内第一次出现子字符串的字符位置。




 
 

 
 */




/*
要是你坚持不下去了 
 就打开看看 你可以一天上九节课两节晚自习,
 你可以一天写完两支笔芯做至少三套卷子,你可以早起十分钟晚睡十分钟记几个单词和成语,
 你可以用玩手机的时间弄懂一道数学题,用看杂志的时间写完一篇英语阅读,
 你可以把K歌看电影聚会打游戏的时间都用在学习上,总有人比你努力,可怕的是比你牛的人比你还努力 
 高考报考人数915万人，其中907.7万人不与你在同省。同省中其中1万人已被保送，
 2千人对大学后就业没信心不参加高考，8千人是裸考，9千人不能正常发挥，1千人会迟到，
 4.2万人不和你考一个学校，剩下1000人，630水平不如你，369个会产生心理问题。你的对手只剩自己 
 不管你有再多的兴趣爱好  再多的社会关系 再深的对努力学习的厌恶之感 在你青春期的某一个时间点
 你都会明白 学习的重要性高过所有 你要无欲则刚 你要学会孤独 你要把自己逼出最大的潜能  没有人会
 为了你的未来买单 你要么努力向上爬 要么烂在社会最底层的泥淖里 这就是生活.  六点起床很困难，
 背单词很困难，静下心很困难……但是总有一些人，五点可以起床，一天背六课单词，耐心读完一本书。
 谁也没有超能力，但是自己可以决定一天去做什么事情。你以为没有了路，事实上路可能就在前方一点点。
 那些比自己强大的人都在拼命，我们还有什么理由停下脚步？  如果你想在高考后换一部新的手机。买一台电脑
 。去看一次演唱会。享受一次单人旅行。每天早上能睡到自然醒。不用为写不完的作业发愁。不必再听父母的唠叨。
 自信地说我出去玩了。拉着恋人的手在街上疯癫。碰到班主任反而拉得更紧。那么，去努力吧。至少18岁的暑假需要你
 你想考哪所大学?  别说什么只是做梦的话 高考吧最后一年发了狠一下考了一本的数不胜数 你不试试 怎么知道未来到底是怎样? 
 你想不想在十年后  甚至更久后 在街上或者任何地方遇到自己曾经暗恋过的某某 曾经嘲笑过你看不起的同学 
 曾经跟你说你永远不可能有出息的老师 曾经狠狠拒绝你因为你不够漂亮不够优秀的男生  
 曾经连正眼都没看过你一眼的那些所谓优等生 都可以骄傲的扬起头笑着说看老子现在就是过得比你好 
 你还在奔波还在为生活担忧但是我早就过上了自己想要的生活  如果你希望有那么一刻 那么一天那就拿起你的书本吧
 任何伟大的梦想不可能从幻想里出来  而任何光辉的时刻必定从一分一秒的努力里得来  人脑有无限的潜力，
 一个人的大脑如果完全被开发的话据说可以记住26国语言,4000多本图书的全部内容  
 全世界最聪明的人爱因斯坦也仅仅只开发了12％而已 所以别以自己蠢为借口 你要是真的发狠了
 你是不是下一个爱因斯坦谁又会知道  坚信一句话  没有人会让你输 除非你不想赢  
 对 我嘴上说我很讨厌学习 说真的 我也搞不懂那些二次三角函数学了到底有什么屁用 
 我同意柯景腾说的 十年后我的生活中一定没有数学LOGO 但是我仍然可以活得很好  
 但这并不是你不学习的理由 说句俗的啊 你生在中国 在中国这个应试教育中成绩才是王道 
 没有成绩你把头昂起来时都会没有底气 你蠢吗?不 那为什么不好好学? 你想象一下 
 当你成绩很好很好那些老师都来讨好你时 你可以骄傲的对他们不屑一顾甚至比中指 
 还可以暗叫 叫你们看不起老子 是一件多么爽的事情  如果在几十年后我能再次遇到你不管是在富豪会所还是阴暗的地下室
 或者是公共厕所 我都希望能够认出你 不论你脸上的容颜改变了多少我都愿你能够留住心里善良的模样
 不要被这个世界同化得不剩一点闪光  亲爱的 分数不够打击你吗 期末考场坐的舒服吗 补作业不累吗 
 每次决心认真拼三分钟热度不假吗 骂年级前五脑残心里不舒服习惯了吗 手机不离手 
 微信微博人人更新你变美变帅肚子饱了吗 等着心爱的人没心思学习手机聊天你们会结婚吗
 清醒点亲爱的 别忘了答应自己的梦想 别傻了  那不是你要走的路  只要你成绩好了，你爸妈就看你顺眼
 ，你干什么都支持都不管；一旦成绩不理想了，爸妈看你干什么都不爽，处处找你事为难你，
 然后扯出很多没联系的陈年往事。所以你看成绩还可以避免好多家庭矛盾 多好啊!  
 学习其实并不是那么讨厌的事情啊 当你背完了整整几页的政治历史语文
 别人问你你可以自信的倒背如流收获了别人崇拜的眼神时
 当你为了一道数学物理化学题目纠结了整整半天但是最后解出来 被同学老师表扬时
 当你中考高考完可以安心的在家等通知书不用向别人一样担心受怕 被家长亲戚鼓励时 
 当你可以自由支配自己时间谈恋爱都不怕爸爸妈妈骂 可以理直气壮的把成绩单一甩过去时 
 那种成就感是无与伦比的 谁都想当个优秀的人 他们行 我也行  既然学不死，就往死了学。
 你以为你花一个小时被一课单词会死吗 你以为你花两个小时只做一道数学题会死吗 
 你以为把你搞得头大的文言文会杀死你吗你以为三个小时背不下来近代史的大纲吗 
 你以为这些会让你死吗 既然学不死你 那有什么好怕的  15岁觉得游泳难，放弃游泳
 ，到18岁遇到一个你喜欢的人约你去游泳，你只好说“我不会耶”.18岁觉得英文难，放弃英文，
 28岁出现一个很棒但要会英文的工作，你只好说“我不会耶”.人生前期越嫌麻烦，越懒得学，
 后来就越可能错过让你动心的人和事，错过新风景 读书吧做题吧 做烦了做疯了就把书扔了 
 冷静一两秒再捡回来继续看。周而复始这就是简单枯燥的学习，为了能封住那些三姑六婆的嘴
 为了自己十年后不后悔 为了老妈鬓上出现的白发  为了老爸应酬时被酒灌坏的胃 
 为了未来能够毫无顾忌的说：我的高中，可是血泪史!可一秒都没有虚度  我知道 我知道 
 学习很好很好也许真的不会很有钱 很有势 但是你觉得大字不识几个  英文只会说Hi 
 表面上过着看得过去的生活 实际一无所有真的很好么  说真的  没文化真可怕 我也知道真的很难坚持 
 试一试  还记得高中生物书上那个21三体综合症的孩子嘛？ 他叫陈峰 20年后 他已经是中国民航大学 
 机场学院二年级的研究生 什么都无法阻挡他成功的脚步 所以说多一条染色体算什么 奋斗吧少年  
 俄罗斯方块告诉我们：犯下的错误会积累，获得的成功会消失；植物大战僵尸告诉我们：须常调整状态，
 方能应付不同挑战；愤怒的小鸟告诉我们：有时沉下身心，是为了飞的更高；
 跑跑卡丁车告诉我们：永远别觉得时间还多，可浪费；水果忍者告诉我们：水果与炸弹同在，机遇与挑战并存 
 记得聚美优品的广告吗，我觉得很励志 你只闻到我的香水，却没看到我的汗水。
 你有你的规则，我有我的选择。你否定我的现在，我决定我的未来。你嘲笑我一无所有，不配去爱，
 我可怜你总是等待。你可以轻视我们的年轻，我们会证明这是谁的时代。梦想是注定孤独的旅行，
 路上少不了置疑和嘲笑，但那又怎样，哪怕遍体鳞伤，也要活的漂亮.  你现在一无所有 但意味着
 你有无限可能  奇迹是努力的另一个名字  你的爸爸妈妈正在为你们奋斗 这就是你要努力的理由  
 要只因一次挫败，就忘记你原先决定想达到的远方  如果你觉得现在走的辛苦，那就证明你在走——上 ！坡 ！路 ！ 
 当你在前进的道路上,永远有一群煞笔跟着你,盼着你跌倒,等着你失败,看你的笑话.所以你必须拼命奔跑,永不言败 
 一个人至少拥有一个梦想，有一个理由去坚强 无论失败多少次，只要还活着，就不能放弃  力未尽，气未绝，心未死，
 不弃不馁，持之以恒  成绩不是全部学历不是全部。成功没有模式，只是自己能够甘心，能够不太对不起他人 
 不知道自己能活多久，就像你永远无法预测什么时候牙会疼，什么时候你会成功，你不能急，你必须坚信，你是最棒的
 ，独一无二的  总会有一些事阻止你走向梦想，别在意，你会成功的，相信自己  那些杀不死我们的，
 终将使我们更加坚强  如果不奋斗，我们连羡慕别人的资格都没有  你还没有感觉到黑暗 ，你还没有感觉到痛苦 ，
 你还有时间去担心每天过的太快 ，那只能说明你还没有拼命 ，你还有心思去担心别的事  
 将来的你一定会感谢现在如此努力的你，所以请你无论如何也别放弃！  人有两条路要走，
 一条是必须走的，一条是想走的，你必须把必须走的路走漂亮才可以走想走的路，有些路，
 你不走下去，就不会知道那边的风景有多美  当你打算放弃梦想时，告诉自己再多撑一天，
 一个星期，一个月，再多撑一年吧，你会发现，拒绝退场的结果令人惊讶--力克·胡哲《人生不设限》
 每一个优秀的人，都有一段沉默的时光。那一段时光，是付出了很多努力，忍受孤独和寂寞，不抱怨不诉苦，
 日后说起时，连自己都能被感动日子  请你，担负起对自己的责任来，不但是活着就算了，更要活得热烈而起劲，
 不要懦弱，更不要别人太多的指引。每一天，活得踏实，将份内的工作，做得尽自己能力之内的完美，就无愧于天地。
 ——三毛  坚持不下来的时候，我们要给自己一个最大的拥抱  因为亲爱的自己，我们不能辜负自己，辜负我们的梦 
 ，我们必须告诉自己，心上的伤口，不能用懦弱的泪水浇灌，要用奋斗的热血治愈  我们可以悲伤，但我们悲伤过后，
 要调整自己，从悲伤中走出来  单词首先背熟，把基本的语法搞懂 1.耐心把课本单词都记住，至少要九成以上。 
 2.然后耐心读课文，从高中的第一册挨着读，课本里有英语的地方都可以读。 3.看不懂的句子就问老师，别害羞。
 4.觉得自己有能力，可以坚持背课文。 1.单选一般也应该错四个以内，多练练，多看看资料上的知识点基本上可以控制在两个以内
 2.作文一定要把字练好，不管你练什么字体，一定要【清楚、整齐、干净】。
 作文中高级句子结构比高级词汇更重要，所以平时多写，尽量练高级表达。
 3.完形可能也是扣分多的地方，做完形填空一定要用对方法。 第一遍读下来不要急着填，
 除非非常简单的、非常有把握的空可以先选出来。 其他的就要先空着，第一遍读下来基本上就明白文章讲的什么了，
 第二遍就可以开始选了。如果还有不确定的，再通读一遍，最后还有不能确定的，就排除错误的，
 然后靠感觉蒙。 不要沮丧，每天对自己笑笑，竖个大拇指，告诉自己，我很牛逼，我是天才。
 看起来很2B，但是，别人又看不到，自己鼓励鼓励自己，没什么不好的~ 不管你之前是怎么想的，
 如果你想努力，那么第一，你的心态要好要积极，第二，对自己要有信心，那么接下来就是你要付出行动了
 努力不一定会成功，但不努力就一定不会成功 不一定要考什么清华北大.或许我不会站在年级前十的颁奖台上,
 我只希望我的高中生活,有我喜欢的事,有喜欢的人,有让我无悔的每一天.最后凭我正常的努力正常的学习,
 正常的我去完成一个适合我的大学.我认为,青春是该付出在那一纸试卷上,但青春不全是那一张试卷.有目标,
 有理想,有明天,有你,足够. 语文老师说；如果你爱一个人.不是下课给人家买买水.不是短信发来发去,
 也不是周末一起出来唱唱歌聊聊天吃吃饭。 而是做一个出色的人.以后的以后,可能还有别的人爱她. 
 你要做的,是把别人都比下去.你要变得优秀,要比其他人都优秀. 相信.未来不止是未知.爱情能改变现实 
 据统计.大雄在《哆啦A梦》全集中一共被胖虎揍173次.被老师骂60次.被妈妈骂了327次.被狗咬23次.掉进水沟14次.
 可见我们大雄是多么乐观的活着.成绩的困难算什么.再艰难我也一定会坚持下去的. 你凭什么差别人一等 
 爸爸妈妈给你的比别人少吗. 你比别人笨吗. 凭什么拿着爸爸妈妈的血汗钱不去努力. 当你很累很累很累很累的时候.
 你应该闭上眼睛做深呼吸，告诉自己你应该坚持的住. 给自己一个梦.梦中的自己过上了自己想要的生活.告诉自己
 .除了学习这条路可以让梦想成真.别无选择.适当的逼逼自己. 我知道学习不是唯一的出路.可是你忍心让你的爹妈为你的以后奔波吗？
 为你的将来担心吗？你不觉得不安吗?现在他们给的以后不该还给他们吗? 如果今天我很努力. 成绩依旧不好. 至少长大后我可以说.
 那时候的我真的努力过. 然后想起来也会没有遗憾. 才坚持几天就要放弃了吗？看别人的成绩眼红了吗？在这样下去你就真的无药可救了.
 一天又过了吧.你今天完成了什么.？ 撑不住的时候.可以对自己说声“我好累”但不要对自己说“我不行”也可以说“再坚持3分钟” 数学破百
 详见【高考】最后两个月怕数学吗？教你数学快速破百^^ 第一.你要有对数学不厌倦的心理 第二,不要盲目看课本攻知识点
 ,那么多你能全弄完？我们是要在短时间内提大分数呢, 所以,买一本自己省的数学卷子,不要单元要模拟题,就这三四月出的最好, 
 然后呢,拿出第一张,挨个做,对,你基础不会会有一大堆都不会,不怕,要的就是这个效果, 你把不会的全勾起来,不要看答案,现在该拿出课本,
 从第一个不会的开始一个一个在课本里找那题所对应的知识, 现在才是记知识点,
 看完之后回过头来看题,应该会了一点,只是一小部分,大部分只看书不管用,你不知道如何运用这个知识点
 所以要看答案记住这个解题的方法,就是这样来,第一张卷子你可能要用一周,我就是,但是第二张不会的明显就少了，
 继续下去,一个月后效果显著,数学的基础知识重要,但没解题方法根本无济于事,
 此方法是要在短时间内把基础和方法一同贯彻先是选择题,一般前五个题都很简单,
 做到我前面说的一般细心点错不了的, 最后五个有中等题三个和难度题两个,这是我们可以用逆向法排除
 大题么,一般考证明,数列,三角函数,统计概率,导数和解析几何概率拿满分没问题吧,数列？那个是最简单的了,
 第一问一般都是求an,记住等差等比的公式, 一共四个简单啊,难点的就是给你个sn和an的关系式,
 这个就靠我告诉你的一个月卷子的方法里面会解决掉的, 累加法什么的,第二问是重点,一般问你树列前N项合,
 要求你会用列项相消法错位相减法还有最简单的一个一等差和一等比相加 证明题第二问不会不勉强,
 第一问大家应该都能做出来,毕竟很简单 最后两个大题导数和解析几何都是第一问超简单第二问超难,
 一个月完后第一问都能突破,第二问果断放弃 我不想再浑浑噩噩地度过每一天了. 我的梦想换了一箩筐却从未付诸过努力.
 在空想中挥霍着生活. 整天无所事事一事无成. 今天的事情推到明天.明天推到大后天. 我不能再这样下去了. 
 我不想以后拿点死工资抱怨生活后悔曾经. 我要去梦去想去努力去奋斗. 考上好学校 不让爸妈担心 不让未来的自己后悔 
 为自己的明天拼搏 如果你有梦想的话.就去捍卫它为它而努力奋斗. 你爸不是李刚. 不对梦想付诸于汗水. 以为干坐着
 梦想就会开花结果实现. 那就别傻了.梦想早已发霉发臭. 只有通过自己的不懈努力.坚定信念. 老天是有眼的. 
 他不会让你的努力白白浪费. 空想只会让你死在梦中 活着平庸. 加油.请你向梦想一步步前进. 它在向你招手 hello. 
 你要努力. 逐渐充实自己. 让自己不再无意义. 谁都不会是你的谁.只有自己才是最真实的. 没有谁必须要帮助你.
 任何事情都得靠自己. 不努力去哪找一个心甘情愿给你依靠的人. 时间长了你会知道.你不优秀就会被社会淘汰. 
 别把现实当偶像剧.没有天上掉下高富帅的事. 在不久的将来你会变成更好的自己。 一切会变得更好
*/

//笔记一
$people=[
	"老大"=>['堡垒','宝恒','兴业','博宇'],
	"老四"=>['柳丹','刘乐','宝应','小宇'],
	"老二",
	"老三",
];
$temp="";//$v是键值后面的东东，比如。“老大”是键值，后面的四个变量就是$v，||||“老二”的键值是0，所以老二就是键值0的$v。
	foreach($people as $key=>$v){//什么时候加$key键值？什么时候不加键值？
		if(is_string($key)){//如果键值是字符串的话，就执行这一个循环。
		$temp.=$key."家有这几个:".implode(",",$v)."<br/>" ;//函数implode的用法implode（","）
	}else{
		$temp.=$v.":"."啦啦啦"."<br/>";
	}		
}
echo $temp;
var_dump($people);
//笔记二
//笔记二
function  liu($n){
		if($n<10){
			echo "我是$n"."<br/>";
			$n++;
			liu($n);//递归数组，
		}else{
			echo "我是最帅的 ou ye!".$n;			
	}
}
liu(4);
echo "<hr/>";
function bao($nan){
		if($nan<=5){
			echo "我是$nan"."<br/>";
			$nan++;
			bao($nan);//在这里要把开始定义的函数再写一遍，我不知道为什么、貌似是为了让他返回、
		}else{
			echo "猜我是几？";
		}
}
bao(1);
//笔记三
//笔记三
echo "<br/>";
function test($i){ 
			$i-=4; //-=是一个运算符相当于+=
			if($i<3){ 
				return $i; 
		}	else{ 		
			return test($i);  //在这里用echo也可以 ，那么问题来了 echo 和 return有什么区别呢？ 
	} 
}
echo test(30); 
//笔记四
//笔记四
echo "<hr/>";
														//递归经典案例
function one($num){
	echo $num;
	echo "<-->";
}
function two($num){	
	echo $num;
	one($num-1);
	echo "&nbsp;我不做大哥多少年?&nbsp;$num";
}
function three($num){
	echo $num;
	two($num-1);
	echo "&nbsp;&nbsp;&nbsp;我不做大哥多少年?&nbsp;$num";
}
function four($num){
	echo $num;
	three($num-1);
	echo "&nbsp;&nbsp;我不做大哥多少年？&nbsp;$num";
}
four(5);
$sort=[
		['id'=>1,'name'=>'新闻','pid'=>0],
		['id'=>3,'name'=>'体育','pid'=>1],
		['id'=>6,'name'=>'足球','pid'=>3],
		['id'=>4,'name'=>'军事','pid'=>1],
		['id'=>5,'name'=>'篮球','pid'=>3],                            //递归  递归  递归 
		['id'=>7,'name'=>'甲联','pid'=>6],
		['id'=>8,'name'=>'游戏','pid'=>0],
		['id'=>2,'name'=>'娱乐','pid'=>1],	//  echo str_repeat("Shanghai",5)  输出结果：shanghai	shanghai	shanghai	shanghai	shanghai  .函数把字符串重复指定的次数（重复一个字符串）
		['id'=>9,'name'=>'飞车','pid'=>8],
		['id'=>10,'name'=>'战争','pid'=>4],
		['id'=>11,'name'=>'抗日','pid'=>10],
];
function sen($sort,$pid=0,$length=0,$html="--"){		
	static $temparr=[];
	foreach($sort as $v){
			if($v['pid']==$pid){
				$v['html']=str_repeat($html,$length);
				$temparr[]=$v;		
				sen($sort,$v['id'],$length+1,$html="--");  //  就是这，又返回了开始，。返回去只在乎位置，不在乎定义的是什么函数，如果不定义某个函数 一定要用","隔开。。
			}
		}
		return $temparr;
}
$temparr=sen($sort);
var_dump($temparr);
//笔记五
//笔记五
/*
	作业 书写一个 可以输入任意多个参数的函数 并把参数 拼接返回
	getString("1","2","100");
*/
echo "<hr/>";
function li(){
			$list=func_num_args();                              //输出数组参数的总数；
			echo "排序的个数:".$list."<br/>";
			$num=func_get_args();
		for($i=$list-1;$i>1;$i--){
			for($j=1;$j<$i;$j++){
				if($num[$j]>$num[$j+1]){
					$bao=$num[$j];
					$num[$j]=$num[$j+1];
					$num[$j+1]=$bao;
			}
		}
	}
	var_dump($num);
}
li(1,5,32,86,48,95,155,94,95,6,87,80,0);
echo "<hr/>";
//笔记六
//递归累加
function summmer($k){
	if($k == 1){
		return 1;
	}
	 $s=$k+summmer($k-1);
	 return $s;
}	
echo  summmer(95);                                  //嵌套不到100层.
echo "<hr/>";

echo "<hr/>";
//笔记七
class sports{	
	var $lan;
	var $zou;
	var $tai;	
	function fun(){	
			echo "我最喜欢的是&nbsp".$this->lan."很少打".$this->tai."&nbsp".$this->zou;
	}
	function fun2(){
			echo "搞起".$this->tai;
	}
}
$sen=new sports;
$sen->lan="篮球";
$sen->zou="足球";	
$sen->tai="台球";
$sen->fun();
$sen->fun2();
//笔记八

class Person{	
	var $name;
	var $age;
	var $height;
	function __construct($name="",$age="",$height=""){
			$this->name=$name;
			$this->age=$age;
			$this->height=$height;
	}	
	function fun(){
		echo "他的名字是:".$this->name."&nbsp今年".$this->age."岁"."&nbsp"."身高是：".$this->height."<br>";
	}
	function __destruct(){
		echo "释放".$this->name."<br/>";
	}
	function __tostring(){//魔术方法__tostring()的应用，必须有返回值  用于直接打印输出实例  用它打印类的相关信息

        return  "Hello,".$this->name."!<br/>";    
    }
}
$liu=new Person("崔艳伟","23","174");
echo $liu->fun();
$bao=new Person("刘宝南","22","177");
echo $bao->fun();
echo $bao;

echo "<hr/>";
//笔记八(2)
class Person2{	
	var $name;
	var $age;
	var $height;
	function __construct($name="",$age="",$height=""){
			$this->name=$name;
			$this->age=$age;
			$this->height=$height;
	}	
	private function fun(){
		echo "他的名字是:".$this->name."&nbsp今年".$this->age."岁"."&nbsp"."身高是：".$this->height."<br>";
	}
	public function setheight($name){
		$this->name=$name;  //只改变fun()属性当中的一个或几个值，其余值不变照样输出。

	}
	function show(){  //因为fun()属性被定义为私有成员，不能被外部使用，所以重新定义一个shou，从而间接调取fun();
		echo $this->fun();
	}
}
$liu=new Person2("刘宝南","22","177");
$liu->show();
$liu-> setheight("宝宝");
$liu->show();
$liu->setheight("刘晓森");
$liu->show();
$liu->name="宝宝";
$liu->show();

//笔记九
function hou($a,$b){
		if($a==$b)
		return FALSE;	
		$s = $a>$b?$b:$a; 
		$e = $a<$b?$b:$a;//判断$a $b 的大小， 这样如果$b 大于$a 的话，也可以正常输出。
		$number = 0;		
		for($i = $s;$i<=$e;$i++){
			$number +=$i;
}
		return  $number;	
}
$Cumulative = hou(1,100);
if(!$Cumulative)
	echo "输入的参数有错误！";
else
	echo "累加的结果为:".$Cumulative;
//笔记十
$k=9;
for($a=0;$a<=9;$a++){
	
	for($c=1;$c<=($k-$a);$c++){
			echo "&nbsp";
		}
	for($b=1;$b<=1+2*$a;$b++){	
			echo "*";
	}
	echo "<br/>";
}
for($d=1;$d<=10;$d++){
	for($e=1;$e<=5;$e++){
		echo "&nbsp;";
	}
	for($f=1;$f<=8;$f++){
		echo "*";
	}
	echo "<br/>";
}

echo "<hr/>";

for($a=1;$a<=9;$a++){
	for($b=1;$b<=15;$b++){
		echo "*";
	}	
		echo "<br/>";
	for($c=1;$c<=$a;$c++){
			echo "&nbsp";
	}	
}
/*
 * 100块钱买100只鸡 有几种买发
$temp = 0;
for($a=1;$a<=20;$a++){
	for($b=1;$b<=30;$b++){
		for($c=1;$c<=300;$c++){
			if($a*5+$b*3+$c/3=100 && $a+$b+$c == 100){
				echo $a." ".$b." ".$c."<br />";
				$temp++;
			}
		}
	}
}
echo $temp;
*/
//笔记十一
//final的用法，见39.
class cui{
	public $a;
	
	/*final*/ public function yan(){
		echo "我是".__class__."";
	}
}
class wei extends cui{
	
	public function yan(){
		parent::yan();//
		echo "我是刘宝南";
	}
}
$as=new wei;
$as->yan();
//笔记十二
echo '<br/>';
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
//笔记十三
//将下面的字符拼装成字符串输出
$arr = array( 
'I', 'AM', 'MILO!', 'DAY', 'DAY', 'UP!' 
);

$str=strtolower(implode(' ',$arr));
echo $str;

//笔记十四
/*
<?xml version='1.0' encoding='utf-8'?>
<!DOCTYPE 个人简历 SYSTEM 'demo8.dtd'>
<个人简历>
	<姓名>刘宝南</姓名>
	<性别>男</性别>
	<出生年月>1994.01.20</出生年月>
	<工作单位>启奥</工作单位>
	<联系方式>110</联系方式>
</个人简历>
*/
//笔记十五
$c=__DIR__;
$s= opendir($c);//打开一个目录句柄
echo "<br/>";   
//echo readdir($s);//读取目录句柄
echo "<hr/>";
if($s){
	echo $c."下的文件有:<br/>";
	while($file=readdir($s)){
		if($file!="." && $file!="..")
		echo $file."<br/>";
	}
}













?>