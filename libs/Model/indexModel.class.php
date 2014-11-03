<?php

class indexModel{
	private $table='f_config';
	
	public function getWebname(){
		$sql='select * from '.$this->table.' where configname="webname"';
		return 	DB::findOne($sql);
	}
	//useless
	public function getCategory($fieldName,$fieldValName){
		$sql='select * from '.$this->table.' where '.$fieldName.'="cfg_category"';
		$data =	DB::findOne($sql);
		$findValue=$data[$fieldValName];
		return explode("、", $findValue);
	}
	
	
	public function getCategorys($fieldName,$typeFieldName,$fieldValName,$keyVal){
		$sql='select * from '.$this->table.' where '.$fieldName.' LIKE "%'.$keyVal.'%"';
		$data=DB::findAll($sql);
		foreach ($data as $Vals){
			$aryName = $Vals[$typeFieldName];
			$aryVal = explode("、", $Vals[$fieldValName]);
			$newData[]=array($aryName=>$aryVal);
		}
		return $newData;
		
	}
	
	
	
}