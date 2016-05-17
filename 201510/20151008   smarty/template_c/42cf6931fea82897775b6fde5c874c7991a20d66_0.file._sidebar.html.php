<?php /* Smarty version 3.1.27, created on 2015-10-23 08:00:10
         compiled from "D:\wamp\www\www.qq.com\www.qq.com\20151008   smarty\template\admin\_sidebar.html" */ ?>
<?php
/*%%SmartyHeaderCode:259485629ccea841685_40952540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42cf6931fea82897775b6fde5c874c7991a20d66' => 
    array (
      0 => 'D:\\wamp\\www\\www.qq.com\\www.qq.com\\20151008   smarty\\template\\admin\\_sidebar.html',
      1 => 1445569406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259485629ccea841685_40952540',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5629ccea897596_64875364',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5629ccea897596_64875364')) {
function content_5629ccea897596_64875364 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '259485629ccea841685_40952540';
?>
<div class="sidebar" id="sidebar">
					<?php echo '<script'; ?>
 type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					<?php echo '</script'; ?>
>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
					
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 网站设置 </span>
							</a>
						</li>
						<!-- start 文章管理 -->
						<li>
							<a href="./article_sorts.php" class="dropdown-toggle">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 文章管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="./article_sorts.php">
										<i class="icon-double-angle-right"></i>
										分类管理
									</a>
								</li>
		
								<li <?php if ($_SERVER['PHP_SELF'] == "/demo02/admin/article_add.php") {?> class="active" <?php }?>>
									<a href="./article_add.php">
										<i class="icon-double-angle-right"></i>
										文章添加
									</a>
								</li>
								<li <?php if ($_SERVER['PHP_SELF'] == "/demo02/admin/article_list.php") {?> class="active" <?php }?>>
									<a href="article_list.php">
										<i class="icon-double-angle-right"></i>
										文章列表
									</a>
								</li>
								<li>
									<a href="./article_special_add.php">
										<i class="icon-double-angle-right"></i>
										专题添加
									</a>
								</li>
								<li>
									<a href="./article_special_list.php">
										<i class="icon-double-angle-right"></i>
										专题列表
									</a>
								</li>
							</ul>
						</li>
						<!-- /end 文章管理 -->
						<!-- start 独立模块 -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-th-large"></i>
								<span class="menu-text"> 独立模块</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="message.php">
										<i class="icon-double-angle-right"></i>
										<span class="menu-text"> 信息简报管理</span>
									</a>
								</li>
								<li>
									<a href="index.html">
										<i class="icon-double-angle-right"></i>
										<span class="menu-text"> 网络通知管理</span>
									</a>
								</li>
								
								<li>
									<a href="index.html">
										<i class="icon-double-angle-right"></i>
										<span class="menu-text"> 上级通知管理</span>
									</a>
								</li>
								
								<li <?php if (!isset($_smarty_tpl->tpl_vars['file'])) $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['file']->value = $_SERVER['PHP_SELF'] == "/admin/tax_info_list.php") {?>class="active"<?php }?>>
									<a href="./tax_info_list.php">
										<i class="icon-double-angle-right"></i>
										<span class="menu-text"> 税收管理</span>
									</a>
								</li>
								<li>
									<a href="users_roster.php">
										<i class="icon-double-angle-right"></i>
										<span class="menu-text">花名册管理</span>
									</a>
								</li>
							<!-- 
								<li>
									<a href="users_roster_add.php">
										<i class="icon-dashboard"></i>
										<span class="menu-text">花名册添加</span>
									</a>
								</li>
								 -->
								<li>								
									<a href="duty.php">
										<i class="icon-double-angle-right"></i>
										<span class="menu-text">值班表</span>
									</a>
								</li>
							</ul>
						</li>
						<!-- /end 独立模块 -->
						<!-- start 友情链接 -->
						<li>
							<a href="" class="dropdown-toggle">
								<i class="icon-link"></i>
								<span class="menu-text"> 友情链接管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							
							<ul class="submenu">
								<li>
									<a href="friend_link_add.php">
										<i class="icon-double-angle-right"></i>
										添加友情链接
									</a>
								</li>
								<li>
									<a href="friend_link.php">
										<i class="icon-double-angle-right"></i>
										友情列表
									</a>
								</li>
							</ul>
						</li>
						<!-- /end 友情链接 -->
						<!-- start 字典管理 -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-table"></i>
								<span class="menu-text"> 字典管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="dictionary_department.php">
										<i class="icon-double-angle-right"></i>
										部门分类
									</a>
								</li>
							</ul>
						</li>
						<!-- /end 字典管理 -->
						<!-- start 广告管理 -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 广告管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="advertisement_add.php">
										<i class="icon-double-angle-right"></i>
										广告添加
									</a>
								</li>
								<li>
									<a href="advertisement_list.php">
										<i class="icon-double-angle-right"></i>
										广告列表
									</a>
								</li>
							</ul>
						</li>
						<!-- /end 广告管理 -->
						
						<!-- start 用户管理 -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 用户管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="user_add.php">
										<i class="icon-double-angle-right"></i>
										用户添加
									</a>
								</li>
								<li>
									<a href="users_list.php">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>
							</ul>
						</li>
						<!-- /end 用户管理 -->

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<?php echo '<script'; ?>
 type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					<?php echo '</script'; ?>
>
				</div><?php }
}
?>