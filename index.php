	<?php include('./head.php');?>
	<?php $indexData = require ('./inc/aGetIndex.php'); ?>
	<div class="bd">
		<div id="title"><b>热门推荐</b></div>
		<ul id="nav">
			<li class="hscore"><a href="/">全部形式</a></li>
			<li class="hot"><a href="/?type=dy">热门电影</a></li>
			<li class="teleplay"><a href="/?type=dsj">热门剧集</a></li>
			<li class="zongyi"><a href="/?type=zy">综艺</a></li>
			<li class="dongman"><a href="/?type=dm">动漫</a></li>
		</ul>
		<script>
			<?php if (empty($_GET['type'])) {
				echo '$(".hscore").addClass("on")';
			} elseif ($_GET['type'] == 'dy') {
				echo '$(".hot").addClass("on")';
			} elseif ($_GET['type'] == 'dsj') {
				echo '$(".teleplay").addClass("on")';
			} elseif ($_GET['type'] == 'zy') {
				echo '$(".zongyi").addClass("on")';
			} elseif ($_GET['type'] == 'dm') {
				echo '$(".dongman").addClass("on")';
			}?>
		</script>
		<ul id="list">
			<?php if($indexData['total'] == 0){
				echo '未获取到资源(⊙o⊙)？';
			}else{
				for ($i=0; $i < $indexData['total']; $i++) { 
			?>
			<li>
				<a href="./info.php?id=<?php echo $indexData['list'][$i]['id']; ?>&title=<?php echo $indexData['list'][$i]['title']; ?>">
				<img class="lazy" src="images/load.gif" data-original="<?php echo $indexData['list'][$i]['cover']; ?>" width="120" height="176">
				<em>评分：<b><?php echo $indexData['list'][$i]['rate']; ?></b></em>
				<span><?php echo $indexData['list'][$i]['title']; ?></span></a>
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
		<a <?php if (empty($_GET['page'])) { echo 'style="box-shadow:none; color:#ddd; background:none;pointer-events: none;"';}?> href="?type=<?php echo $_GET['type']; ?>&page=<?php echo $_GET['page'] - 1; ?>">上一页</a>
		<a><?php if (empty($_GET['page']) || $_GET['page'] < 1) {echo '首页';} else {echo '第' . $_GET['page'] . '页';}?></a>
		<a href="?type=<?php echo $_GET['type']; ?>&page=<?php echo $_GET['page'] + 1; ?>">下一页</a>
	</div>
</div>
<?php include('./foot.php');?>



