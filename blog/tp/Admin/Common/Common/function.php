<?php 
function disposeMenu($nodeList){
	$result = [];
	foreach ($nodeList as $key => $value) {
		if($value['parent_id'] == 0){
			$result[] = $value;			
		}
	}
	foreach ($result as $key => $value) {
		foreach ($nodeList as $k => $v) {
			if($value['node_id'] == $v['parent_id']){
				$result[$key]['son'][] = $v;
			}
		}
	}
	return $result;
}


function updateAdminInfo($adminId){
	$data['last_time'] = time();
	$data['last_ip'] = get_client_ip();
	M('Admin')->where(['admin_id'=>$adminId])->save($data);
}

function admin_log($logInfo){
	$adminInfo = session('isLogined');
	$logData = ['log_time'=>date('Y-m-d H-i-s',time()),'admin_id'=>$adminInfo['admin_id'],'log_info'=>$logInfo,'ip_address'=>get_client_ip()];
	M('AdminLog')->add($logData);
}

?>
