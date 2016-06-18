<?php
// 


class IndexController extends AdminController{

	public function IndexAction(){
		
		$db = new Model();
		$sql = "select * from student";
		$rs = $db->get('student', "*", ['id'=> 2]);

		//print_r($rs);

		$languages = ['en', 'pr', 'zh'];

		$this->assign('languages', $languages);

		$this->assign('val', date('Y-m-d H:i:s'));
		
		$this->display('index.html');
	}
}