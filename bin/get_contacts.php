<?php

	$root = dirname(dirname(__FILE__));
	ini_set("include_path", "{$root}/www:{$root}/www/include");

	#

	include("include/init.php");


	loadlib("flickr_users");
	loadlib("flickr_backups");

	loadlib("flickr_api");
	loadlib("random");

	foreach (flickr_backups_users() as $user){
		$rsp = flickr_backups_get_contacts($user);
	}

	exit();
?>
