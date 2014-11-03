<?php
class indexController{
	
	public function index(){
		$movieObj=M('movie');
		$data=$movieObj->getMlist();
		$this->showWebName();
		$this->showCategorys();
		VIEW::assign(array('mInfo'=>$data));
		VIEW::display('index/index.html');
	}
	
	//展示网站名
	private function showWebName(){
		$indexObj=M('index');
		$data=$indexObj->getWebname();
		VIEW::assign(array('webName'=>$data));
	}
	//展示电影分类 useless
	private function showCategory(){
		$indexObj=M('index');
		$data=$indexObj->getCategory("configname","configvalue");
		VIEW::assign(array('category'=>$data));
	}
	
	//展示所有分类
	private function showCategorys(){
		$indexObj=M('index');
		$data=$indexObj->getCategorys("configname","confignote","configvalue","cfg");
		VIEW::assign(array('configAll'=>$data));
	}
	
}