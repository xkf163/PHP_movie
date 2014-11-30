<?php 
class showController{
	public function showmovie(){
		if($_GET['id']){
			$movieObj=M('movie');
			$data=$movieObj->getMVinfo($_GET['id']);

			foreach($data as $fieldName=>$fieldValue){
				$dataNew[$fieldName]=explode("、", $fieldValue);
			}

			//var_dump($dataNew);
			VIEW::assign($dataNew);
			//VIEW::assign(array('data'=>$data));
			VIEW::display('index/show.html');
		}
	}
	
	public function showperson(){
		if($_GET['id']){
			$movieObj=M('person');
			$data=$movieObj->getMVinfo($_GET['id']);
			VIEW::assign(array('data'=>$data));
			VIEW::display('index/person.html');
		}
	}
	
	
}

?>