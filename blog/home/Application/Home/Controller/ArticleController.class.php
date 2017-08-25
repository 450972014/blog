<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function article(){
    
    	$data=M('Article')->select();
        $sort = M('Sort')->select();


        $this->assign('data',$data);
    	$this->assign('sort',$sort);
        $this->display();
    }

    public function detail()
    {
    	$id=$_GET['id'];
    	$data=M('Article')->select();
    	$this->assign('data',$data);
    	$this->display();
    }
}