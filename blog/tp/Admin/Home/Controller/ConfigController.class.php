<?php
namespace Home\Controller;
use Think\Controller;
class ConfigController extends CommonController {
    public function show(){
    	$id = 1;
    	$data = M('Config')->find($id);
    	// print_r($data['web_site']);die;
    	$this->assign('data',$data);
		$this->display('config');
	}
	public function save(){
    	$id = 1;
    	$data = I('post.');
    	$res = M('Config')->where(array('id'=>$id))->save($data);
    	if($res){
            $this->success('修改成功',U('Config/show'));
        }else{
            $this->error('修改失败');
        }
    }
}
?>