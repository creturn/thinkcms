<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>栏目管理</title>
		<link href="__CSS__/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap/css/bootstrap-responsive.css">
		<script type="text/javascript" src="__JS__/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="__JS__/Kindeditor/kindeditor-min.js"></script>
		<script type="text/javascript">
		KindEditor.ready(function(K) {
			K.create('#content', {
				editorid:'content',
				allowFileManager : false,
				minHeight: 250,
				items: [
				        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
				        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
				        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
				        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
				        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
				        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|',
				        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
				        'anchor', 'link', 'unlink', '|', 'about'
						],
				htmlTags: false
			});
		});
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<form class="form-horizontal" action='' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">添加文章</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="category">栏目:</label>
			      <div class="controls">
			       		<select name="catid">
					     	<?php echo ($catList); ?>
					    </select>
			      </div>
			    </div>

			    <div class="control-group">
			      <!-- E-mail -->
			      <label class="control-label" for="title">标题:</label>
			      <div class="controls">
			        <input type="text" id="title" name="title" placeholder="" class="input-xlarge">
			      </div>
			    </div>

			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="keyword">关键词:</label>
			      <div class="controls">
			        <input type="text" id="keyword" name="keywords" placeholder="" class="input-xlarge">
			      </div>
			    </div>

			    <div class="control-group">
			      <!-- Password -->
			      <label class="control-label"  for="discription">简介:</label>
			      <div class="controls">
			      		<textarea class="input-xlarge" name="description" id="discription"></textarea>
			      </div>
			    </div>
			       <div class="control-group">
			      <!-- Password -->
			      <label class="control-label"  for="content">内容:</label>
			      <div class="controls">
			      		<textarea name="content" class="span10" id="content"></textarea>
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button class="btn btn-success">提交</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</body>
</html>