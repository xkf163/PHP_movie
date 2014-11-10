<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-10 09:33:19
         compiled from "tpl\index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:29835545774cd5a0d19-52258545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84b874cbbe1a424c81f4421bc4f4a277ad694b9' => 
    array (
      0 => 'tpl\\index\\show.html',
      1 => 1415608396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29835545774cd5a0d19-52258545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545774cd5eef28_52569928',
  'variables' => 
  array (
    'mtitle' => 0,
    'attachment' => 0,
    'myear' => 0,
    'mrating' => 0,
    'mcategory' => 0,
    'category' => 0,
    'mdirector' => 0,
    'director' => 0,
    'mwriter' => 0,
    'mcast' => 0,
    'cast' => 0,
    'mtime' => 0,
    'mlevel' => 0,
    'mcolor' => 0,
    'imdb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545774cd5eef28_52569928')) {function content_545774cd5eef28_52569928($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fff="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="tpl/index/css/reset.css" type="text/css">
    <link rel="stylesheet" href="tpl/index/css/home.css" type="text/css">
    <link rel="stylesheet" href="tpl/index/css/show.css" type="text/css">
<title><?php echo $_smarty_tpl->tpl_vars['mtitle']->value[0];?>
</title>
</head>
<body class="clearfix">
<div class="f_Header "  style="height: 60px;width: 100%;background-color:#45729B">
</div>

<div class="film_body comWidth clearfix">
    <!-- <div class="film_position comWidth clearfix">
        <strong><a href="index.html">首页</a></strong><span>&nbsp;&gt;&nbsp;</span><a href="#">电影</a><span>&nbsp;&gt;&nbsp;</span><em>当前影片</em>
    </div>-->
    <div class="filmHeader comWidth clearfix">
        <div class="filmHeader_img fl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['attachment']->value[0];?>
" alt=""/>
        </div>
        <div class="filmHeader_info fl">
              <div class="filmHeader_info_top clearfix" >
                  <div class="title_year fr">
                      <span class="title"><?php echo $_smarty_tpl->tpl_vars['mtitle']->value[0];?>
&nbsp;</span><span>(</span></span><span class="year"><a href="#"><?php echo $_smarty_tpl->tpl_vars['myear']->value[0];?>
</a></span><span>)</span>
                  </div>
                  <div class="rate fr"><?php echo $_smarty_tpl->tpl_vars['mrating']->value[0];?>
</div>
              </div>
            <div class="pg_time_type clearfix">
                <dl class="item">
                    <dt><span>译名:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#">Yi Yi</a><i>|</i></li>
                            <li><a href="#">A One and a Two</a></li>
                        </ul>
                    </dd>
                </dl>

                <dl class="item">
                    <dt><span>类型:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mcategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>                        
                        	<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a><i>|</i></li>                            
						<?php } ?>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>导演:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                        	<?php  $_smarty_tpl->tpl_vars['director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mdirector']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['director']->key => $_smarty_tpl->tpl_vars['director']->value) {
$_smarty_tpl->tpl_vars['director']->_loop = true;
?>
                            <li><a href="director.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['director']->value;?>
</a><i>|</i></li>
                            <?php } ?>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>编剧:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="director.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['mwriter']->value[0];?>
</a><i>|</i></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>制片人:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#">河井真也</a><i>|</i></li>
                            <li><a href="#">余为彦</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>主要演员:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                        <?php  $_smarty_tpl->tpl_vars['cast'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cast']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mcast']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cast']->key => $_smarty_tpl->tpl_vars['cast']->value) {
$_smarty_tpl->tpl_vars['cast']->_loop = true;
?>
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['cast']->value;?>
</a><i>|</i></li>
                         <?php } ?>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>上映日期:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li>2010-05-14</li>

                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>国家/地区:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#">台湾</a><i>|</i></li>
                            <li><a href="#">日本</a></li>

                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>语言:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#">汉语</a><i>|</i></li>
                            <li><a href="#">普通话</a><i>|</i></li>
                            <li><a href="#">闽南话</a><i>|</i></li>
                            <li><a href="#">英语</a><i>|</i></li>
                            <li><a href="#">日语</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>片长:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><?php echo $_smarty_tpl->tpl_vars['mtime']->value[0];?>
<i>分钟</i></li>
                        </ul>
                    </dd>
                </dl>


                <dl class="item">
                    <dt><span>分级:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['mlevel']->value[0];?>
</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>色彩:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['mcolor']->value[0];?>
</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>片商:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#">Omega Project</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="item">
                    <dt><span>IMDB编号:</span></dt>
                    <dd>
                        <ul class="pg_time_type-ul">
                            <li><a href="#">tt<?php echo $_smarty_tpl->tpl_vars['imdb']->value[0];?>
