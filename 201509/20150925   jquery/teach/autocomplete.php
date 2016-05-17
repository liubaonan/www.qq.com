<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="js/jquery.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
	  $(function() {
		//foreach ($data as $itme)
		//去服务器端查询数据 并赋值到这个数组里面
		url = "searchCity.php";
		
		 $( "#tags" ).autocomplete({
				source: url
		});
	});
  </script>
</head>
<body>
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
   <input id="tags2">
</div>
</body>
</html>