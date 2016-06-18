<?php
return [
	// 数据库
	'db' => require_once 'db.php',

	// 控制器
	'default_controller' => 'index',
	'default_action' => 'index',
	
	// 网站静态资源
	'static' => 'static',

	// 所有控制器
	'allow_controllers'  => ['index', 'news', 'product'],
	'allow_actions' => ['detail', 'index', 'category'],

	'template' => 'default',
    'tpl_compile' => True,
    'tpl_caching' => False,
    'tpl_cache_lifetime' => 120,
	'tpl_force_compile'=>True,
	
	// 日志记录文件
	'logfile'                   => '/data/logs',

	// 访问模块 
	'modules'			        => ['product', 'news']
];