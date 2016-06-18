<?php


class UserModel extends Model{

	public function __construct(){
		parent::__construct();
	}
	
	// 用户登陆 ...
	public fucntion checkLogin($username, $passwd){
		$where = ['username'=>$username, 'password'=>$passwd];	
		$user = $this->db->get('user', '*', $where);
		if($user){
			return $user;
		}else{
			return false;
		}
	}
}