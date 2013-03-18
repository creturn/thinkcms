<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>后台管理</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="__CSS__/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="__CSS__/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="__CSS__/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="__CSS__/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="__CSS__/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="__CSS__/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="__JS__/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="__JS__/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="__JS__/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="__JS__/jquery.datePicker.js"></script>
		<script type="text/javascript" src="__JS__/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="__JS__/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="__JS__/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
	<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			 
			
			<div class="clear"></div> <!-- End .clear -->
			
			 
			
			<div class="content-box column-left">
				
				<div class="content-box-header">
					
					<h3>个人信息</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						 
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="content-box column-right">
				
				<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
					
					<h3>系统信息</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<p>
					 	<ul>
					 		<li>操作系统: <?php echo ($server_info["SERVER_SOFTWARE"]); ?></li>
					 		<li>PHP环境:  <?php echo ($server_info["php_sapi_name"]); ?></li>
					 		<li><?php echo ($server_info["MYSQL_VERSION"]); ?></li>
					 		<li>上传限制: <?php echo ($server_info["upload_max_filesize"]); ?></li>
					 		<li>最大超时: <?php echo ($server_info["max_execution_time"]); ?></li>
					 		<li>硬盘空间: <?php echo ($server_info["disk_free_space"]); ?></li>
					 	</ul>
					</p>
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<div class="clear"></div>