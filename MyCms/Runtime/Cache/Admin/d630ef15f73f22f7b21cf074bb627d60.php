<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Apple iOS and Android stuff (do not remove) -->
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" />

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="__CSS__/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="__CSS__/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="__CSS__/fonts/ptsans/stylesheet.css" media="screen" />

<link rel="stylesheet" type="text/css" href="__CSS__/core/form.css" media="screen" />
<link rel="stylesheet" type="text/css" href="__CSS__/core/login.css" media="screen" />
<link rel="stylesheet" type="text/css" href="__CSS__/core/button.css" media="screen" />

<link rel="stylesheet" type="text/css" href="__CSS__/mws.theme.css" media="screen" />

<!-- JavaScript Plugins -->
<script type="text/javascript" src="__JS__/jquery-1.7.1.min.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script type="text/javascript" src="__JS__/jquery-ui-effecs.min.js"></script>

<!-- Plugin Scripts -->
<script type="text/javascript" src="__JS__/plugins/placeholder/jquery.placeholder-min.js"></script>
<script type="text/javascript" src="__JS__/plugins/validate/jquery.validate-min.js"></script>

<!-- Login Script -->
<script type="text/javascript" src="__JS__/login.js"></script>

<title>MyCms 后台管理系统</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>登录</h1>
            <div class="mws-login-lock"><img src="__CSS__/icons/24/locked-2.png" alt="" /></div>
            <div id="mws-login-form">
                <form class="mws-form" action="<?php echo U('Login/doLogin');?>" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item large">
                            <input type="text" name="username" class="mws-login-username mws-textinput required" placeholder="用户名" />
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item large">
                            <input type="password" name="password" class="mws-login-password mws-textinput required" placeholder="密码" />
                        </div>
                    </div>
                    <div class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li><input type="checkbox" id="remember" /> <label for="remember">记住登录</label></li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="mws-button green mws-login-button" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>