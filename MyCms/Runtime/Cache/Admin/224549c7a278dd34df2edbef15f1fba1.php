<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>栏目管理</title>
		<link href="__CSS__/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap/css/bootstrap-responsive.css">
		<script type="text/javascript" src="__JS__/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap-modal.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span10">
					<a href="__URL__/add" class="btn btn-success "><i class="icon-plus"></i>添加栏目</a> 	
				</div>
			</div>
		</div>
		<div class="container">
			<legend>栏目列表</legend>
		</div>
		<div class="container">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
					<td>栏目ID</td>
					<td>栏目名称</td>
					<td>所属模型</td>
					<td>导航</td>
					<td>访问</td>
					<td>管理操作</td>
				</tr>
				</thead>
				<tbody>
				<?php echo ($list); ?>
				</tbody>
			</table>
		</div>
	</body>
</html>