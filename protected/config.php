<?php

date_default_timezone_set('PRC');
require_once('include/functions.php');

$config = array(
	'rewrite' => array(
		'api/<a>' => 'api/<a>',
		    '<a>' => 'main/<a>',
		      '/' => 'main/index',
	),
);

$domain = array(
	"localhost" => array( // Debug Environment Configuration
		'debug' => 1,
		'mysql' => array(
			   'MYSQL_HOST' => getConfig('INFINI_MYSQL_HOST'),
			   'MYSQL_PORT' => getConfig('INFINI_MYSQL_PORT'),
			   'MYSQL_USER' => getConfig('INFINI_MYSQL_USER'),
			     'MYSQL_DB' => getConfig('INFINI_MYSQL_DATABASE'),
			   'MYSQL_PASS' => getConfig('INFINI_MYSQL_PASSWORD'),
			'MYSQL_CHARSET' => 'utf8',
		),
	),
	getConfig('INFINI_DOMAIN') => array( //Production Environment Configuration
		'debug' => 0,
		'mysql' => array(
			   'MYSQL_HOST' => getConfig('INFINI_MYSQL_HOST'),
			   'MYSQL_PORT' => getConfig('INFINI_MYSQL_PORT'),
			   'MYSQL_USER' => getConfig('INFINI_MYSQL_USER'),
			     'MYSQL_DB' => getConfig('INFINI_MYSQL_DATABASE'),
			   'MYSQL_PASS' => getConfig('INFINI_MYSQL_PASSWORD'),
			'MYSQL_CHARSET' => 'utf8',
		),
	),
);

// The following code is to avoid the program error resulted from
// the wrong configuration of the domain at the very beginning

if(empty($domain[$_SERVER["HTTP_HOST"]])) die("Configuration failure, please confirm the existance of the configuration of ".$_SERVER["HTTP_HOST"]);

return $domain[$_SERVER["HTTP_HOST"]] + $config;
