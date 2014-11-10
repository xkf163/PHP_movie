<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-10 14:24:05
         compiled from "tpl\admin\newsadd.html" */ ?>
<?php /*%%SmartyHeaderCode:2987654508d32869aa2-98326612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ae385eb64f7854e5454fe1d15f2014e6f0fb3b5' => 
    array (
      0 => 'tpl\\admin\\newsadd.html',
      1 => 1415625841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2987654508d32869aa2-98326612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54508d32a8c8a5_11612738',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54508d32a8c8a5_11612738')) {function content_54508d32a8c8a5_11612738($_smarty_tpl) {?><!doctype html>
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
 type="text/javascript" src="img/js/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="img/js/ckeditor/adapters/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() 
    	{ 
		  $("#content").ckeditor();
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
			<article class="breadcrumbs"><a href="admin.php？controller=admin">后台管理系统</a> <div class="breadcrumb_divider"></div> <a class="current">文章发布</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<section id="main" class="column">
		<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="admin.php?controller=admin&method=movieadd">
			<article class="module width_full">
				<header><h3>添加新电影</h3></header>
					<div class="module_content">
							<fieldset style="width:31%; float:left;margin-right: 3%;">
								<label>中文片名</label>
								<input type="text" name="mtitle" style="width:70%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mtitle'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:31%; float:left;margin-right: 3%;">
								<label>外文片名</label>
								<input type="text" name="mforeigntitle" style="width:85%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mforeigntitle'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:31%; float:left">
								<label>其他片名</label>
								<input type="text" name="mothertitle" style="width:85%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mothertitle'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							
							<fieldset style="width:13%; float:left;margin-right: 1%;">
								<label>IMDB编号</label>
								<input type="text" name="imdb" style="width:70%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['imdb'])===null||$tmp==='' ? '' : $tmp);?>
">	
							</fieldset>
							<fieldset style="width:13%; float:left;margin-right: 1%;">
								<label>本站编号</label>
								<input type="text" name="mno" style="width:70%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mno'])===null||$tmp==='' ? '' : $tmp);?>
">	
							</fieldset>
							<fieldset style="width:10%; float:left;margin-right: 1%;">
								<label>年代</label>
								<input type="text" name="myear"  style="width:66%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['myear'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:9%; float:left;margin-right: 1%;">
								<label>IMDB评分</label>
								<input type="text" name="mrating" style="width:66%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mrating'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:10%; float:left;margin-right: 1%;">
								<label>片长[分钟]</label>
								<input type="text" name="mtime" style="width:70%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mtime'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:10%; float:left;margin-right: 1%;">
								<label>分级</label>
								<input type="text" name="mlevel" style="width:80%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mlevel'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:16%; float:left;margin-right: 1%;">
								<label>片商</label>
								<input type="text" name="mentertainment" style="width:80%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mentertainment'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:10%; float:left;">
								<label>色彩</label>
								<input type="text" name="mcolor" style="width:70%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mcolor'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							
							
							<fieldset style="width:20%; float:left; margin-right: 1%;">
								<label>导演</label>
								<input type="text" name="mdirector" style="width:88%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mdirector'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:20%; float:left; margin-right: 1%;">
								<label>编剧</label>
								<input type="text" name="mwriter" style="width:88%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mwriter'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:20%; float:left; margin-right: 1%;">
								<label>制片人</label>
								<input type="text" name="mproducer" style="width:88%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mproducer'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:36%; float:left;">
								<label>影片类型</label>
								<input type="text" name="mcategory" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mcategory'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							
							<fieldset style="width:100%; float:left;">
								<label>主演</label>
								<input type="text" name="mcast" style="width:98%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mcast'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							
							
							<fieldset style="width:31%; float:left;margin-right: 3%;">
								<label>上映日期</label>
								<input type="text" name="mreleasedate" style="width:70%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mreleasedate'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:31%; float:left;margin-right: 3%;">
								<label>国家/地区</label>
								<input type="text" name="marea" style="width:85%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['marea'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:31%; float:left">
								<label>语言</label>
								<input type="text" name="mlang" style="width:85%;"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mlang'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							
							
							
							<fieldset style="width:100%; float:left;">								
								<textarea name="content" id="content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
							</fieldset>
							
							<fieldset style="width:48%; float:left;margin-right: 3%;">
								<label>创建时间</label>
								<input type="text" name="mcreatedate" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mcreatedate'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:48%; float:left;">
								<label>修改时间</label>
								<input type="text" name="mmodifydate" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['mmodifydate'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:99%; float:left;">		
                                <input name="attachment" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['attachment'])===null||$tmp==='' ? '' : $tmp);?>
" type="file" />
								<input name="attachment1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['attachment'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" />
							</fieldset>
							<div class="clear"></div>
					</div>
				<footer>
					<div class="submit_link">
						<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uid'])===null||$tmp==='' ? '' : $tmp);?>
">
						<input type="submit" name="submit" value="提交" class="alt_btn">
					</div>
				</footer>
			</article>
		</form>
		<div class="spacer"></div>
	</section>


</body>

</html><?php }} ?>
