<?php 
//附件管理类
Class AttachmentAction extends Action{
	//db
	protected $db;
	public function _initialize()
	{
		$this->db = D('Attachment');
	}
	//附件上传
	public function index(){
		$this->display();
	}
	//上传处理
	public function upload()
	{
	    import('ORG.Util.UploadFile');
	    //导入上传类
	    $upload = new UploadFile();
	    //设置上传文件大小
	    $upload->maxSize            = 3292200;
	    //设置上传文件类型
	    $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg,zip,rar');
	    //设置附件上传目录
	    $upload->savePath           = C('UPLOAD_FILE_PATH');
	    //设置需要生成缩略图，仅对图像文件有效
	    $upload->thumb              = false;
	    $upload->subType            = 'date';
	    $upload->autoSub            = true;
	    $imagearr = explode(',', 'jpg,gif,png,jpeg,bmp,ttf,tif'); 
	    //删除原图
	    if (!$upload->upload()) {
	        //捕获上传异常
	        return false;
	    } else {
	        //取得成功上传的文件信息
	        $uploadList = $upload->getUploadFileInfo();
	      	foreach ($uploadList as $file) {
	      		//文件属性
				$data['moduleid']   = 0;
				$data['catid']      = 0;
				$data['id']         = 0;
				$data['filename']   = $file['name'];
				$data['filepath']   = $file['savename'];
				$data['filesize']   = $file['size'];
				$data['fileext']    = strtolower($file['extension']);
				$data['isimage']    = in_array($data['fileext'],$imagearr) ? 1 : 0;
				$data['createtime'] = time();
				$data['uploadip']   = getIp();
				$data['status']     = 1;
		    	$this->db->add($data);
	      	}
	    }
	}
	//文件浏览
	public function fileList()
	{
		$pageNum = $this->_request('pnum') ? intval($this->_request('pnum')) : 15;
		$page = $this->_request('page') ? intval($this->_request('page')) : 1;
		$files = $this->db->limit($pageNum)->order('createtime desc')->select();
		$this->assign('list',$files);
		$this->display();
	}
	//删除文件
	public function delFile()
	{
		
	}
	//清除没用的文件
	public function cleanFile()
	{
	}

}
 ?>