<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <title>崋箜影视搜索引擎_崋箜影视采集_崋箜电影福利院_崋箜福利电影网_2020最新福利电影电视剧大全在线观看 - u3.ink</title>
	<meta name="Keywords" content="崋箜影视搜索引擎,崋箜福利电影网,崋箜电影网,崋箜手机网,崋箜看福利网,崋箜影城,崋箜福利影城网">
	<meta name="Description" content="崋箜影视搜索最干净的免费电影网,给你更方便的高清无广告电影电视剧在线观看,爱看福利影城电影下载,观看高清电影就上崋箜采集系统!">
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
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery.lazyload.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138875328-4"></script>
    <script>
        if (navigator.serviceWorker) {
            navigator.serviceWorker.register('../../js/sw.js');
        }
    </script>
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
	        <div class="bd_title"><b>剧名：【<{$dellist[0]['vod_name']}>】在线免费播放,ε=ε=ε=(~￣▽￣)~</b></div>
	        <br />
			<iframe id="video" allowfullscreen="true" frameborder="no" height="500" width="100%" scrolling="no" src="https://www.dplayer.tv/dp/?url=<{$dellist[0]['vod_play_url'][0][1]}>"></iframe>
		</div>
	    <div class="bd">
	    	<div class="bd_title"><b>数据资源：<font color="red" size="1">备注：如有地址错误，请联系QQ1340236378←向我们报错!</font></b></div>
	    	<ul id="nav">
	    		<{section name=i loop=$dellist[0]['vod_play_url']}>
	    			<li style="margin: 0 0 10px 8px;" class="hsc" link="<{$dellist[0]['vod_play_url'][i][1]}>">
	    				<a href="#"><{$dellist[0]['vod_play_url'][i][0]}></a>
	    			</li>
	            <{/section}>
	        </ul>
	    </div>

	    <div class="bd">
	    	<div class="bd_title"><b>剧情介绍：</b></div>
	    	<div style="text-indent: 2em;"><{$dellist[0]['vod_content']}></div>
	    </div>
	</div>
	<div id="foot">
	 	版权声明：本网站为非赢利性站点，<br>
	   	 本网站所有内容均来源于互联网相关站点自动搜索采集信息，<br>
		版权归原作者所有<br>
	    © 2019-2020 . All rights reserved.
    </div>
	<script type="application/javascript">
		$('#nav').children("li:first-child").addClass('on');
		$('.hsc').click(function(){
			$link = $(this).attr('link');
			$('#video').attr('src','https://www.dplayer.tv/dp/?url=' + $link);
			$(".hsc").removeClass("on");
			$(this).addClass('on');
		});
	</script>
    <script type="text/javascript" src="https://s4.cnzz.com/z_stat.php?id=1279310425&web_id=1279310425"></script>
</body>
</html>


