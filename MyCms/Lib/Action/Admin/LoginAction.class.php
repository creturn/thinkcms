<?php 

Class LoginAction extends AdminBaseAction{
  public function index(){
  	$this->display();
  }
  public function doLogin()
  {
  		$this->redirect(U('Index/index'));
  }
}
 ?>