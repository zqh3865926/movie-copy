<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:08:27
  from 'C:\Users\Administrator\Desktop\www.jian.com\inc\dir\v.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6c701b6538b8_13261842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b8fb1d3ec5e2f592212227bea134d5e9572c692' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\www.jian.com\\inc\\dir\\v.html.php',
      1 => 1588354159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c701b6538b8_13261842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16352734855f6c701b5c3039_61063927';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <title>可依影视搜索引擎_可依影视采集_可依电影福利院_可依福利电影网_2020最新福利电影电视剧大全在线观看 - u3.ink</title>
	<meta name="Keywords" content="可依影视搜索引擎,可依福利电影网,可依电影网,可依手机网,可依看福利网,可依影城,可依福利影城网,u3.ink">
	<meta name="Description" content="可依影视搜索引擎（u3.ink）最干净的免费电影网,给你更方便的高清无广告电影电视剧在线观看,爱看福利影城电影下载,观看高清电影就上可依采集系统!">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="referrer" content="no-referrer">
    <link rel="shortcut icon" href="../../images/32x32.jpg">
    <link rel="apple-touch-icon" href="../../images/192.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <?php echo '<script'; ?>
 src="../../js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/jquery.lazyload.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-138875328-4"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        if (navigator.serviceWorker) {
            navigator.serviceWorker.register('../../js/sw.js');
        }
    <?php echo '</script'; ?>
>
</head>
<body>
	<div id="header">
	    <div class="logo"><a href="/">影视搜索</a> </div>
	</div>
	<ul class="bar">
	    <li><a href="#wd" title="搜索"><i class="fas fa-search"></i></a></li>
	    <li><a id="backTopBtn" href="#" title="回顶部"><i class="fas fa-chevron-up"></i></a></li>
	</ul>
	<div id="content">
	    <div class="search">
	       <form action="../../search.php" method="GET">
	        <input type="text" name="v" id="wd" placeholder="输入关键词" value autocomplete="off">
	        <button id="submit"><i class="fas fa-search"></i></button>
	       </form>
	    </div>
	
	    <div class="bd">
	        <div class="bd_title"><b>剧名：【<?php echo $_smarty_tpl->tpl_vars['dellist']->value[0]['vod_name'];?>
】在线免费播放,ε=ε=ε=(~￣▽￣)~</b></div>
	        <br />
			<iframe id="video" allowfullscreen="true" frameborder="no" height="500" width="100%" scrolling="no" src="https://www.dplayer.tv/dp/?url=<?php echo $_smarty_tpl->tpl_vars['dellist']->value[0]['vod_play_url'][0][1];?>
"></iframe>
		</div>	    
	    <div class="bd">
	    	<div class="bd_title"><b>数据资源：<font color="red" size="1">备注：如有地址错误，请联系QQ1340236378←向我们报错!</font></b></div>
	    	<ul id="nav">
	    		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dellist']->value[0]['vod_play_url']) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	    			<li style="margin: 0 0 10px 8px;" class="hsc" link="<?php echo $_smarty_tpl->tpl_vars['dellist']->value[0]['vod_play_url'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][1];?>
">
	    				<a href="#"><?php echo $_smarty_tpl->tpl_vars['dellist']->value[0]['vod_play_url'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][0];?>
</a>
	    			</li>
	            <?php
}
}
?>
	        </ul>
	    </div>
	    
	    <div class="bd">
	    	<div class="bd_title"><b>剧情介绍：</b></div>
	    	<div style="text-indent: 2em;"><?php echo $_smarty_tpl->tpl_vars['dellist']->value[0]['vod_content'];?>
</div>
	    </div>
	</div>
	<div id="foot">
		<a class="qq-chat" href="http://u3.ink" target="_blank">可依云主机</a>
	 	版权声明：本网站为非赢利性站点，<br>
	   	 本网站所有内容均来源于互联网相关站点自动搜索采集信息，<br>
		版权归原作者所有<br>
	    © 2019-2020 BY 
	    <a class="qq-chat" href="http://wpa.qq.com/msgrd?v=3&uin=1340236378&site=qq&menu=yes" target="_blank">24h沐然</a> . All rights reserved.
    </div>
	<?php echo '<script'; ?>
 type="application/javascript">
		$('#nav').children("li:first-child").addClass('on');
		$('.hsc').click(function(){
			$link = $(this).attr('link');
			$('#video').attr('src','https://www.dplayer.tv/dp/?url=' + $link);
			$(".hsc").removeClass("on");
			$(this).addClass('on');
		});
	<?php echo '</script'; ?>
>
</body>
</html>


<?php }
}
