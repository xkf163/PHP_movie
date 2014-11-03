<?php
class authModel{
	private $auth="";
	
	public function __construct(){
		if(isset($_SESSION['auth']) && (!empty($_SESSION['auth'])) ){
			$this->auth=$_SESSION['auth'];
		}
	}
	
	public function loginSubmit(){
		if(empty($_POST['username']) || empty($_POST['password'])){
			return false;
		}
		$username=addslashes($_POST['username']);
		$password=addslashes($_POST['password']);
		//用户验证操作
		if($this->auth = $this->checkUser($username, $password)){
			$_SESSION['auth']=$this->auth;
			return true;
		}else{
			return false;
		}
	}
	
	
	
	
	public function checkUser($username,$password){
		$adminObj=M("admin");
		$auth=$adminObj->findOne_by_username($username);
		
		if((!empty($auth)) && $auth['password']==$password){
			return $auth;
		}else{
			return false;
		}
	}
	
	public function loginOut(){
		unset($_SESSION['auth']);
		$this->auth="";
	}
	
	public function getAuth(){
		return $this->auth;
	}
	
	
}