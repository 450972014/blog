<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends CommonController {
    public function show(){
		
		$p = I('get.p',1);

		$admin = M("Admin");
		$count = $admin->count();
		//print_r($count);
		$pages = $this->getPages($count);
		
		$data = $admin->page($p.','.C('PAGE_SIZE'))->select();
        // print_r($data);die;
		$this->assign('pages',$pages);
		$this->assign("data",$data);
		$this->display("admin_list");
	}
    public function add(){
		$adta['admin_name'] = I('POST.admin_name');
		$adta['admin_pwd'] = I('POST.admin_pwd','','md5');
		$adta['admin_time'] = date('Y-m-d H-i-s',time());
		$adta['admin_ip'] = get_client_ip();

        $admin = D('Admin');
        if(!$admin->create($data)){
            $this->error($admin->getError());
        }else{
            $res = D('admin')->add($adta);
            if($res){
                admin_log('添加管理员:'.$data['admin_name']);
                $this->success('添加成功',U('Admin/show'));
            }else{
                $this->error('添加失败');
            }
        }

		
	}
	public function del(){
		$id = I('get.id');
		$show = M('Admin');
        $res=$show->delete($id);
        if($res){
            $this->success('删除成功',U('Admin/show'));
        }else{
            $this->error('删除失败');
        }
	}
    public function save(){
    	$id = I('get.id');
    	$data = M('Admin')->find($id);
    	$this->assign('li',$data);
    	$this->display('save');
    }
    public function upd(){
    	$id = I('post.id');
    	$name = I('post.admin_name');
    	$data['admin_name'] = $name; 
    	$res = M('Admin')->where(array('admin_id'=>$id))->save($data);
    	if($res){
            $this->success('修改成功',U('Admin/show'));
        }else{
            $this->error('修改失败');
        }
    }
    public function savepwd(){
        $this->display('savepwd');
    }
    public function updpwd(){
        $password = session('isLogined.admin_pwd');
        $salt = session('isLogined.salt');
        $id = session('isLogined.admin_id');
        $data = I('post.');
        if($password == md5(md5($data['password']).$salt)){
            $adta['admin_pwd'] = I('post.admin_pwd','','md5');
            $yan = rand(1,999999);
            $pwd = md5($adta['admin_pwd'].$wyan);
            $res = M('Admin')->where(array('admin_id'=>$id))->save(['admin_pwd'=>$pwd,'salt'=>$yan]);

            if($res){

                $this->success('修改成功',U('Login/loginout'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $this->error('原密码不正确');
        }
    }
    public function only(){
        $username = I('post.');
        echo $username;die;
    }
    public function showlog(){
        
        $p = I('get.p',1);

        $admin = M("AdminLog");
        $count = $admin->count();
        //print_r($count);
        $pages = $this->getPages($count);
        
        $data = $admin->join('admin on admin_log.admin_id=admin.admin_id')->page($p.','.C('PAGE_SIZE'))->select();
        // print_r($data);die;
        $this->assign('pages',$pages);
        $this->assign("data",$data);
        $this->display("admin_log_list");
    }
    public function admin_name()
    {
        $admin_name=I("post.admin_name");
        $res=M("Admin")->where(array('admin_name'=>$admin_name))->select();
        echo $res?"false":"true";
    }
    
}