</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="hr_15 comWidth hide"></div>


    <div class="filmBody comWidth">
        <div class="filmBody_story">
            <div class="filmBody_left_title">
                <span class="titleblock"></span>
                <h3>剧情介绍</h3>
            </div>

            <p> 在台北市住着一户中等阶层的家庭：丈夫简南俊，妻子敏敏，大女儿婷婷和年仅8岁的小儿子杨杨，他们和敏敏的母亲共同生活着。</p>
            <p>在敏敏的兄弟阿迪的婚礼中发生了一系列的麻烦事，先是阿迪的旧情人云云在阿迪与小燕的婚礼上大吵大闹，而后在电梯口，简南俊与自己30年前的旧情人谢里相遇，接着因为婷婷忘记倒掉阳台上的垃圾,婆婆下楼倒垃圾导致中风而陷入了昏迷状态，婷婷一直很内疚，认为婆婆的病和自己有关。而在这一系列的打击之下，敏敏的精神几乎崩溃，她开始整天烧香拜佛。</p>
            <p>医生告诫家人需要每天轮流跟婆婆讲话，以帮助其康复。这样的对话，类似于自言自语，每个人都在这样面对自己时，有很多的感触，敏敏发现自己每天告诉婆婆的事情都一样，因为她每天都在重复同样的事情，最后不得不请护士念报纸来解脱尴尬困境，为寻求精神上的解脱，敏敏上山入宿寺庙了。</p>
            <p>新搬来的邻居丽丽和她的男友吵架了，两人分手后，丽丽的男友胖子开始主动和婷婷约会。这一段三角恋的背后发展为一起凶杀，这一切都让婷婷觉得悲伤。</p>
            <p>儿子洋洋受父亲的影响爱上了照相机，他觉得人只能看到一半儿的事情——只能看到前面，看不到后面，于是他开始拍摄人的背面，用儿童单纯而奇特的视角拍摄周围的生活。</p>
            <p>胖子杀死了和丽丽母亲和丽丽都有不正当男女关系的丽丽的英文老师。</p>
            <p>简南俊借着去日本出差的机会和旧情人谢里重叙旧情，两人虽然彼此知道自己是对方的真爱，却无法从头再来。</p>
            <p>不久婆婆去世了，敏敏下山回家。生活一如既往。</p>
            <p>在婆婆的葬礼上，杨杨念了一段自己写的话送给婆婆：“婆婆，我好想你……我觉得我也老了。”</p>
        </div>

        <div class="filmBody_arts clearfix">
            <div class="filmBody_right_title fr">
                <span class="titleblock"></span>
                <h3>演职员表</h3>
            </div>
            <div class="artsList">
                <ul>
                    <li>
                        <div><img src="img_arts/ydc.jpg" alt=""/></div>
                        <div><h3><a href="director.html" target="_blank">杨德昌</a><span>(中国台湾)</span></h3>
                            <p>1947年11月6日－2007年6月29日</p>
                            <p>祖籍广东梅县，台湾电影导演;</p>
                            <p>其电影作品深刻、理性，有强烈的社会意识，手被称作“九十年代最具影响力的台湾大师之一”......</p>
                        </div>
                    </li>

                    <li>
                        <div><img src="img_arts/WNZ.jpg" alt=""/></div>
                        <div><h3><a href="#">吴念真</a><span>(中国台湾)</span></h3>
                            <p>1952年8月5日</p>
                        <p>台湾知名导演、作家、编剧、演员、主持人。</p>
                            <p>五次荣获金马奖最佳编剧</p>

                        </div>
                    </li>
                    <li>
                        <div><img src="img_arts/jyl.jpg" alt=""/></div>
                        <div><h3><a href="#">金燕玲</a><span>(中国台湾)</span></h3>
                            <p>1954年12月15日</p>
                            <p>台湾影视演员，原是歌手出身。</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="filmBody_story">
            <div class="filmBody_left_title">
                <span class="titleblock"></span>
                <h3>精彩对白</h3>
            </div>
            <p>简南峻：诚意可以装，老实可以装，交朋友可以装，做生意可以装，那这个世界上还有什么是真的？</p>
            <p>简南峻：你不在的时候，我有个机会去过了，一段年轻时候的日子。本来以为，我再活一次的话，也许会有什么不一样。结果……还是差不多，没什么不同。只是突然觉得，再活一次的话，好像……真的没那个必要，真的没那个必要。”</p>
            <p>简南峻：每天做不喜欢的事情，怎么会快乐呢？</p>
            <p>洋洋：爸比，你看到的我看不到，我看到的你也看不到。我怎么知道你在看什么呢？爸比，我们是不是只能知道一半的事情？我只能看到前面，看不到后面，这样不是就有一半的事情看不到了吗？</p>
            <p>洋洋：你常跟我说，你老了。我很想跟他说，我觉得…我也老了…</p>
            <P>婆婆，对不起，不是我不喜欢跟你讲话，只是我觉得我能跟你讲的你一定老早就知道了。不然，你就不会每次都叫我“听话”。就像他们都说你走了，你也没有告诉我你去了哪里，所以，我觉得，那一定是我们都知道的地方。婆婆，我不知道的事情太多了，所以，你知道我以后想做什么吗？我要去告诉别人他们不知道的事情，给别人看他们看不到的东西。我想，这样一定天天都很好玩。说不定，有一天，我会发现你到底去了哪里。到时候，我可不可以跟大家讲，找大家一起过来看你呢？婆婆，我好想你，尤其是我看到那个还没有名字的小表弟，就会想起，你常跟我说：你老了。我很想跟他说，我觉得，我也老了……</P>
        </div>

        <div class="filmBody_story">
            <div class="filmBody_right_title fr">
                <span class="titleblock"></span>
                <h3>相关评论</h3>
            </div>
            <p>我认为这部电影是一位大师完全掌握支配他的艺术资源的杰出作品，我泪眼模糊地看着片尾字幕，挣扎着去形容那股深深感动我、又扯碎我的力量。是哀伤？喜悦？欢乐？是的，我想都是。不过最大的感受是感激。——《纽约时报》影评人　A.O.斯科特</p>
            <p>《一一》是一部很有深度的难得的好片，它展现了人的生命中蓝色的一面，虽然它描写的是一个中国家庭及周遭所发生的事，但它精确地掌握着每一个镜头，把所有人物的每一件事都处理得恰到好处，故事情节简单，内涵深远，美不胜收，没有说教，但已赤裸裸地呈现出中国人的人生哲理。——法国宗教报纸《十字架报》</p>
            <p>这部影片充满着生命力，它所叙述的现代中国家庭所存在的冲突显示了“传统思想”与“台湾超现代”之间的互动关系。——法国《世界报》</p>
            <p>《一一》里每个人物的境遇不论是专注、关爱、矛盾、冲突，抑或忧伤、喜悦、痴情、梦想，都是一首首生命的诗篇，咏颂生命的每一个音节。这个“生命的诗篇”虽然发生在台湾一个普通的家庭中，其实也是放诸四海而皆准的。——法国著名影评人　培尼赫</p>
        </div>

        <div class="filmBody_story">
            <div class="filmBody_left_title">
                <span class="titleblock"></span>
                <h3>获奖记录</h3>
            </div>

            <p>第五十三届戛纳电影节最佳导演奖</p>
            <p>第三十五届全美影评人协会奖最佳影片</p>
            <p>《时代》周刊评选的年度十佳影片</p>
            <p>第一届华语电影传媒大奖最佳影片</p>

        </div>

    </div>
