<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/meta.php');
?>
<html>
<head>
	<title><?= $page_title; ?></title>
	<meta name="title" content="<?= $page_title; ?>">
	<meta name="description" content<?= $page_description; ?>">
	<meta charset="utf-8">
	<style type="text/css">
	body {
		background-image: url('/assets/img/bg.gif');
		font-family: 'Tahoma';
		font-size: 14px;
	}
	
	a { 
		color: #FFFFFF;
	}
	
	div.container {
		padding: 5px;
		width: 800px;
		margin: 0 auto;
		border: 1px solid #000000;
		min-height: 500px;
	}	
	</style>
</head>
<body>

<div style="margin: 0 auto;color: #FFFFFF;background-color: #000000;width: 810px;border: 1px solid #FFFFFF;text-align:center">
	<h1>IdioticSniper's Website</h1>
	<p>[<a href="/">Home</a>] [<a href="http://blog.idsniper.xyz">Blog</a>] [<a href="http://snippr.idsniper.xyz/profile.gne?u=1">Photos</a>]</p>
</div>
<br>
	