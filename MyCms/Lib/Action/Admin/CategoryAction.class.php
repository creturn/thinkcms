<?php 
//栏目模块
Class CategoryAction extends AdminBaseAction{
	//db
	protected $db;

	public function _initialize()
	{
		$this->db = D('Category');
	}
	//栏目列表
	public function index(){
			
			$catList = $this->getCateList();
   			foreach($catList as $r) {
   				$r['ismenu'] = ismenu($r['ismenu']);
				$array[] = $r;
			}
			$str = "<tr>
					<td>\$id</td>
					<td>\$spacer\$catname</td>
					<td>文章模型</td>
					<td>\$ismenu</td>
					<td>浏览</td>
					<td>
						<div class='btn-group'>
							<a href='#' class='btn  btn-info btn-small'>修改</a>
							<a href='__URL__/del/catid/\$id' class='btn btn-danger btn-small'>删除</a>
						</div>
					</td>
					</tr>";
			import ('@.ORG.Tree');
			$TREE['tree_1'] = '│  ';
			$TREE['tree_2'] = '├─ ';
			$TREE['tree_3'] = '└─ ';
			$tree = new Tree ($array);
			unset($array);
			$tree->icon = array('&nbsp;&nbsp;&nbsp;'.$TREE['tree_1'],'&nbsp;&nbsp;&nbsp;'.$TREE['tree_2'],'&nbsp;&nbsp;&nbsp;'.$TREE['tree_3']);
			$tree->nbsp = '&nbsp;&nbsp;&nbsp;';
			$catList = $tree->get_tree(0, $str);
			$this->assign('list',$catList);
	  		$this->display();
	}
	//添加栏目
	public function add()
	{
  		if ($this->isPost()) {
  			if ($this->db->create()) {
  				if($this->db->add()){
  					$this->success('添加成功！');
  				}
  			}else{
  				$this->error($this->db->getError());
  			}
  		}else{

			$catList = $this->getCateList();
  			foreach($catList as $r) {
				$array[] = $r;
			}
			import ( '@.ORG.Tree' );	
			$str  = "<option value='\$id' \$selected>\$spacer \$catname</option>";
			$tree = new Tree ($array);		 
			$catList = $tree->get_tree(0, $str);
  			$this->assign('catList',$catList);
  			$this->display();
  		}
	}
	public function del()
	{
		if ($this->_get('catid')) {
			$this->db->delete($this->_get('catid'));
			$this->success('删除成功！');
		}
	}
	//获取栏目列表
	public function getCateList()
	{
		return $this->db->select();	
	}
}
 ?>