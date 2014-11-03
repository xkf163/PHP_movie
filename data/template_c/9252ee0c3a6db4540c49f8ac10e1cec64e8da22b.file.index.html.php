<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-03 12:27:15
         compiled from "tpl\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:188865450762b500a30-41478977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9252ee0c3a6db4540c49f8ac10e1cec64e8da22b' => 
    array (
      0 => 'tpl\\index\\index.html',
      1 => 1415014032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188865450762b500a30-41478977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5450762b54ec32_60030174',
  'variables' => 
  array (
    'webName' => 0,
    'configAll' => 0,
    'rowArray' => 0,
    'typeStr' => 0,
    'typeValArray' => 0,
    'typeVal' => 0,
    'mInfo' => 0,
    'movie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5450762b54ec32_60030174')) {function content_5450762b54ec32_60030174($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fff="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.9.0/jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="tpl/index/css/reset.css" type="text/css">
    <link rel="stylesheet" href="tpl/index/css/home.css" type="text/css">
	<title><?php echo $_smarty_tpl->tpl_vars['webName']->value['configvalue'];?>
</title> 
</head>

<body>
<div class="f_Header" style="height: 60px;width: 100%;background-color:#45729B">
</div>
<div class="f_Body_filterArea comWidth">
    <h3>电影筛选</h3>
    	<?php  $_smarty_tpl->tpl_vars['rowArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowArray']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['configAll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowArray']->key => $_smarty_tpl->tpl_vars['rowArray']->value) {
$_smarty_tpl->tpl_vars['rowArray']->_loop = true;
?>
    		 <?php  $_smarty_tpl->tpl_vars['typeValArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['typeValArray']->_loop = false;
 $_smarty_tpl->tpl_vars['typeStr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rowArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['typeValArray']->key => $_smarty_tpl->tpl_vars['typeValArray']->value) {
$_smarty_tpl->tpl_vars['typeValArray']->_loop = true;
 $_smarty_tpl->tpl_vars['typeStr']->value = $_smarty_tpl->tpl_vars['typeValArray']->key;
?>
    		<dl class="filter_dl clearfix">
    		 	<dt><?php echo $_smarty_tpl->tpl_vars['typeStr']->value;?>
:</dt>   			
    			<dd class="filterLimit"><a class="active" href="#">全部</a></dd>
                <dd class="filter_dd" id="filter_dd">
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['typeVal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['typeVal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeValArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['typeVal']->key => $_smarty_tpl->tpl_vars['typeVal']->value) {
$_smarty_tpl->tpl_vars['typeVal']->_loop = true;
?>
    					<li><a href="#" onclick="Aclick(this)" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['typeVal']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="filter_lk"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['typeVal']->value)===null||$tmp==='' ? '' : $tmp);?>
</a></li>
    				<?php } ?>
    			 	</ul>
    			 	<?php if (count($_smarty_tpl->tpl_vars['typeValArray']->value)>10) {?>
                    <div class="type_more fr">
                        <span onclick="seeMore(this)" id="seeMore"><b></b>更多</span>
                        <span onclick="seeLess(this)" id="seeLess" style="display: none"><b></b>收起</span>
                    </div>
                    <?php }?>
                </dd>
           </dl>
            <?php } ?>
    	<?php } ?>
</div>

<div class="f_Body_SortByArea comWidth">
    <span class="item_sortBy_number fl">共&nbsp;<b style="color:darkred">1000</b>&nbsp;部</span>
    <span class="item_sortBy_title fl">排序：</span>
    <ul>
        <li><a href="#">更新日期↑↓</a></li>
        <li><a href="#">上映日期↑↓</a></li>
        <li><a href="#">影片名A-Z↑↓</a></li>
        <li><a href="#">IMDB评分↑↓</a></li>
        <li><a href="#">IMDB编号↑↓</a></li>
    </ul>
    <div class="item_sortBy_viewmode fr clearfix">
        <a title="图片显示" href="javascript:void(0)" class="byBlock"  data-spm-anchor-id="0.0.0.0">图片显示</a>
        <a title="列表显示" href="javascript:void(0)" class="byList"   data-spm-anchor-id="0.0.0.0">列表显示</a>
    </div>
</div>




 <div class="f_Body_itemsArea comWidth clearfix ">
                     <dl class="f_Body_itemsArea_dl clearfix">
                         <dd class="f_Body_itemsArea_dl_dd">
                             <ul class="f_Body_itemsArea_dl_dd_ul clearfix">                             
                             		<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
?>
                                    <li><a href="admin.php?controller=admin&method=movieadd&id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['uid'];?>
" target="_blank"><img src="img_imdb/tt0244316.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['movie']->value['mtitle'];?>
"/></a></li> 
                                    <?php } ?>                               
                            </ul>
                        </dd>
                    </dl>
</div>


<div class="f_Footer fl" style="height:50px;width: 100%;background-color:#45729B" >

</div>
<?php echo '<script'; ?>
>
    function seeMore(obj){
    	var filter_dd=$(obj).parent().parent();
    	filter_dd.height('auto');
    	
    	$(obj).hide();

        var seeLess=$(obj).parent().find("span[id='seeLess']");
        seeLess.show();
    };
    function seeLess(obj){
        var filter_dd=$(obj).parent().parent();
    	filter_dd.height('15px');

    	$(obj).hide();
        
        var seeLess=$(obj).parent().find("span[id='seeMore']");
        seeLess.show();
    };

    function Aclick(obj){
    	$(obj).attr('class','active');
    }

<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
