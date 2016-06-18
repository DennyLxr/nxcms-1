<?php



class IndexController extends Controller{

	public function IndexAction(){
		
		$this->assign('val', date('Y-m-d H:i:s'));
		$this->display('index.html');
	}
}