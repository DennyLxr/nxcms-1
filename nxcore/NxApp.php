<?php
// +----------------------------------------------------------------------
// | NXCMS - һ����ѵĶ�������ó��ҵ��վϵͳ
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
 * ϵͳ��������
 * ��Ŀ��ʽ�����������Ϊ false
 */
define('NX_DEBUG', TRUE);

define('NX_VERSION', 'V1.0');

/**
 * ��վ��Ŀ¼
 */
$basePath = str_replace("\\", "/", __DIR__);
define ( 'NX_ROOT', substr($basePath, 0, count($basePath)-8));


// ��ܺ��Ŀ�Ŀ¼
define ( 'NX_CORE', NX_ROOT.'/nxcore');

class NxApp {
	
	// Ӧ�ø�·��
	private $basePath = '';

	public function __construct($basePath=''){
		$this->basePath = $basePath;
	}
	
	private function _init(){
		
		$this->_autoload();
		// Route
		
		$router = new Router();

	}
	
	// ����Ա��̨���
	public function backend(){		
		define('IS_BACKEND', TRUE);	
		define('NX_APP', 'admin');
		//echo NX_CORE;exit;

		$this->_init();
	}
	
	// ǰ̨��� 
	public function start(){
		// Ӧ��Ŀ¼
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
	
	// �Զ����غ�����
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
		
		// ������������
		include NX_CORE.'/functions/common.php';
    }
}





