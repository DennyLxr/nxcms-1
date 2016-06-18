<?php


class View{
	
	private $smarty = null;
	
	public function __construct(){
		
		$this->_init();
	}
	
	public function _init(){
		$config = require NX_ROOT.'/config/conf.php';
		//parent::__construct($config);
		// Load Smarty
		$this->smarty = new Smarty();
		

		if(!$this->smarty){
			nx_error('Instance of Smarty false.');
		}

		// Smarty设置
		$this->smarty->force_compile = $config['tpl_force_compile'];
		$this->smarty->debugging = False;
		$this->smarty->caching = $config['tpl_caching'];
		$this->smarty->cache_lifetime = $config['tpl_cache_lifetime'];

		// 
		if(IS_BACKEND){
			$this->smarty->setTemplateDir(NX_ROOT.'/'.NX_APP.'/templates/');
			$this->smarty->setCompileDir(NX_ROOT.'/data/templates_c/admin');
		}else{
			$this->smarty->setTemplateDir(NX_ROOT.'/templates/'.$config['template']);
			$this->smarty->setCompileDir(NX_ROOT.'/data/templates_c');
		}
				
		$this->smarty->left_delimiter = "<!--{";   //左定界符
		$this->smarty->right_delimiter = "}-->";  //右定界符

		// 系统设置
		$system = ['version'=>NX_VERSION, ];
		$this->smarty->assign('system', $system);

	}

	public function display($tpl=''){
		$this->smarty->display($tpl);
	}

	public function assign($key, $value){
		$this->smarty->assign($key, $value);
	}


}
