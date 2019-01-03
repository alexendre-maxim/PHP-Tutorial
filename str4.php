<?php

	echo "<h3>Md5_File Method</h3>";

	$file = "utopian.txt";

	$string = md5_file($file);

	echo $string . "<br>";

	echo strlen($string);

	echo "<h3>Md5 Method</h3>";
	
	$string2 = "I love Utopian !";

	echo md5($string2);

	echo "<h3>Nl2br Method</h3>";

	$string3 = "
		1- I love PHP!
		2- PHP is the best !
	";

	echo $string3 . "<br>";

	echo nl2br($string3);

	echo "<h3>addcslashes Method</h3>";

	echo addcslashes($string3, "Pi");
?>