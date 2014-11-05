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



		//处理上传附件
		 if($_FILES['attachment']){
                    $uploaddir = 'D:/wamp2.5/www/movie/data/upload/cover/';
                    $uploadfile = $uploaddir . basename($_FILES['attachment']['name']);
                    $imgpath = 'data/upload/cover/'. basename($_FILES['attachment']['name']);

                    echo '<pre>';
                    if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadfile)) {
                        echo "File is valid, and was successfully uploaded.\n";
                    } else {
                        echo "Possible file upload attack!\n";
                    }

                    echo 'Here is some more debugging info:';
                    print_r($_FILES);

                    print "</pre>";
                }



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
				'imgpath'=>$imgpath,
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