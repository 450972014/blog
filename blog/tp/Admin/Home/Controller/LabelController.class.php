<?php
namespace Home\Controller;
use Think\Controller;
class LabelController extends CommonController {
    public function index(){
        $this->display();
    }
    public function show(){
		
		$p = I('get.p',1);

		$label = M("Label");
		$count = $label->count();
		//print_r($count);
		$pages = $this->getPages($count);
		
		$data = $label->page($p.','.C('PAGE_SIZE'))->select();
		$this->assign('pages',$pages);
		$this->assign("data",$data);
		$this->display("label_list");
	}
    public function labeladd(){
    	$data = I('post.');

    	$sel = M('Label')->add($data);
    	if($sel){
			$this->success('添加成功',U('Label/show'));
		}else{
			$this->error('添加失败');
		}
    }
    public function label_del(){
		$id = I('get.id');
		$show = M('Label');
        $res=$show->delete($id);
        if($res){
            $this->success('删除成功',U('Label/show'));
        }else{
            $this->error('删除失败');
        }
	}
    public function save(){
    	$id = I('get.id');
    	$data = M('Label')->find($id);
    	$this->assign('li',$data);
    	$this->display('save');
    }
    public function upd(){
    	$id = I('post.id');
    	$name = I('post.label_name');
    	$data['label_name'] = $name; 
    	$res = M('Label')->where(array('label_id'=>$id))->save($data);
    	if($res){
            $this->success('修改成功',U('Label/show'));
        }else{
            $this->error('修改失败');
        }
    }
    public function label_name()
    {
        $label_name=I("post.label_name");
        $res=M("Label")->where(array('label_name'=>$label_name))->select();
        echo $res?"false":"true";
    }
}