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
					<div class="btn-group">
						<a href="__URL__/index" class="btn btn-success"><i class=" icon-th-list"></i> 栏目列表</a> 	
						<a href="__URL__/add" class="btn btn-success"><i class="icon-plus"></i> 添加栏目</a> 	
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<legend>添加栏目</legend>
		</div>
		<div class="container">
			 <form action="__URL__/add" class="form-horizontal" method="POST">
				<fieldset>
					<div class="tabbable"> <!-- Only required for left/right tabs -->
					  <ul class="nav nav-tabs">
					    <li class="active"><a href="#tab1" data-toggle="tab">基本设置</a></li>
					    <li><a href="#tab2" data-toggle="tab">SEO设置</a></li>
					  </ul>
					  <div class="tab-content">
					    <div class="tab-pane active" id="tab1">
					     <table class="table table-striped">
					     		<tr>
					     			<td> <label>请选择模型:</label> </td>
					     			<td>
					     				<select name="moduleid" id="">
					     					<option value="1">文章模型</option>
					     					<option value="2">游戏模型</option>
					     					<option value="3">单页面</option>
					     					<option value="4">外部链接</option>
					     				</select>
					     			</td>
					     			<td rowspan="3" class="span2">
					     				<div>
						     				<img src="__IMG__/icons/admin_upload_thumb.png" class="">
						     				<a href="#" class="btn">取消缩略图</a>
						     				<input type="hidden" name="image">
					     				</div>
					     			</td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label>上级栏目:</label></td>
					     			<td>
					     				<select name="parentid" id="">
					     					<option value="0">作为一级栏目</option>
					     					<?php echo ($catList); ?>
					     				</select>
					     			</td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label for="">栏目名称:</label></td>
					     			<td><input type="text" name="catname"></td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label for="">栏目目录:</label></td>
					     			<td><input type="text" name="catdir"></td>
					     			<td>&nbsp;</td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label for="">导航:</label></td>
					     			<td>
					     				<label class="radio inline">
					     					<input type="radio" value="1" name="ismenu">是
					     				</label>
					     				<label class="radio inline">
					     					<input type="radio" value="0" name="ismenu">否
					     				</label>
					     			</td>
					     			<td>&nbsp;</td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label>列表页模板:</label></td>
					     			<td>
					     				<select name="template_list" id="">
					     					<option value="">请选择</option>
					     				</select>
					     			</td>
					     			<td>&nbsp;</td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label>内容页模板:</label></td>
					     			<td>
					     				<select name="template_show" id="">
					     					<option value="">请选择</option>
					     				</select>
					     			</td>
					     			<td>&nbsp;</td>
					     			<td>&nbsp;</td>
					     		</tr>
					     	</table>
					    </div>
					    <div class="tab-pane" id="tab2">
					       <table class="table table-striped">
					       		<tr>
					     			<td><label for="">SEO栏目标题:</label></td>
					     			<td><input type="text" name="title"></td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label for="">SEO栏目关键词:</label></td>
					     			<td><input type="text" name="keywords"></td>
					     			<td>&nbsp;</td>
					     		</tr>
					     		<tr>
					     			<td><label for="">SEO栏目简介:</label></td>
					     			<td>
					     				<textarea rows="8" name="description"></textarea>
					     			</td>
					     			<td>&nbsp;</td>
					     		</tr>
					       </table>
					    </div>
					  </div>
					</div>
				<input type="submit" value="提交" class="btn btn-primary"  />
				</fieldset>
				</form>
		</div>
	</body>
</html>