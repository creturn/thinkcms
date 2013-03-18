<?php 

Class ComentAction extends BaseApiAction{
	public function _initialize()
	{
		$this->db = D('Comments');
	}
  	public function index(){
    	echo 'Coment Api Interface!' ;
 	}
}
 ?>