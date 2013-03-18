<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>文件管理</title>
		<link href="__CSS__/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap/css/bootstrap-responsive.css">
		<script type="text/javascript" src="__JS__/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__CSS__/bootstrap/js/bootstrap-modal.js"></script>
		<style type="text/css">
		.file-img-list{
			padding: 10px;
		}
		.file-img-list img{
			max-width: 120px; 
			max-height:120px;
		}
		</style>
		<script type="text/javascript">
		 $(function(){
		 		$('#btn_file_list').click(function () {
		 			$('#file-img').hide();
		 			$('#file-list').show();
		 		});
		 		$('#btn_file_img').click(function  () {
		 			$('#file-list').hide();
		 			$('#file-img').show();
		 		})
		 });
		</script>
	</head>
	<body>
		<div class="container">
				<h3>文件管理</h3>
			<div class="row">
				<div class="span10">
					<form action="#" class="form-search">
						<a href="javascript:$('#myModal').modal({});"class="btn btn-success">上传</a>
					  <div class="input-append">
					    <input type="text" class="span2 search-query">
					    <button type="submit" class="btn btn-info">查找</button>
					  </div>
					</form>
				</div>
				<div class="span2">
					<div class="btn-group">
						<a href="#"  class="btn" id="btn_file_list"><i class="icon-align-justify"></i></a>
						<a href="#" class="btn" id="btn_file_img"><i class="icon-th"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="file-list">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
					<td>ID</td>
					<td>文件名</td>
					<td>文件大小</td>
					<td>存储位置</td>
					<td>上传IP</td>
					<td>上传时间</td>
					<td>操作</td>
				</tr>
				</thead>
				<tbody>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($vo["aid"]); ?></td>
					<td><?php echo ($vo["filename"]); ?></td>
					<td><?php echo (sizecount($vo["filesize"])); ?></td>
					<td><?php echo ($vo["filepath"]); ?></td>
					<td><?php echo ($vo["uploadip"]); ?></td>
					<td><?php echo (date('Y-m-d H:i:s',$vo["createtime"])); ?></td>
					<td><a href="__URL__/delFile" class="btn btn-small btn-danger">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
		<div class="container" id="file-img" style="display: none;">
			<ul class="nav nav-pills">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['isimage'] == 1): ?><li class="file-img-list">
					<img src="__PUBLIC__/Uploads/<?php echo ($vo["filepath"]); ?>" class="img-polaroid" >
				</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<!-- test -->
		<!-- Button to trigger modal -->
			 
			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">图片上传</h3>
			  </div>
			  <div class="modal-body">
			  	<link rel="stylesheet" type="text/css" href="__JS__/uploadify/uploadify.css" />
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
					<div class="container well" style="width:500px;">
					<h3>文件上传</h3>
					<span id="file_upload"></span>
					 
				</div>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			    <button class="btn btn-primary" id="uploadFile">上传</button>
			  </div>
			</div>
	</body>
</html>