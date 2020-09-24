<?php
define('ROOT_PATH',dirname(dirname(__FILE__)));
require(ROOT_PATH.'/vendor/autoload.php');
use \GuzzleHttp\Client;
	class ApiController{
		 /**获取首页数据
		 * tags = 分类(全部形式 电影 电视剧 综艺 动漫 纪录片)
		 * start = 从第几部开始
		 */
		public function aGetIndex($type,$page){
			if($type == 'dy'){
				$type = '电影';
			}elseif($type == 'dsj'){
				$type = '电视剧';
			}elseif($type == 'zy'){
				$type = '综艺';
			}elseif($type == 'dm'){
				$type = '动漫';
			}else{
				$type = null;
			}
			$url_page = "https://movie.douban.com/j/new_search_subjects?sort=U&range=0,10&apikey=0df993c66c0c636e29ecbb5344252a4a&tags=$type&start=$page";
			$datajson = $this->aGetUrl($url_page);
			if(count($datajson['data']) == 0){
				return false;
			}
			$datajson = $datajson['data'];
			$data = array('code' => 200,'total' => count($datajson)-2,'list' => array());
			for($i= 0; $i < count($datajson)-2;$i++){
				$data['list'][] = array('title' => $datajson[$i]['title'],'id' => $datajson[$i]['id'],'cover' => $datajson[$i]['cover'],'rate' => $datajson[$i]['rate'],'type' => $type);
			}
			return $data;
		}
		
		/**
		 * 获取详情
		 * $v = 关键词
		 */
		public function aGetInfo($id,$title){
			if(!empty($title)){
				$url = "https://api.okzy.tv/api.php/provide/vod/?wd=$title";
				$listjson = $this->aGetUrl($url);
				$listjson = $listjson['list'];
				if(count($listjson) == 0){
					return false;
				}
				
				$vod_id = '';
				for ($i=0; $i < count($listjson); $i++) {
					$vod_id .= $listjson[$i]['vod_id'] . ',';
				}
				$id = rtrim($vod_id,',');
			}
			$delurl = 'https://api.okzy.tv/api.php/provide/vod/?ac=detail&ids='.$id;
			$deljson = $this->aGetUrl($delurl);
			$dellist = array_reverse($deljson['list']);
			$data = array('code' => 200,'total' => count($dellist),'list' => array());
			for ($i=0; $i < count($dellist); $i++) {
				$data['list'][] = array(
					'vod_id' => $dellist[$i]['vod_id'],
					'vod_name' => $dellist[$i]['vod_name'],
					'type_name' => $dellist[$i]['type_name'],
					'vod_content' => $dellist[$i]['vod_content'],
					'vod_play_url' => $this->aPlay_url($dellist[$i]['vod_play_url'])
				);
			}
			return $data;
		}
		 
		 
		public function aGetSearch($v){
			$url = "https://api.okzy.tv/api.php/provide/vod/?wd=$v";
			$listjson = $this->aGetUrl($url);
			$listjson = $listjson['list'];
			if(count($listjson) == 0){
				return false;
			}
			
			$vod_id = '';
			for ($i=0; $i < count($listjson); $i++) {
				$vod_id .= $listjson[$i]['vod_id'] . ',';
			}
			$vod_id = rtrim($vod_id,',');
			
			$delurl = 'https://api.okzy.tv/api.php/provide/vod/?ac=detail&ids='.$vod_id;
			$deljson = $this->aGetUrl($delurl);
			$dellist = array_reverse($deljson['list']);
			$data = array('code' => 200,'total' => count($dellist),'list' => array());
			for ($i=0; $i < count($dellist); $i++) {
				$data['list'][] = array(
					'vod_id' => $dellist[$i]['vod_id'],
					'vod_name' => $dellist[$i]['vod_name'],
					'vod_pic' => $dellist[$i]['vod_pic'],
					'vod_rate' => rand(5, 9) . '.0'
				);
			}
			return $data;
		}
		
		private function aPlay_url($play){
			$arr1 = explode('$$$', $play);
			$arr2 = [];
			$arr3 = [];
			if(strpos($arr1[0],'.m3u8')){
				$arr2 = explode('#', $arr1[0]);
			}else{
				$arr2 = explode('#', $arr1[1]);
			}
			for ($i=0; $i < count($arr2); $i++) { 
				$arr3[] = explode('$', $arr2[$i]);
			}
			return $arr3;
		}
		
		/**
		 * 报错反馈
		 */
		public function error($code,$msg){
			$data = array('code' => $code, 'msg' => $msg);
			echo json_encode($data,true);
		}
		
		private function aGetUrl($url){
		    $client  =new Client();
            $response = $client->request('get', $url);
		    return json_decode($response->getBody(),true);
		}
		
		public function aGetQQinto($qq){
			$get_info = $this->aGetUrl('https://api.unipay.qq.com/v1/r/1450000186/wechat_query?cmd=1&pf=mds_storeopen_qb-__mds_qqclub_tab_-html5&pfkey=pfkey&from_h5=1&from_https=1&openid=openid&openkey=openkey&session_id=hy_gameid&session_type=st_dummy&qq_appid=&offerId=1450000186&sandbox=&provide_uin=' . $qq);
			if(!isset($get_info['nick'])){
				return false;
			}
			$name = urldecode($get_info['nick']);
			$txurl = 'https://q2.qlogo.cn/headimg_dl?dst_uin='.$id.'&spec=100';
			$data = array('code' => 200,'qq' => $qq,'imgurl' =>$txurl,'name' => $name);
			return $data;
		}
	}
?>