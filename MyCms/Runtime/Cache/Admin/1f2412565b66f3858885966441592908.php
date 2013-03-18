<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加管理员</title>
		<link href="__CSS__/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">	

		 <form action="__URL__/add" class="form-horizontal">
				<fieldset>
				<legend>添加用户</legend>
				  <div class="control-group">
				    <label class="control-label" for="inputUserName">用户名:</label>
				    <div class="controls">
				      <input type="text" id="inputUserName" placeholder="用户名只能数字和字母">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputPassword">密码:</label>
				    <div class="controls">
				      <input type="password" id="inputPassword" placeholder="密码长度必须大约6位">
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn btn-primary">添加</button>
				    </div>
				  </div>
				   </fieldset>
				</form>
		 
	</div>
	</body>
</html>