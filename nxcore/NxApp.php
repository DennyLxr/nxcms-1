<?php
// +----------------------------------------------------------------------
// | NXCMS - 一个免费的多语言外贸企业网站系统
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.nxcms.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Hippo <nxcms.cn@gmail.com>
// +----------------------------------------------------------------------
// | Version: v1.0.0
// +----------------------------------------------------------------------

define ( 'IN_NX', TRUE);

/**
 * 系统调试设置
 * 项目正式部署后请设置为 false
 */
define('NX_DEBUG', TRUE);

define('NX_VERSION', 'V1.0');

/**
 * 网站根目录
 */
$basePath = str_replace("\\", "/", __DIR__);
define ( 'NX_ROOT', substr($basePath, 0, count($basePath)-8));


// 框架核心库目录
define ( 'NX_CORE', NX_ROOT.'/nxcore');

class NxApp {
	
	// 应用根路径
	private $basePath = '';

	public function __construct($basePath=''){
		$this->basePath = $basePath;
	}
	
	private function _init(){
		
		$this->_autoload();
		// Route
		
		$router = new Router();

	}
	
	// 管理员后台入口
	public function backend(){		
		define('IS_BACKEND', TRUE);	
		define('NX_APP', 'admin');
		//echo NX_CORE;exit;

		$this->_init();
	}
	
	// 前台入口 
	public function start(){
		// 应用目录
		define ( 'NX_APP', '');
		define('IS_BACKEND', FALSE);	

		$this->_init();
	}

	 /**
     * Returns a string representing the current version of the  NxCMS
     * @return string the version of NxCMS
     */
    public static function getVersion()
    {
        return '1.0.0';
    }
	
	// 自动加载核心类
	private function _autoload()
    {
		// Smarty 
		include NX_CORE.'/ventor/smarty/Smarty.class.php';

		$coreClass = ['BaseObject', 'Logger', 'View', 'Router', 'Controller', 'AdminController', 'NxDB', 'Model']; 
		foreach($coreClass as $key => $className){
			$classFile = NX_CORE.'/'.$className.'.php';		
			if(file_exists(NX_CORE.'/'.$className.'.php')){
				include_once($classFile);
			}else{
				nx_error('NoFound: '.$classFile);
			}     
		}
		
		// 包括公共函数
		include NX_CORE.'/functions/common.php';
    }
}





