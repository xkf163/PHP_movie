<?php
class movieModel{
	public $table='f_movie';
	
	function count(){
		$sql='select count(*) from '.$this->table;
		return DB::findResult($sql,0,0);
	}
	
	
	function getMlist(){
		$sql='select * from '.$this->table.' order by uid desc';
		//echo $sql;
		return DB::findAll($sql);
	}
	
	function getMVinfo($uid){
		//$uid=intval($uid);
		$sql='select * from '.$this->table.' where uid='.$uid;
		return DB::findOne($sql);
	}
	
	
	function actionMSubmit($data){
		extract($data);
		if(empty($mtitle)||empty($myear)){
			return 0;
		}
		
		$mtitle=daddslashes($mtitle);
		$myear=daddslashes($myear);
		$mno=daddslashes($mno);
		$imdb=daddslashes($imdb);
		$mwriter=daddslashes($mwriter);
		$mproducer=daddslashes($mproducer);
		$mcast=daddslashes($mcast);
		$mcategory=daddslashes($mcategory);
		$mrating=daddslashes($mrating);
		$mtime=daddslashes($mtime);
		$marea=daddslashes($marea);
		$mlang=daddslashes($mlang);
		$mlevel=daddslashes($mlevel);
		$mcolor=daddslashes($mcolor);
		
		
		if(empty($mcreatedate)){
			$mcreatedate=date("Y:m:d H:m:s",time());
		}else{
			$mcreatedate=daddslashes($mcreatedate);
		}
		
		$mmodifydate=date("Y:m:d H:m:s",time());
		
		$data=array(
				'mtitle'=>$mtitle,
				'myear'=>$myear,
				'mdirector'=>$mdirector,
				'mno'=>$mno,
				'imdb'=>$imdb,
				'mwriter'=>$mwriter,
				'mproducer'=>$mproducer,
				'mcast'=>$mcast,
				'mcategory'=>$mcategory,
				'mrating'=>$mrating,
				'mtime'=>$mtime,
				'marea'=>$marea,
				'mlang'=>$mlang,
				'mlevel'=>$mlevel,
				'mcolor'=>$mcolor,
				'mcreatedate'=>$mcreatedate,
				'mmodifydate'=>$mmodifydate,
		);
		//修改时id有值
		if($_POST['id']!=""){
			//update
			DB::update($this->table,$data,'uid='.$id);
			return 2;
		}else{
			//insert into
			DB::insertInto($this->table,$data);
			return 1;
		}
	
	}
	//删除
	function actionMDelete_by_uid($uid){
		return DB::delete($this->table,'uid='.$uid);
	}
		
	
}