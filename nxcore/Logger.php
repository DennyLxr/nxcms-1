<?php
// 


class Logger{
	
	// 文件句柄
	private $handle = null;
	
	// 文件具体路径（绝对路径）
	private $logfile = '';
	
	// 是否记录到文件？
	private $is_logfile = true;

    function __construct() {
		$config = require_once NX_ROOT.'/config/conf.php';
		// 不执行日志记录
		if(!$this->is_logfile){
			return false;
		}

		if ($config){
			
		}
		if(empty($this->logfile)){
			$this->logfile = NX_ROOT.'/data/logs/'.date('Ymd').'.log';
		}else{
			$this->logfile = NX_ROOT.$this->logfile.'/'.date('Ymd').'.log';
		}
		
		// 文件不存在，创建一个文件
		if(!file_exists($this->logfile)){
			mkdir($this->logfile, 0777, true);
		}
    }
	
	// 
	public function open(){

	}

	// 
	public function close(){
		
	}
	
	public function info($msg=''){
	
	}

	public function debug($msg=''){
	
	}

	public function error($msg=''){
	
	}

	public function warning($msg=''){
	
	}
}
