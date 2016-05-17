<?php /* Smarty version 3.1.27, created on 2015-10-09 17:13:22
         compiled from "D:\wamp\www\ds.qiao.com\template\admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:777256178532e32c44_78170739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54119439e17f642eb88362a32dd2bd6969eea50b' => 
    array (
      0 => 'D:\\wamp\\www\\ds.qiao.com\\template\\admin\\login.html',
      1 => 1444382001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777256178532e32c44_78170739',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56178532e79155_67064366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56178532e79155_67064366')) {
function content_56178532e79155_67064366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '777256178532e32c44_78170739';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>sadfasdf</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									
									<span class="red">地税</span>
									<span class="white">高开区</span>
								</h1>
								<h4 class="blue">&copy; 高新区地税管理局</h4>
							</div>

							<div class="space-6"></div>
							<div class="alert alert-block alert-success" style="display:none" id="errorMsg">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="icon-remove"></i>
																</button>
																<i class="icon-ok green"></i>
																信息错误提示	
							</div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												后台管理登录
											</h4>

											<div class="space-6"></div>

											<form action="./action/login_action.php" method="post" id="member">
												<fieldset>
													
												
												
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" name="username" id="username"/>
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" name="password" id="password"/>
															<i class="icon-lock"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="input-sm" placeholder="验证码"/>
															<img title="点击刷新" src="./code.class.php" align="absbottom" onclick="this.src='./code.class.php?'+Math.random();"></img> 
														</span>
															<input type="hidden" name="action" value="login"/>
													</label>
													
 
													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> 记录密码保留一天</span>
														</label>
														<input type="submit" value="提交" onclick="return memberAction()"/>
														<input type="button" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															登录
														</input>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>


										</div><!-- /widget-main -->

										<div class="toolbar clearfix" >
												
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<!--[if !IE]> -->
		<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"><?php echo '</script'; ?>
>
		<!-- <![endif]-->
		<!--[if IE]>
		<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
		<![endif]-->

		<!--[if !IE]> -->

		<?php echo '<script'; ?>
 type="text/javascript">
			window.jQuery || document.write("<?php echo '<script'; ?>
 src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		<?php echo '</script'; ?>
>

		<!-- <![endif]-->

		<!--[if IE]>
		<?php echo '<script'; ?>
 type="text/javascript">
		 window.jQuery || document.write("<?php echo '<script'; ?>
 src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		<?php echo '</script'; ?>
>
		<![endif]-->

		<?php echo '<script'; ?>
 type="text/javascript">
			if("ontouchend" in document) document.write("<?php echo '<script'; ?>
 src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		<?php echo '</script'; ?>
>
		<!-- inline scripts related to this page -->
		
		
		<?php echo '<script'; ?>
 type="text/javascript">	
		
				function memberAction(){
					
					var username = $("#username").val();
					var password = $("#password").val();
					
					$.ajax({
						type:"post",
						url:"./action/login_action.php",
						async: false,
						data:{
							action:'ajax_user',
							username:username,
							password:password
						},
						dataType:'json',
						success:function(msg){
								if(msg.code){
									$("#errorMsg").empty().show().append(msg.message);
								}else{
									$("#member").submit();	//提交表单
								}
						}
					});
					return false;
				}	
				
		<?php echo '</script'; ?>
>
		
		
</body>
</html>
<?php }
}
?>