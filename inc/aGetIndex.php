<?php
	require('aGetApi.php');
	$apiClass = new ApiController;
	$page = isset($_GET['page']) ? $_GET['page']*20 : 0;
	$type = isset($_GET['type']) ? $_GET['type'] : 'all';
	$data = $apiClass->aGetIndex($type,$page);
	if(!$data){
		$apiClass->error(105,'Index:The data queried is empty.');
	}else{
		return $data;
	}
?>