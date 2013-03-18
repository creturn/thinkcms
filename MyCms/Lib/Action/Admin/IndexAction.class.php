<?php 

Class IndexAction extends AdminBaseAction{
  	public function index(){
	  	$this->display('');
 	}
 	public function main() {
		$info = array(
          'SERVER_SOFTWARE'     =>PHP_OS.' '.$_SERVER["SERVER_SOFTWARE"],
          'php_sapi_name'       =>php_sapi_name(),
          'MYSQL_VERSION'       => mysql_get_server_info(),
          'upload_max_filesize' => ini_get('upload_max_filesize'),
          'max_execution_time'  =>ini_get('max_execution_time').L('miao'),
          'disk_free_space'     =>round((@disk_free_space(".")/(1024*1024)),2).'M',
            );
        $this->assign('server_info',$info);		
        $this->display();
   	}

}
 ?>