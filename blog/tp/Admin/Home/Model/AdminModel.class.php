<?php 
	namespace Home\Model;
	use Think\Model;
	class AdminModel extends Model
	{   
		protected $_validate = array(     
			array('admin_name','require','管理员名称必填'), //默认情况下用正则进行验证     
			array('admin_name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一    
			array('admin_pwd','require','密码必填'), //默认情况下用正则进行验证 
			array('password','admin_pwd','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
			array('password','require','确认密码必填'), //默认情况下用正则进行验证 
			array('password','require','确认密码必填'), //默认情况下用正则进行验证 
		);
	}
 ?>
