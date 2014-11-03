<?php
class DB{
	public static $db;
	
	public static function init($dbtype,$config){
		self::$db=new $dbtype; //实例化
		self::$db->connect($config);
	}
	
	public static function query($sql){
	 	return self::$db->query($sql);
	}
	
	public static function findOne($sql){
		$result=self::$db->query($sql);
		return self::$db->findOne($result);
	}
	
	public static function findAll($sql){
		$result=self::$db->query($sql);
		return self::$db->findAll($result);
	}
	
	public static function findResult($sql){
		$result=self::$db->query($sql);
		//var_dump($result);
		return self::$db->findResult($result);
	}
	
	public static function insertInto($table,$insert){
		return self::$db->insertInto($table,$insert);
	}
	
	public static function update($table,$set,$where){
		return self::$db->update($table,$set,$where);
	}
	
	public static function delete($table,$where){
		return self::$db->delete($table,$where);
	}
	
	
}