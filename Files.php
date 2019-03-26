<?php
	
	/* File Upload */

	echo "<pre>";
	print_r($_FILES["file"]);
	echo "</pre>";
	
	echo $_FILES["file"]["type"];

	/* File Upload */

	/* Fseek */
	
	$fopen = fopen("file.txt", "r+");

	$fseek = fseek($fopen, 3, SEEK_SET);

	$fwrite = fwrite($fopen, "4");

	$fseek = fseek($fopen, 5, SEEK_CUR);

	$fwrite = fwrite($fopen, "5");

	$fseek = fseek($fopen, -1, SEEK_END);

	$fwrite = fwrite($fopen, "-3");

	/* Fseek */


?>