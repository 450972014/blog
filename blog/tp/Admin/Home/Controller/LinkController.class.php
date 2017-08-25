<?php
namespace Home\Controller;
use Think\Controller;
class LinkController extends CommonController {
    public function show(){
		
		$p = I('get.p',1);

		$link = M("Link");
		$count = $link->count();
		//print_r($count);
		$pages = $this->getPages($count);
		
		$data = $link->page($p.','.C('PAGE_SIZE'))->select();
        // print_r($data);die;
		$this->assign('pages',$pages);
		$this->assign("data",$data);
		$this->display("link_list");
	}
	public function linkadd(){
    	$data = I('post.');
        $data['time'] = time();
    	$sel = M('Link')->add($data);
        // echo M('Link')->_sql();die;
    	if($sel){
			$this->success('添加成功',U('Link/show'));
		}else{
			$this->error('添加失败');
		}
    }
    public function link_del(){
		$id = I('get.id');
		$show = M('Link');
        $res=$show->delete($id);
        if($res){
            $this->success('删除成功',U('Link/show'));
        }else{
            $this->error('删除失败');
        }
	}
	public function save(){
    	$id = I('get.id');
    	$data = M('Link')->find($id);
    	$this->assign('li',$data);
    	$this->display('save');
    }
    public function upd(){
    	$id = I('post.id');
    	$name = I('post.link_name');
    	$data['link_name'] = $name; 
    	$res = M('Link')->where(array('link_id'=>$id))->save($data);
    	if($res){
            $this->success('修改成功',U('Link/show'));
        }else{
            $this->error('修改失败');
        }
    }
    public function link_name(){
        $link_name=I("post.link_name");
        $res=M("Link")->where(array('link_name'=>$link_name))->select();
        echo $res?"false":"true";
    }
    public function link_url(){
        $link_url=I("post.link_url");
        $res=M("Link")->where(array('link_url'=>$link_url))->select();
        echo $res?"false":"true";
    }
    public function ddeell(){
        $shijian = I('post.');
        $User = M('Link');

        $time = time()-(60*60*24*$shijian['time']);
        $res = $User->where("`time`<=$time")->delete();
        // echo $User->_sql();die;
        if($res){

             $this->success("删除成功",U('Link/show'));
        }else{

            $this->error("删除失败");
        }
    }
}
?>