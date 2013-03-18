<?php 

Class UserAction extends BaseApiAction{
  
	public function _initialize()
	{
		$this->db = D('Member');
	}
  	public function index(){  	
  		echo '用户api接口';
  	}
  	 
  	/**
  	 * 用户详细信息
  	 * @param  integer $uid 用户id
  	 * @return json       
  	 */
  	public function userProfile($uid = 0)
  	{
  		$where = array('id' => $uid);
  		$userInfo = $this->db->where($where)->find();
  		$this->ajax($userInfo);
  	}
}
 ?>