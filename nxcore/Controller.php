<?php


class Controller extends BaseObject{
	
	// 路由
	public $router  = null;
	
	// 视图
	public $view    = null;

	// 日志
	public $logger  = null;
	

	// 数据库
	public $db = null;

	public function __construct(){		
		
		// View
		$this->view = new View();
		
		// Logger
		
		// 数据库


	}

	public function assign($key, $value){
		$this->view->assign($key, $value);
	}


	public function display($tpl=''){
		$this->view->display($tpl);
	}

	

}