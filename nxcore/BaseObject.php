<?php
// 基类



class BaseObject{
	
	// 日志记录类对象
	public $logger = null;

    function __construct() {
        // parent::__construct();
		// $this->logger = new Logger();
    }
	
	// 显示错误信息并退出...
	public function showError($msg){
		$msg = 'At file '.__FILE__.', LINE '.__LINE__.' => '.$msg;
		exit($msg);
	}	
}

