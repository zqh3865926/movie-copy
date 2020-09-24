<?php
	require('./libs/Smarty.class.php');
	$sm = new Smarty;
	$sm->template_dir = './inc/dir';
	$sm->left_delimiter = '<{';
	$sm->right_delimiter = '}>';
	
	require('./inc/aGetApi.php');
	$apiClass = new ApiController;

	$title = $_GET['title'];
	$id = $_GET['id'];
	//开启缓存
	$sm->caching = true;
	//缓存声明周期 秒
	$sm->cache_lifetime = 60*60;
	if(!$sm->isCached('v.html.php',$id)){
		$data = $apiClass->aGetInfo($id, $title);
		if(!$data){
			$apiClass->error(105,'Info:The data queried is empty.');
		}else{
			$sm->assign('dellist',$data['list']);
		}
	}
	$sm->display('v.html.php',$id);
?>