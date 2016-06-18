<?php
// 路由


class Router{
	
	// 当前请求URL
	public $curUrl = '';

	// PATH_INFO
	public $routePath = '';

	// 构造函数 m=xxx&a=xxx&lang=en
	public function __construct(){
		$config = require NX_ROOT.'/config/conf.php';
		//parent::__construct($config);
		$this->routePath = isset($_SERVER['PATH_INFO'])? trim($_SERVER['PATH_INFO']):'';
		$this->logger = new Logger();

		$routePath = $this->getRoutePath();
		//print $routePath;
		$categoryId = $page = $id = 0;
		$controller = $action = '';
		$controller = isset($_GET['m'])? trim($_GET['m']): '';
		$action		= isset($_GET['a'])? trim($_GET['a']): '';
		if($controller){

		}else{
			// 默认设置
			$controller = trim($config['default_controller']);
			$action = trim($config['default_action']);
		}		
		// 过滤有效请求
		$allows_controllers = $config['allow_controllers'];
		$allow_actions = $config['allow_actions'];
		
		$controller = ucfirst($controller).'Controller';

		// 后台请求
		if(IS_BACKEND){						
			$appFile = NX_ROOT.'/'.NX_APP.'/controllers/'.$controller.'.php';						
		}elseif(in_array($controller,$allows_controllers)){
			$appFile = NX_ROOT.'/controllers/'.$controller.'.php';
		}else{
			nx_error('Invalid Controller Request.');
		}		
		// 默认转到 IndexActon
		if(!in_array($action, $allow_actions)){
			$action = 'index';
		}
		if(file_exists($appFile)){
			include_once $appFile;
		}else{
			nx_error('NotFound file: '.$appFile);
		}

		$obj = new $controller;
		$action = $action.'Action';
		call_user_func_array(array($obj, $action), []);
	}

	public function getRoutePath(){
		return $this->routePath;
	}

	
	public function getURL(){
		$this->curUrl = trim($_SEVER['REQUEST_URI']);
	}
}





