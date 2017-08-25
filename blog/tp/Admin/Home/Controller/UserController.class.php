<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function show(){
		
		$p = I('get.p',1);

		$admin = M("User");
		$count = $admin->count();
		//print_r($count);
		$pages = $this->getPages($count);
		
		$data = $admin->page($p.','.C('PAGE_SIZE'))->select();
        // print_r($data);die;
		$this->assign('pages',$pages);
		$this->assign("data",$data);
		$this->display("user_list");
	}
}
?>