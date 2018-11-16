<?php

	// Addslaches Method

	echo "<h3>Addslaches Method</h3>";

	$sql = "Select * from Students where idStudent = 1 or ' 1 = 1 ' ";

	echo addslashes($sql);

	// Chr Method

	echo "<h3>Chr Method</h3>";

	echo chr("100");

	// Chop Method

	echo "<h3>Chop Method</h3>";

	$string = "I love PHP";

	echo chop($string, "ve PHP");

	// Chunk_Splite Method

	echo "<h3>Chunk_Splite Method</h3>";

	$stars = "********************";

	echo chunk_split($stars, 4 , " | ");

?>