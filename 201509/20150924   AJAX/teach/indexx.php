



<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" >

$(document).ready(function(){

	$("#username").blur(function(){	
		var name = $(this).val();
		
		$.ajax({
		   type: "POST",
		   url: "action.php",
		   data: "name="+name,
			
		   beforeSend:function(xhr){
			
				var msgStr = "<img src=\"loading.gif\" style=\"width:120px;heigh:120px\" />";
				$("#error").empty().append(msgStr);
		   },
		   success: function(msg){
				$("#error").empty().append(msg);

		   }
		});
		
	});
			
})





</script>



<h1>ע��</h1>

<form>

	�û���:<input type="text" value="" id="username" />
	
	
	<br /><br /><div id="error" style="color:red"></div>
	<input type="password" value="" /><br /><br />
	
	<input type="submit" value="ע��"  />
</form>

