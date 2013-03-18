<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>内容管理管理</title>
		<link href="__CSS__/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap/css/bootstrap-responsive.css">
		<script type="text/javascript" src="__JS__/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap-modal.js"></script>
	</head>
	<body>
		 
		<div class="container">
			<legend>内容列表</legend>
		</div>
		<div class="container">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
				<tr>
					<td width="5%">排序</td>
					<td>ID</td>
					<td>标题</td>
					<td>状态</td>
					<td>查看</td>
					<td>管理操作</td>
				</tr>
				</thead>
				<tbody>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><input type="checkbox"></td>
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["title"]); ?></td>
					<td><?php echo (getstatus($vo["status"])); ?></td>
					<td>查看</td>
					<td><a href="__URL__/del/id/<?php echo ($vo["ID"]); ?>" class="btn  btn-small  btn-danger">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
	</body>
</html>