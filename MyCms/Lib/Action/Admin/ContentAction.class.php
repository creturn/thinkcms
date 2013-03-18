<?php 

Class ContentAction extends AdminBaseAction{
	//db
	protected $db;

	public function _initialize()
	{
		$this->db = D('Article');
	}
	//文章列表
	public function index(){
		$pageNum = $this->_request('pnum') ? intval($this->_request('pnum')) : 15;
		$page = $this->_request('page') ? intval($this->_request('page')) : 1;
		$files = $this->db->limit($pageNum)->order('createtime desc')->select();
		$this->assign('list',$files);
		$this->display();
	}
	//添加文章
	public function add()
	{

		if ($this->isPost()) {
				if($this->db->create()){
					$this->db->add();
					$this->success('添加成功!');
				}else{
					$this->error($this->db->getError());
				}
		}else{
			$catList = R('Admin/Category/getCateList');

			foreach($catList as $r) {
					$array[] = $r;
				}
			import ( '@.ORG.Tree' );	
			$str  = "<option value='\$id' \$selected>\$spacer \$catname</option>";
			$tree = new Tree ($array);		 
			unset($array);
			$catList = $tree->get_tree(0, $str);
			$this->assign('catList',$catList);
			$this->display();
		}
	}
	//更新文章
	public function edit()
	{
		
	}
	//删除文章
	public function del()
	{
		if ($this->_get('id')) {
			if($this->db->delete($this->_get('id'))){
				$this->success('删除成功！');
			}else{
				$this->error($this->db->getError());
			}
		}
	}
}
 ?>