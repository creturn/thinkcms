<?php
return array(
	//'配置项'             =>'配置值'
		'APP_GROUP_LIST'    => 'Admin,Content,Member',      // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
		'DEFAULT_GROUP'     => 'Content',  				// 默认分组
		'TMPL_FILE_DEPR'    =>  '_', 						//模板文件MODULE_NAME与ACTION_NAME之间的分割符
		'URL_MODEL'         => 0, 
		'DEFAULT_THEME'     => 'Default',
		'DEFAULT_CHARSET'   => 'utf-8',
		'LOAD_EXT_CONFIG'   => 'db',
		//'DEFAULT_LANG'      => 'cn',
		/*模板定义*/
		'TMPL_PARSE_STRING' =>array(
		//公共目录，css，js
			'__PUBLIC__'        => '/Public', // 更改默认的/Public 替换规则
			'__IMG__'           => '/Public/Images',
			'__CSS__'           => '/Public/Css',
			'__JS__'            => '/Public/Js',
		),
		'UPLOAD_FILE_PATH'  => './Public/Uploads/',
		'DB_SQL_LOG'                => true, // SQL执行日志记录
		//'SHOW_PAGE_TRACE'           =>  1//显示调试信息
);
?>