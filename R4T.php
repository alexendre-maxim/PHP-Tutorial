<?php
	
	$fopen = fopen("test.txt", "x");
	
	//$fread = fread($fopen, filesize("test.txt"));

	//echo $fread;

	$fwrite = fwrite($fopen, " Am Alexendre Thank you");

?>