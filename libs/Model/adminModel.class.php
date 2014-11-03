<?php
class adminModel{
	public $table='f_members'; //定义用户表名

	//取到用户信息，通过用户名
	function findOne_by_username($username){
		$sql="select * from ".$this->table." where username="."'$username'";
		return DB::findOne($sql);
	}
	
	
}