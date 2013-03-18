<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
  
	<body id="body">
		<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="__IMG__/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				你好, <a href="#" title="Edit your profile">Admin</a>,你有 <a href="#messages" rel="modal" title="3 Messages">3 消息</a><br />
				<br />
				<a href="#" title="View the Site">站点首页</a> | <a href="#" title="Sign Out">退出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						后台首页
					</a>       
				</li>
				
				<li> 
					<a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					新闻管理
					</a>
					<ul>
						<li>
							<a onclick="changeNav(this)" href="index.php?g=Admin&m=Category&a=index" target="main_content">栏目管理</a>
						</li>
						<li>
							<a  onclick="changeNav(this)" href="index.php?g=Admin&m=Content&a=index" target="main_content">内容管理</a>
						</li>  
						<li>
							<a  onclick="changeNav(this)" href="index.php?g=Admin&m=Content&a=add" target="main_content">添加文章</a>
						</li>  
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						附件管理
					</a>
					<ul>
						<li><a  onclick="changeNav(this)"  href="index.php?g=Admin&m=Attachment&a=fileList" target="main_content">附件列表</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						会员管理
					</a>
					<ul>
						<li><a href="#">会员资料</a></li>
						<li><a href="#">添加会员</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						统计
					</a>
					<ul>
						<li><a href="#">Calendar Overview</a></li>
						<li><a href="#">Add a new Event</a></li>
						<li><a href="#">Calendar Settings</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						站点设置
					</a>
					<ul>
						<li><a href="#">General</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Your Profile</a></li>
						<li><a href="#">Users and Permissions</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
 
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
		    <iframe id="main_content" width="100%" height="95%" src="<?php echo U('Index/main');?>"></iframe>
		</div> <!-- End #main-content -->
	
	</div>
	<script type="text/javascript">
		function changeNav (item) {
			$('.current').removeClass('current');
			$(item).addClass('current');
		}
	</script>
</body>
</html>