<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>SWFUpload Demos - External Interface Demo</title>
<link href="__CSS__/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="__JS__/uploadify/uploadify.css" />
<script type="text/javascript" src="__JS__/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__JS__/uploadify/jquery.uploadify-3.1.min.js"></script>
<script type="text/javascript" src="__JS__/uploadify/handler.js"></script>
<script type="text/javascript">
	     $(function() {
		    $('#file_upload').uploadify({
		        'swf'      : '__JS__/uploadify/uploadify.swf',
		        'uploader' : '__URL__/upload',
		        // Put your options here
		        'auto'     : false,
		        'debug'    : false,
		        'removeCompleted' : false,
		        'buttonText' : '选择文件',
		        'buttonClass' : 'btn btn-success',
		        'formData' : {
		        },
		        height        : 18,
		        width         : 60,
		        //add event function
		        'onUploadSuccess': uploadSuccess,
		    });
		    $('#uploadFile').click(function(){
		    	$('#file_upload').uploadify('upload','*');
		    });
		});
	</script>
</head>
<body>
<div class="container well" style="width:500px;">
	<h3>文件上传</h3>
	<span id="file_upload"></span>
	<span class="btn pull-right" id="uploadFile">上传</span>
</div>
</body>
</html>