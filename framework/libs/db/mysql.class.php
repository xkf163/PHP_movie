<?php

class mysql{
	private $link;
	
	
	function err($error){
		die("对不起，出错信息为".$error."<BR>");
	}
	
	function connect($config){
		extract($config);
		$this->link=mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);
		if(!$this->link){
			$this->err(mysqli_connect_error());
		}
		mysqli_set_charset($this->link, $dbcharset);
	}
	
	function query($sql){
		if($result=mysqli_query($this->link,$sql)){
			//printf($sql."<BR>");
			//var_dump($result);
			//printf("Select returned %d rows.\n", mysqli_num_rows($result));
			return $result;
		}else{
			$this->err("$sql.<BR/>".mysqli_error($this->link));
		}
	}
	
	function findAll($result){
		while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
			$data[]=$row;
		}
		return isset($data)?$data:"";
		
			
	}
	function findOne($result){
		$data=mysqli_fetch_array($result,MYSQL_ASSOC);
		return $data;
	}
	
	function findResult($result){
		//$data=$result->fetch_object();
		//$array=get_object_vars($data);
		$data=$result->fetch_row();
		return $data[0];
	}
	
	function insertInto($table,$insert){
		foreach ($insert as $key=>$value){
			$sqlKeyArr[]="`".$key."`";
			$sqlValArr[]="'".$value."'";
		}
		$sqlKeyStrs=implode(",", $sqlKeyArr);
		$sqlValStrs=implode(",", $sqlValArr);
		$sql="insert into ".$table." (".$sqlKeyStrs.") values (".$sqlValStrs.")";
		echo $sql;
		$this->query($sql);
		return mysqli_insert_id($this->link);
	}
	
	function update($table,$set,$where){
		foreach ($set as $key=>$value){
			//$value=mysql_real_escape_string($value);
			$sqlSetArr[]="`".$key."`='".$value."'";
			//$keyAndvalueArr[] = "`".$key."`='".$value."'";
		}
		$sqlSetStrs=implode(",", $sqlSetArr);
		$sql="update ".$table." set ".$sqlSetStrs." where ".$where;
		echo $sql;
		$this->query($sql);
		
	}
	
	function delete($table,$where){
		$sql="delete from ".$table." where ".$where;
		return $this->query($sql);
		
	}
	
	
}
