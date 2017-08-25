<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function __construct(){
		parent::__construct();
		$isLogined = session('isLogined');
		if(!isset($isLogined)){
			$this->error('请先登录',U('Login/index')); 
		}
		
	}



	protected function getPages($count){
		$page = new \Think\Page($count,2);
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$pages = $page->show();
		return $pages;
	}
}
?>