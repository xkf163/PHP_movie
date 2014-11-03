<?php 
class showController{
	public function show(){
		
		if($_GET['id']){
			$movieObj=M('movie');
			$data=$movieObj->getMVinfo($_GET['id']);
			VIEW::assign(array('data'=>$data));
			VIEW::display('index/show.html');
		}
		
		
		
	}
}

?>