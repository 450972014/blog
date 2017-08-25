<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller 
{
    public function index(){
    		$this->display('Login/login');
    }
    public function login(){

        if(IS_POST){
            $data = I("post.");

            if(!isset($data['admin_name']) || !isset($data['admin_pwd'])){
                
                $this->error('请输入账号或密码');
            
            }
            
            $adminInfo = M('Admin')->where(['admin_name'=>$data['admin_name']])->find();

            if(empty($adminInfo['salt'])){
                if($adminInfo['admin_pwd'] == md5($data['admin_pwd'])){
                    $salt = rand(1,999999);
                    $newPwd = md5(md5($data['admin_pwd']).$salt);
                    M('Admin')->where(['admin_id'=>$adminInfo['admin_id']])->save(['admin_pwd'=>$newPwd,'salt'=>$salt]);
                    session('isLogined',$adminInfo);
                    
                    updateAdminInfo($adminInfo['admin_id']);
                    $this->redirect('Index/index');
                
                }else{
                    $this->error('管理员账号或密码不正确');
                }
            }else{
                if($adminInfo['admin_pwd'] == md5(md5($data['admin_pwd']).$adminInfo['salt'])){
                    session('isLogined',$adminInfo);

                    updateAdminInfo($adminInfo['admin_id']);
                    $this->redirect('Index/index');
                }else{
                    $this->error('管理员账号或密码不正确');
                }
            }
        }else{
            $this->display();
        }
    }
    public function loginout(){
        session('isLogined',null);
        session('[destroy]');
        $this->redirect('Login/index');
    }
}