<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-29 06:19:50
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:1624545078f6e83886-89074474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cecf7a27ede7734e3921a851e96391153a6dd24d' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1414492253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624545078f6e83886-89074474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545078f6e83886_76043059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545078f6e83886_76043059')) {function content_545078f6e83886_76043059($_smarty_tpl) {?><aside id="sidebar" class="column">
	<h3>电影管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=admin&method=movieadd">添加电影</a></li>
		<li class="icn_categories"><a href="admin.php?controller=admin&method=movielist">管理电影</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=admin&method=loginout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }} ?>
