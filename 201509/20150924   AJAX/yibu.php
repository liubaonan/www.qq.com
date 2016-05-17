<?php
include("include/config.ini.php");
include("include/comm.ini.php");
$pdo = new PDO($dsn,USER,PAS,$options);
?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(function(){
	$("#username").blur(function(){//失去焦点blur
		var name = $(this).val();
		$.ajax({
		   type: "POST",
		   url: "yibu2.php",
		   data:{
			   action:'ajax',
			   name:name
			   },
		   beforeSend:function(xhr){	//beforeSend意思是发送请求之前执行程序		
				var msgStr = "<img src=\"loading.jpg\" style=\"width:60px;heigh:60px\" />";
				$("#error").empty().append(msgStr);
		   },		   		   
		   success: function(msg){
		   $("#error").empty().append(msg);//写到30行 empty 意思是吧原来的功能制空 也就是吧图片去掉
			 }
		});		
	});
})

</script>

<form>
	用户名:<input type="text" value="" id="username" /><br/><br/><br/>
    	  <div id="error"style="color:red"></div>
   
</form>
</body>
</html>