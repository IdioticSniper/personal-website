<?php
/*
$database = [];
$database["ip_addr"]	= "127.0.0.1";
$database["username"]	= "root";
$database["password"]	= "";
$database["name"]		= "website";
// --------------------------------------------------------
try {
	$conn = new PDO("mysql:host=". $database["ip_addr"] . ";dbname=". $database["name"] . "", $database["username"], $database["password"]);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		die("conn failed: " . $e->getMessage());
	}
// --------------------------------------------------------
*/
require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/functions.php');