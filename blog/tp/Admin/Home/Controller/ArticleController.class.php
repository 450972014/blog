<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
        $this->display('article_list');
    }
    public function show(){
		$adminName = I('get.admin_name','');
        $map = '';
        if(!empty($adminName)){
            $map = "`article_title` LIKE '%$adminName%' AND `yn`='1'";
        }else{
            $map = array('yn'=>1);
        }
		$p = I('get.p',1);

		$article = M("Article");
		$count = $article->where($map)->count();
		//print_r($count);
		$pages = $this->getPages($count);
        $data = $article->where($map)->page($p.','.C('PAGE_SIZE'))->select();
        $label = M('Label')->select();
        $sort = M('Sort')->select();
        $this->assign('label',$label);
        $this->assign('sort',$sort);
        // echo M('Article')->_sql();die;
        $this->assign('pages',$pages);
        $this->assign('adminName',$adminName);
        $this->assign("data",$data);
        $this->display("article_list");
        
	}
    public function oneshow(){
        $labelName = I('get.label_name','');
        $map = '';
        if(!empty($labelName)){
            $map = "`label` LIKE '%$labelName%' AND `yn`='1'";;
        }else{
            $map = array('yn'=>1);
        }
        $p = I('get.p',1);
        $zhi = M('Label');
        $aaa = $zhi->find($labelName);
        // print_r($aaa);die;
        $article = M("Article");
        $count = $article->where($map)->count();
        //print_r($count);
        $pages = $this->getPages($count);
        $data = $article->where($map)->page($p.','.C('PAGE_SIZE'))->select();
        $label = M('Label')->select();
        $sort = M('Sort')->select();
        $this->assign('label',$label);
        $this->assign('sort',$sort);
        // echo M('Article')->_sql();die;
        $this->assign('pages',$pages);
        $this->assign('labelName',$aaa);
        $this->assign("data",$data);
        $this->display("article_list");
        
    }
    public function ershow(){
        $sortName = I('get.sort_name','');
        $map = '';
        if(!empty($sortName)){
            $map = "`sort` LIKE '%$sortName%' AND `yn`='1'";;
        }else{
            $map = array('yn'=>1);
        }
        $p = I('get.p',1);
        // print_r($aaa);die;
        $article = M("Article");
        $count = $article->where($map)->count();
        //print_r($count);
        $pages = $this->getPages($count);
        $data = $article->where($map)->page($p.','.C('PAGE_SIZE'))->select();
        $label = M('Label')->select();
        $sort = M('Sort')->select();
        $this->assign('label',$label);
        $this->assign('sort',$sort);
        $this->assign('sortName',$sortName);
        // echo M('Article')->_sql();die;
        $this->assign('pages',$pages);
        $this->assign("data",$data);
        $this->display("article_list");
        
    }
    public function articleadd(){
    	$data = I('post.');
		$data['article_time'] = date('Y-m-d H-i-s',time());
		$data['article_ip'] = get_client_ip();
        // $data['label'] = array(I('post.label'));
        $data['label'] = implode ( ',' , $data['label'] );
        // print_r($data);die;
    	$article = D('Article');
        if(!$article->create($data)){
            $this->error($article->getError());
        }else{
            $res = D('Article')->add($adta);
            if($res){
                $this->success('添加成功',U('Article/show'));
            }else{
                $this->error('添加失败');
            }
        }

    }
    public function article_del(){
		$id = I('get.id');
		$show = M('Article');
        $res=$show->delete($id);
        if($res){
            $this->success('删除成功',U('Article/show'));
        }else{
            $this->error('删除失败');
        }
	}
    public function save(){
    	$id = I('get.id');
    	$data = M('Article')->find($id);
        $data['label'] = explode(",",$data['label']);
        //var_dump($data['label']);die;
        $str= "";
        foreach($data['label'] as $val){
            $str.="'".$val."',";
        }
        
        $str=substr($str,0,(strlen($str)-1));
        //echo $str;die;
        //echo "label_name in (".$str.")";die;
        $data['label'] = M('Label')->where("label_name in (".$str.")")->select();
        //var_dump($label);die;
        //var_dump($data);die;
        $label = M('Label')->select();
        $sort = M('Sort')->select();
        $this->assign('label',$label);
        $this->assign('sort',$sort);
    	$this->assign('li',$data);
    	$this->display('save');
    }
    public function upd(){
    	$id = I('post.id');
    	$data = I('post.');
        $data['article_time'] = date('Y-m-d H-i-s',time());
        $data['article_ip'] = get_client_ip();
        // $data['label'] = array(I('post.label'));
        $data['label'] = implode ( ',' , $data['label'] );
    	$res = M('Article')->where(array('article_id'=>$id))->save($data);
    	if($res){
            $this->success('修改成功',U('Article/show'));
        }else{
            $this->error('修改失败');
        }
    }

    public function linkshow(){
        $label = M('Label')->select();
        $sort = M('Sort')->select();
        $this->assign('label',$label);
        $this->assign('sort',$sort);
        $this->display('article_add');
    }
    
    public function article_title(){
        $article_title=I("post.article_title");
        $res=M("Article")->where(array('article_title'=>$article_title))->select();
        echo $res?"false":"true";
    }
    public function huishou(){
        $p = I('get.p',1);

        $article = M("Article");
        $count = $article->where(array('yn'=>0))->count();

        //print_r($count);
        $pages = $this->getPages($count);
        $hui = $article->where(array('yn'=>0))->page($p.','.C('PAGE_SIZE'))->select();
        $this->assign("data",$hui);
        $this->assign('pages',$pages);
        $this->display("article_huishou");
    }
    public function xiugai(){
        $id = I('get.id');
        // $data = M('Article')->where("article_id = $id")->find();
        $res = M('Article')->where(array('article_id' => $id))->save(array('yn'=>0));
        if($res){
            $this->success('已放入回收站',U('Article/huishou'));
        }else{
            $this->error('放入失败');
        }
    }
    public function huifu(){
        $id = I('get.id');
        // $data = M('Article')->where("article_id = $id")->find();
        $res = M('Article')->where(array('article_id' => $id))->save(array('yn'=>1));
        if($res){
            $this->success('恢复成功',U('Article/show'));
        }else{
            $this->error('恢复失败');
        }
    }
}