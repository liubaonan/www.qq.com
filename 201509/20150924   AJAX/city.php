<?php
include("include/config.ini.php");
include("include/comm.ini.php");
$pdo = new PDO($dsn,USER,PAS,$options);
$sql="select * from city where parent_id = 0";
$liu=$pdo->query($sql);
$bao=$liu->fetchAll();
?>

<form action="" method="get">
	<select id="province">
			<option value="">请选择省份</option>
			<?php
				$temp="";
				foreach($bao as $p){
					$temp.="<option value=\"".$p['region_id']."\">".$p['region_name']."</option>";
				}
				echo $temp;
			?>
	</select>
	
	<select id="city">
			<option value="">请选择城市</option>
	</select>
	
	<select id="area">
			<option value="">请选择区域</option>
	</select>
</form>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#province").change(function(){
			var  region_id= $(this).val();
			$.ajax({		
				type:"POST",
				url:"city2.php",
				data:{
					city:1,
					pid:region_id
				},
				datetype:"html",  //它应该没什么用吧
				success:function(msg){
					$("#city").empty().append(msg);				
				}				
			})
		})
		
		$("#city").change(function(){
			var  region_id= $(this).val();
			$.ajax({
				type:"POST",
				url:"city2.php",
				data:{
					pid:region_id,
					area:1
				},
				datetype:"html",
				success:function(msg){
					$("#area").empty().append(msg);				
				}
			})
		})
	})
</script>