</div>

<div class="Recently_Viewed comWidth">
    <h3>最新添加</h3>
    <ul>
        <li><a href="/title/tt2872732/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Lucy - viewed 30 seconds ago" alt="Lucy - viewed 30 seconds ago"> </a></li>
        <li><a href="/title/tt0829150/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Dracula Untold - viewed 7 seconds ago" alt="Dracula Untold - viewed 7 seconds ago"> </a></li>
        <li><a href="/title/tt2294629/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Frozen - viewed 1 day ago" alt="Frozen - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt2109248/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Transformers: Age of Extinction - viewed 11 seconds ago" alt="Transformers: Age of Extinction - viewed 11 seconds ago"> </a></li>
        <li><a href="/title/tt0496806/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Ocean's Thirteen - viewed 23 hours ago" alt="Ocean's Thirteen - viewed 23 hours ago"> </a></li>
        <li><a href="/title/tt4008652/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="I Am Ali - viewed 1 day ago" alt="I Am Ali - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt1872194/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="The Judge - viewed 1 day ago" alt="The Judge - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt1843230/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Once Upon a Time - viewed 1 day ago" alt="Once Upon a Time - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt2398231/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="The Homesman - viewed 1 day ago" alt="The Homesman - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt2905838/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Bang Bang - viewed 1 day ago" alt="Bang Bang - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt1327801/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Glee - viewed 1 day ago" alt="Glee - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt2180411/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Into the Woods - viewed 1 day ago" alt="Into the Woods - viewed 1 day ago"> </a></li>
        <li><a href="/title/tt2180411/?ref_=rvi_tt"> <img width="67" height="98" src="img_imdb_sm/imdb_sm001.jpg" title="Into the Woods - viewed 1 day ago" alt="Into the Woods - viewed 1 day ago"> </a></li>
    </ul>
</div>



</body>
</html>
<?php }} ?>
