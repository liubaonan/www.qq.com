<?php /* Smarty version 3.1.27, created on 2015-10-23 09:00:27
         compiled from "D:\wamp\www\www.qq.com\www.qq.com\20151008   smarty\template\tree.html" */ ?>
<?php
/*%%SmartyHeaderCode:169425629db0bcdcb26_61990926%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8dbade0ce795adeca64ad13897a9aec9936e52e' => 
    array (
      0 => 'D:\\wamp\\www\\www.qq.com\\www.qq.com\\20151008   smarty\\template\\tree.html',
      1 => 1445583627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169425629db0bcdcb26_61990926',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5629db0bd4dfb9_48881390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5629db0bd4dfb9_48881390')) {
function content_5629db0bd4dfb9_48881390 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '169425629db0bcdcb26_61990926';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

		<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		

		<!-- page specific plugin styles -->
		
		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.css" />
		
		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<?php echo '<script'; ?>
 src="assets/js/ace-extra.min.js"><?php echo '</script'; ?>
>

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

	<body>
		<div class="navbar navbar-default" id="navbar">
			<?php echo '<script'; ?>
 type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			<?php echo '</script'; ?>
>

	<?php echo $_smarty_tpl->getSubTemplate ("admin/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


		<div class="main-container" id="main-container">
			<?php echo '<script'; ?>
 type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			<?php echo '</script'; ?>
>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<?php echo $_smarty_tpl->getSubTemplate ("admin/_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<?php echo '<script'; ?>
 type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						<?php echo '</script'; ?>
>
						
						<!-- start 导航栏 -->
						<ul class="breadcrumb">
							<li><i class="icon-home home-icon"></i><a href="#">管理首页</a></li>
							<li><a href="#">Other Pages</a></li>
							<li class="active">Blank Page</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="搜索 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						
									<!-- 主要内容 -->																
						
									<div class="col-sm-2 control-label no-padding-right" for="form-field-1">
											<ul id="tree" class="ztree"  style="width:200px;height:400px"></ul>
									</div>
									
							
										
									<div class="col-sm-6">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
												<li class="">
													<a data-toggle="tab" href="#home4">Home</a>
												</li>

												<li class="">
													<a data-toggle="tab" href="#profile4">Profile</a>
												</li>

												<li class="active">
													<a data-toggle="tab" href="#dropdown14">More</a>
												</li>
											</ul>

											<div class="tab-content">
												<div id="home4" class="tab-pane">
													<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
												</div>

												<div id="profile4" class="tab-pane">
													<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
												</div>

												<div id="dropdown14" class="tab-pane active">
													<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
												</div>
											</div>
										</div>
									</div>	
								 </div>		
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
									<!-- 主要内容 -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<?php echo '<script'; ?>
 src="assets/js/2.0.3/jquery.min.js"><?php echo '</script'; ?>
>

		<!-- <![endif]-->

		<!--[if IE]>
		<?php echo '<script'; ?>
 src="assets/js/1.10.2/jquery.min.js"><?php echo '</script'; ?>
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
		<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/typeahead-bs2.min.js"><?php echo '</script'; ?>
>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<?php echo '<script'; ?>
 src="assets/js/ace-elements.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/ace.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="./css/demo.css" type="text/css">
		<link rel="stylesheet" href="./css/zTreeStyle/zTreeStyle.css" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery-1.4.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery.ztree.core-3.5.js"><?php echo '</script'; ?>
>
		<SCRIPT type="text/javascript">	
	//index里粘贴	D:\wamp\www\www.qq.com\20150927   tree\Tree\zTree-zTree_v3-master\zTree_v3\demo\en
	var setting = {
		view: {
			dblClickExpand: false,
			showLine: true,
			selectedMulti: false
		},
		data: {
			simpleData: {
				enable:true,
				idKey: "id",
				pIdKey: "pId",
				rootPId: ""
			}
		},
		callback: {
			beforeClick: function(treeId, treeNode) {
				var zTree = $.fn.zTree.getZTreeObj("tree");
				if (treeNode.isParent) {
					zTree.expandNode(treeNode);
					return false;
				} else {
					demoIframe.attr("src",treeNode.file + ".html");
					return true;
				}
			}
		}
	};
	//var zNodes =[{"id":1,"pId":0,"name":"\u4e2d\u56fd"},{"id":2,"pId":1,"name":"\u5317\u4eac"},{"id":3,"pId":1,"name":"\u6cb3\u5317"},{"id":4,"pId":3,"name":"\u5510\u5c71"}];
	//D:\wamp\www\www.qq.com\20150927   tree\Tree\zTree-zTree_v3-master\zTree_v3\demo\en\core  standardData.html
	$(document).ready(function(){		
		$.ajax({
			type:"post",
			url:"tree2.php",
			dataType:"json",
			success:function(msg){
				$.fn.zTree.init($("#tree"), setting, msg);
			}
		})		
	});
</SCRIPT>
		

		<!-- inline scripts related to this page -->
	
</body>
</html>
<?php }
}
?>