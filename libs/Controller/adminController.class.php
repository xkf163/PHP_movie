<?php

class adminController{
	private $auth="";
	
	public function __construct(){
		$authObj=M('auth');
		$this->auth=$authObj->getAuth();
		if(empty($this->auth) && (TIAGOXU::$method!='login')){
			$this->showMsg("请先登录后再操作","admin.php?controller=admin&method=login");
		}
	}
	
	public function index(){
		$indexObj=M('movie');
		$movieNumbers=$indexObj->count();
		VIEW::assign(array('movieNumbers'=>$movieNumbers));
		VIEW::display('admin/index.html');
	}
	
	public function login(){
		if(isset($_POST['submit'])){
			$this->checkLogin();
		}else{
			VIEW::display('admin/login.html');
		}
	}
	
	public function loginout(){
		$authObj=M('auth');
		$authObj->loginOut();
		$this->showMsg("退出成功！","admin.php?controller=admin&method=login");
	}
	
	public function movieadd(){
		if(empty($_POST)){
			if($_GET['id']){
				$movieObj=M('movie');
				$data=$movieObj->getMVinfo($_GET['id']);
			}else{
				$data=array();
			}
			VIEW::assign(array('data'=>$data));
			VIEW::display('admin/newsadd.html');
			
		}else{
			$this->addMSubmit();
		}
	}
	
	//添加修改,内部函数被movieadd调用而已
	private function addMSubmit(){
		$movieObj=M('movie');
		$ret=$movieObj->actionMSubmit($_POST);
		//var_dump($_POST) ;
		//echo $rett;
		if ($ret==0){
			$this->showMsg("请补充内容后再提交！","admin.php?controller=admin&method=movieadd&id=".$_POST['id']);
		}
		//根据返回值来跳转
		if ($ret==2){
			$this->showMsg("修改成功！","admin.php?controller=admin&method=movielist");
		}
		
		//根据返回值来跳转
		if ($ret==1){
			$this->showMsg("添加成功！","admin.php?controller=admin&method=movielist");
		}
	}
	
	public function movielist(){
		$movieObj=M('movie');
		$data=$movieObj->getMlist();
		if(empty($data)){
			VIEW::assign(array());
		}else{
			VIEW::assign(array('data'=>$data));
		}
		VIEW::display('admin/newslist.html');
	}
	
	
	private function checkLogin(){
		$authObj=M('auth');
		if($authObj->loginSubmit()){
			$this->showMsg("登录成功","admin.php?controller=admin&method=index");
		}else{
			$this->showMsg("登录失败","admin.php?controller=admin&method=login");
		}
	}
	
	public function moviedel(){
		$movieObj=M('movie');
		if(intval($_GET['id'])){
			if($movieObj->actionMDelete_by_uid($_GET['id'])){
				$this->showMsg("删除成功","admin.php?controller=admin&method=movielist");
			}else{
				$this->showMsg("删除失败","admin.php?controller=admin&method=movielist");
			}
		}

		
		
	}
	
	private function showMsg($msg,$url){
			echo "<script>alert('$msg');window.location.href='$url'</script>";
			exit();
	}
	
}
