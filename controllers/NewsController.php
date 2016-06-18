<?php



class NewsController extends Controller{

	public function indexAction(){
		echo 'NewsController -> IndexAction()';
	}

	public function detailAction(){	
		echo 'NewsController -> detailAction()';
		//echo $id;
	}

	public function categoryAction(){	
		echo 'NewsController -> detailAction()';
		print_r($_GET);
	}
}