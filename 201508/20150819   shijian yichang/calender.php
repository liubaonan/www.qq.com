<?php
	date_default_timezone_set("Asia/Shanghai");
	$crurentUnixTime = time();		//当前的unix 时间戳


	
	
	//年份的下拉菜单
	$crurrentYear = date("Y",$crurentUnixTime);
	$yearSelect = "<select onchange=\"MM_jumpMenu('parent',this,0)\">";
	$yearSelect .= "\r\n\t<option>请选择年份</option>";
	$startYear = $crurrentYear-10;
	$endYear = $crurrentYear+10;
	for($i=$startYear;$i<=$endYear;$i++){
	
		//1.当前没有传递year 我们需要显示2015 如有有显示当前传递过来的年份
		if(isset($_GET['year'])){
			$crurrentYear = intval($_GET['year']);
		}
		$showSelect = ($i==$crurrentYear)?"selected=\"selected\"":"";
	
		$yearSelect .= "<option  $showSelect value=\"?year=".$i."\">".$i."</option>";
	}
	$yearSelect .="\r\n</select>";

	echo $yearSelect;
?>


<script>

	function MM_jumpMenu(targ,selObj,restore){ 
	eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
		if (restore) selObj.selectedIndex=0; 
} 

</script>

