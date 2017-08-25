<?php
namespace Home\Controller;
use Think\Controller;
class SortController extends CommonController {
    public function index(){
        $this->display();
    }
    public function show(){
		
		$p = I('get.p',1);

		$sort = M("Sort");
		$count = $sort->count();
		//print_r($count);
		$pages = $this->getPages($count);
		
		$data = $sort->page($p.','.C('PAGE_SIZE'))->select();
		$this->assign('pages',$pages);
		$this->assign("data",$data);
		$this->display("sort_list");
	}
    public function sortadd(){
    	$data = I('post.');

    	$sel = M('Sort')->add($data);
    	if($sel){
			$this->success('添加成功',U('Sort/show'));
		}else{
			$this->error('添加失败');
		}
    }
    public function sort_del(){
		$id = I('get.id');
		$show = M('Sort');
        $res=$show->delete($id);
        if($res){
            $this->success('删除成功',U('Sort/show'));
        }else{
            $this->error('删除失败');
        }
	}
    public function save(){
    	$id = I('get.id');
    	$data = M('Sort')->find($id);
    	$this->assign('li',$data);
    	$this->display('save');
    }
    public function upd(){
    	$id = I('post.id');
    	$name = I('post.sort_name');
    	$data['sort_name'] = $name;
    	$res = M('Sort')->where(array('sort_id'=>$id))->save($data);
    	if($res){
            $this->success('修改成功',U('Sort/show'));
        }else{
            $this->error('修改失败');
        }
    }
    public function sort_name()
    {
        $sort_name=I("post.sort_name");
        $res=M("Sort")->where(array('sort_name'=>$sort_name))->select();
        echo $res?"false":"true";
    }
}