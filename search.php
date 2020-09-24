	<?php include('head.php');?>
	<?php require('./inc/aGetSearch.php');?>
	<div class="bd">
		<div id="title"><b>你搜索的《<?php echo $_GET['v'] ?>》如下：</b></div>
		<ul id="list">
			<?php if($searchData['total'] == 0){
				echo '未获取到资源(⊙o⊙)？';
			}else{
				for ($i=0; $i < $searchData['total']; $i++) { 
			?>
			<li>
				<a href="info.php?id=<?php echo $searchData['list'][$i]['vod_id']; ?>">
				<img class="lazy" src="images/load.gif" data-original="<?php echo $searchData['list'][$i]['vod_pic']; ?>" width="120" height="176">
				<em>评分：<b><?php echo $searchData['list'][$i]['vod_rate']; ?></b></em>
				<span><?php echo $searchData['list'][$i]['vod_name']; ?></span></a>
			</li>
			<?php }} ?>
		</ul>
		<script>$('img.lazy').lazyload({effect: "fadeIn"});
			$('#backTopBtn').click(function() {
				$('html, body').animate({
					scrollTop: 0
				}, 700);
			});
		</script>
	</div>
	<div class="page">
		<a <?php if (empty($_GET['page'])) { echo 'style="box-shadow:none; color:#ddd; background:none;pointer-events: none;"';}?> href="?page=<?php echo $_GET['page'] - 1; ?>">上一页</a>
		<a><?php if (empty($_GET['page']) || $_GET['page'] < 1) {echo '首页';} else {echo '第' . $_GET['page'] . '页';}?></a>
<a <?php if (empty($_GET['page'])) { echo 'style="box-shadow:none; color:#ddd; background:none;pointer-events: none;"';}?> href="?page=<?php echo $_GET['page'] + 1; ?>">上一页</a>
	</div>
</div>
<?php include('foot.php');?>


