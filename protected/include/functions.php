<?php
function getConfig($param) {
	$config=array(
		"INFINI_MYSQL_HOST"=>"",
		"INFINI_MYSQL_PORT"=>"",
		"INFINI_MYSQL_USER"=>"",
		"INFINI_MYSQL_DATABASE"=>"",
		"INFINI_MYSQL_PASSWORD"=>"",
		"INFINI_SALT"=>"",
		"INFINI_EMAIL_DOMAIN"=>"",
		"INFINI_DOMAIN"=>""
	);
	return $config[$param];
}
?>