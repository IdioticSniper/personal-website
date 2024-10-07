<?php

switch($_SERVER['PHP_SELF']) {
	case '/index.php':
		$page_title = 'sniper\'s website - home';
		$page_description = 'a place with stuff and things.';
	break;
	default:
		$page_title = 'sniper\'s website';
		$page_description = 'a place with stuff and things.';
	break;
}