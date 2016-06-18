<?php
// 


class LoginController extends Controller{
	
	// 登陆处理
	public function IndexAction(){

		$languages = ['en', 'pr', 'zh'];

		$this->assign('languages', $languages);

		$this->assign('val', date('Y-m-d H:i:s'));
		
		$this->display('login.html');
	}
	
	// 登录验证
	public function checkLoginAction(){
		$msg = '';
		$jsonData = ['status'=>0, 'data'=>['url'=>'', 'msg'=> '']];
		if(IS_POST){
			$username = isset($_POST['username'])? trim($_POST['username']): '';
			if(!$username){
				$msg = '用户名不能为空';
			}
			$userModel = new UserModel();
			$rs = $userModel->checkLogin($username, $password);
			$rs = $db->get('student', "*", ['username'=> 2]);
		}
		echo json_encode($jsonData);
	}
}