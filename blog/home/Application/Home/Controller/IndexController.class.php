<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function home(){
    	add_access();
    	
    	$data=M('Article')->select();
    	$this->assign('data',$data);
        $this->display();
    }
}