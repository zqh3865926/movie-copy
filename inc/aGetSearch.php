<?php
	if(!empty($_GET['v'])){
		require('aGetApi.php');
		$apiClass = new ApiController;
		$searchData = $apiClass->aGetSearch($_GET['v']);
		if(!$searchData){
			$apiClass->error(105,'Wd:The data queried is empty.');
		}else{
			return $searchData;
		}
	}else{
		echo "<script>alert('请输入关键词');</script>";
	}
?>