<?php /* Smarty version 3.1.27, created on 2015-10-14 09:54:30
         compiled from "D:\wamp\www\www.qq.com\20151009   xiangmuer login\template\admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:19142561e0a36e63ea3_68511954%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9d331be1b01606dda0347d55460e0f1da9f7a8' => 
    array (
      0 => 'D:\\wamp\\www\\www.qq.com\\20151009   xiangmuer login\\template\\admin\\login.html',
      1 => 1444809270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19142561e0a36e63ea3_68511954',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561e0a36e9a9b8_39491834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561e0a36e9a9b8_39491834')) {
function content_561e0a36e9a9b8_39491834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19142561e0a36e63ea3_68511954';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>后台管理</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	</head>
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">地税</span>
									<span class="white">高新区</span>
								</h1>
								<h4 class="blue">&copy; 地税管理</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												请输入您的信息
											</h4>

											<div class="space-6"></div>

									
											<form method="post" action="./action/login.action.php" id="form">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" id="username" />
															<i class="icon-user"></i>
														</span>
														
													</label>
												
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" id="password" />
															<i class="icon-lock"></i>
														</span>
											
															
															<input type="hidden" name="action" value="login" />		

															
														<span class="notice2"></span>
													</label>
													
														<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="input-sm" placeholder="验证码" id="code" />
								<img class= "verycode" title="点击刷新" src="../include/code.class.php" align="absbottom" onclick="this.src='../include/code.class.php?'+Math.random();"></img> 
														</span>
														<span class="notice" style="color:red"></span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> 记住密码一周</span>
														</label>

														<input id="but" type="button" value="登录"class="width-35 pull-right btn btn-sm btn-primary" />
																												
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">刘小森管理系统</span>
											</div>

											<div class="social-login center">
									启奥科技
											</div>
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
							
							
	
							
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

				
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<?php echo '<script'; ?>
 type="text/javascript">
			window.jQuery || document.write("<?php echo '<script'; ?>
 src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		<?php echo '</script'; ?>
>


		<?php echo '<script'; ?>
 type="text/javascript">
			if("ontouchend" in document) document.write("<?php echo '<script'; ?>
 src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		<?php echo '</script'; ?>
>

		<!-- inline scripts related to this page -->

		<?php echo '<script'; ?>
 type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		<?php echo '</script'; ?>
>
		
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){	
	
			$("#but").blur(function(){
				$(".notice").empty();
			})

			$("#but").click(function(){
					var username = $("#username").val();
					var password = $("#password").val();
					var code = $("#code").val();
				   $.ajax({
				   type:"POST",
				   url: "./action/login.action.php",
				   data:{			
							action:'ajax',
							liu:'bao',
							username:username,
							password:password,							
							code:code
						},
					//dataType:'json',
				   success: function(msg){										
						$(".notice").empty().append(msg);	
							//用于刷新验证码
							if(msg=="验证码不正确" || msg=="验证码不能为空"){
								$(".verycode").attr("src","../include/code.class.php?'+Math.random()");
							}					    																						
						}							
					});
				})					
			})				
	
			
<?php echo '</script'; ?>
>

	<!--<div style="display:none"><?php echo '<script'; ?>
 src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'><?php echo '</script'; ?>
></div>-->
</body>
</html>
<?php }
}
?>