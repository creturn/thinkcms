<?php 

Class BaseApiAction extends Action{
	protected $db ;
  	/**
  	 * 列表
  	 * @param  integer $num  每次获取数据量
  	 * @param  integer $page 分页数
  	 * @return json        
  	 */
  	public function lists($num = 10 , $page = 1)
  	{
  		 $list = $this->db->limit($page.",".$num)->select();
  		 $this->ajax($list);
  	}
    public function count()
    {
        $data['count'] = $this->db->count();
        $this->ajax($data);
    }
  	/**
  	 * ajax数据返回
  	 * @param  array $data 数据集合
  	 * @return ajax data
  	 */
  	private function ajax($data)
  	{
  		$type = isset($_GET['dateType']) && !empty($_GET['dateType']) && $_GET['dateType'] == 'xml' ? 'xml' : 'json';
  		if (isset($data) && !empty($data)) {
  			$info = '获取数据成功！';
  			$status = 1;
  		}else{
  			$status = 0;
  			$info = '没有数据';	
  		}
  		$this->ajaxReturn($data,$info,$status,$type);
  	}
}
 ?>