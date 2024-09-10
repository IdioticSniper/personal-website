<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/header.php');

if(!isset($_GET['d'])) {
	$files1 = scandir($_SERVER['DOCUMENT_ROOT'] . '/files/photos/');
	echo '<h2>Found the following directories:</h2><ul>';
	foreach($files1 as $file) {
		echo '<li><a href="photos.php?d=' . $file . '">' . $file . '</a></li>';
	}
	echo '</ul>';
}

if(isset($_GET['d'])) {
	$files1 = glob($_SERVER['DOCUMENT_ROOT'] . '/files/photos/' . $_GET['d'] . '/*.{JPG}', GLOB_BRACE);
	echo '<h2>Photos inside "' . $_GET['d'] . '"</h2><ul>';
	foreach($files1 as $file) {
		echo '<a href="/files/photos/' . $_GET['d'] . '/' . basename($file) . '"><img src="/files/thumbnails/' . $_GET['d'] . '/' . basename($file) . '"></a>';
	}
	echo '<p>&lt;&lt; <a href="photos.php">Go back</a></p>';
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/incl/main/footer.php');
?>