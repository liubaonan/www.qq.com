<?php /* Smarty version 3.1.27, created on 2015-10-13 10:32:37
         compiled from "D:\wamp\www\www.qq.com\20151008   smarty\template\index2.html" */ ?>
<?php
/*%%SmartyHeaderCode:3801561cc1a52d23d4_46277871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bcf9417db202bf0cae2c34b4e262a84b9051de6' => 
    array (
      0 => 'D:\\wamp\\www\\www.qq.com\\20151008   smarty\\template\\index2.html',
      1 => 1444725156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3801561cc1a52d23d4_46277871',
  'variables' => 
  array (
    'arr' => 0,
    'a' => 0,
    'date' => 0,
    'date2' => 0,
    'arr2' => 0,
    'v' => 0,
    'obj' => 0,
    'foo' => 0,
    'title' => 0,
    'sen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cc1a538dc07_93048408',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cc1a538dc07_93048408')) {
function content_561cc1a538dc07_93048408 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3801561cc1a52d23d4_46277871';
?>
<html>
<body>
我的第一个smarty
<br/>
<!--
你只需要知道，我叫刘宝南
-->
<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
<?php echo $_smarty_tpl->tpl_vars['a']->value[0];?>
.<?php echo $_smarty_tpl->tpl_vars['a']->value[1];?>

<br/>
<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
<?php echo $_smarty_tpl->tpl_vars['a']->value[0];?>
.<?php echo $_smarty_tpl->tpl_vars['a']->value[1];?>

<br/>
<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>

<?php echo $_smarty_tpl->tpl_vars['date']->value;?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['date2']->value;?>


<br/>
<?php echo time();?>

<br/>
<?php echo '3.1.27';?>

<br/>
<hr/>
<?php
$_from = $_smarty_tpl->tpl_vars['arr2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<hr/>
<?php echo $_smarty_tpl->tpl_vars['obj']->value->one['name'];?>


<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(array(1,2,3), null, 0);?>
显示<?php echo $_smarty_tpl->tpl_vars['foo']->value[1];?>

<br/>
字符技术
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['title']->value, $tmp);?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['sen']->value;?>





































































</body>
</html><?php }
}
?>