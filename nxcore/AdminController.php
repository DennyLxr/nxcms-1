<?php


class AdminController extends Controller{

	public function __construct(){
		parent::__construct();
		if(!$_SESSION['admin']){
			header('Location:/'.NX_APP.'/index.php?act=login');
		}
	}
	
	function isLogin(){
	
	}
}