<?php
class VIEW{
	public static $view;
	
	public static function init($viewtype,$config){
		self::$view=new $viewtype;
		//$config是个数组
		foreach ($config as $key=>$value){
			self::$view->$key=$value;
		}
	}
	
	
	public static function assign($data){
		//var_dump($data);
		foreach ($data as $key=>$value){
			//echo $key."\n";
			//echo $value."\n";
			self::$view->assign($key,$value);
		}
	}
	
	
	public static function display($template){
		self::$view->display($template);
	}
	
	
	
}