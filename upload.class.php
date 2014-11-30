<?php

class UPLOAD {
	protected $fileName;
	protected $maxSize;
	protected $uploadPath;
	protected $allowExt;
	protected $allowMime;
	protected $imgFlag;
	protected $fileInfo;
	protected $error;
	protected $ext;
	protected $uniName;
	protected $destination;
	public function __construct($fileName = 'myFile', $uploadPath = './data/upload/cover', $imgFlag = TRUE, $maxSize = '5242880', $allowExt = array('jpg','gif','png','jpeg'), $allowMime = array('image/jpeg','image/gif','image/png')) {
		$this->fileName = $fileName;
		$this->maxSize = $maxSize;
		$this->uploadPath = $uploadPath;
		$this->allowExt = $allowExt;
		$this->allowMime = $allowMime;
		$this->imgFlag = $imgFlag;
		$this->fileInfo = $_FILES[$this->fileName];
	}
	protected function checkError() {
		if (! is_null ($this->fileInfo)) {
			if ($this->fileInfo ['error'] > 0) {
				switch ($this->fileInfo ['error']) {
					case 1 :
						$this->error = '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。';
						break;
					case 2 :
						$this->error = '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。';
						break;
					case 3 :
						$this->error = '文件只有部分被上传。';
						break;
					case 4 :
						$this->error = '没有文件被上传。';
						break;
					case 6 :
						$this->error = '找不到上传的临时文件夹。';
						break;
					case 7 :
						$this->error = '文件写入失败。';
						break;
				}
				return false;
			}
			return true;
		} else {
			$this->error = '文件上传出错。';
			return false;
		}
	}
	
	protected function checkSize() {
		echo "checksize";
		if ($this->fileInfo ['size'] > $this->maxSize) {
			$this->error = '上传文件过大。';
			return false;
		}
		return true;
	}
	
	protected function checkExt() {
		if (is_array ($this->allowExt)) {
			$this->ext = strtolower ( pathinfo ( $this->fileInfo ['name'], PATHINFO_EXTENSION ) );
			var_dump($this->ext);
			if (! in_array ( $this->ext, $this->allowExt )) {
				$this->error = '不允许的扩展名';
				return false;
			}
			echo "checkext";
			return true;
		}
	}
	
	protected function checkMime() {
		if (! in_array ( $this->fileInfo ['type'], $this->allowMime )) {
			$this->error = '不允许的文件类型';
			return false;
		}
		return true;
	}
	
	protected function checkImgTrue() {
		if ($this->imgFlag) {
			if (! @getimagesize ( $this->fileInfo ['tmp_name'] )) {
				$this->error = '不是真实的图片。';
				return false;
			}
			return true;
		}
	}
	
	protected function checkHTTPPost() {
		if (! is_uploaded_file ( $this->fileInfo ['tmp_name'] )) {
			$this->error = '不是通过HTTP POST方法上传。';
			return false;
		}
		return true;
	}
	
	protected function showError() {
		echo ( '<span style="color:red">' . $this->error . '</span>' );
	}
	
	protected function checkuploadPath() {
		if (! file_exists ( $this->uploadPath )) {
			mkdir ( $this->uploadPath, 0777, true );
		}
	}
	
	protected function getUniName() {
		return md5 ( uniqid ( microtime ( true ), true ) );
	}
	
	public function uploadFile() {
		//if(self::checkError()){
		if ($this->checkError() && $this->checkSize() && $this->checkExt() && $this->checkMime() && $this->checkImgTrue() && $this->checkHTTPPost()) {
			echo "innnnn";
			$this->checkuploadPath ();
			$this->uniName = $this->getUniName ();
			$this->destination = $this->uploadPath . '/' . $this->uniName . '.' . $this->ext;
			if (@move_uploaded_file ( $this->fileInfo ['tmp_name'], $this->destination )) {
				return  $this->destination;
			} else {
				$this->error = '文件移动失败';
				$this->showError ();
				return "";
			}
		} else {
			
			$this->showError ();
			return "";
		}
	}
}

?>
