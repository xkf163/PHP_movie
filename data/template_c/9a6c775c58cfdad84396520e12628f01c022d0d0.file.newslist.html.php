<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-29 06:19:50
         compiled from "tpl\admin\newslist.html" */ ?>
<?php /*%%SmartyHeaderCode:28475545078f6d72184-61256207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6c775c58cfdad84396520e12628f01c022d0d0' => 
    array (
      0 => 'tpl\\admin\\newslist.html',
      1 => 1414497304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28475545078f6d72184-61256207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545078f6e83886_04113868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545078f6e83886_04113868')) {function content_545078f6e83886_04113868($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	
	<link rel="stylesheet" href="img/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<?php echo '<script'; ?>
 src="img/js/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="img/js/jquery-1.5.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/hideshow.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/jquery.tablesorter.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="img/js/jquery.equalHeight.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
<?php echo '</script'; ?>
>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin.php?controller=admin&method=index">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="index.php">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?controller=admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">电影管理列表</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">电影管理列表</h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0" style="margin:0"> 
					<thead> 
						<tr>  
			    				<th>UID</th>
			    				<th>片名</th>
			    				<th>导演</th>
			    				<th>年代</th>
			    				<th>IMDB评分</th>
			    				<th>操作时间</th>
						</tr> 
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						<tr>
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['mtitle'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['mdirector'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['myear'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['mrating'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['mmodifydate'];?>
</td> 
			    				<td><input type="image" src="img/images/icn_edit.png" title="编辑" onclick="window.location.href='admin.php?controller=admin&method=movieadd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
'"><input type="image" src="img/images/icn_trash.png" title="Trash" onclick="window.location.href='admin.php?controller=admin&method=moviedel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
'"></td>
						</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
						<tr>
							<td  colspan=4>
								暂无电影
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		<div class="spacer"></div>
	</section>


</body>

</html><?php }} ?>
