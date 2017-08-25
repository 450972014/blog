<?php 
    //添加来访信息
     function add_access()
     {
        $user = ' ';
        $name = isset($user)?$user['username']:' ';
        $data = array(
             "ac_ip"=>get_client_ip(),//ip
             "ac_time"=>time(),//时间
             "user_agent"=>$_SERVER['HTTP_USER_AGENT'],
             "ac_url"=>$_SERVER['REQUEST_URI'],
             "user_name"=>$name
            );
        M("Access")->add($data);
     }

 ?>