<?php
	function C($Cname,$Cmethod){
		require_once ('/libs/Controller/'.$Cname.'Controller.class.php');
		$objName=$Cname.'Controller';
		$obj=new $objName();
		$obj->$Cmethod();
	}
	
	function M($Mname){
		require_once ('/libs/Model/'.$Mname.'Model.class.php');
		$objName=$Mname.'Model';
		$obj=new $objName();
		return $obj;
	}
	
	function V($Vname){
		require_once ('/libs/View/'.$Vname.'View.class.php');
		$objName=$Vname.'Model';
		$obj=new $objName();
		return $obj;
	}
	
	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}