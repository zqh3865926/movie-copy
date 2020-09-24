<?php
	require('aGetApi.php');
	$apiClass = new ApiController;
	$title = isset($_GET['title']) ? $_GET['title'] : '';
	$data = $apiClass->aGetInfo($_GET['id'],$_GET['title']);
	if(!$data){
		$apiClass->error(105,'Info:The data queried is empty.');
	}else{
		return $data;
	}
?>