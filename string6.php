<?php

	echo "<h3>QuoteMeta Method</h3>";

	$string = "20 + [20 - 2 ] = 38
			   20 * (20 + 2 ) = ?
			   20 / 10 = ?
			   20 ^ 10 = ?	
	";

	echo quotemeta(nl2br($string));

	echo "<h3>Rtrim Method</h3>";

	$string2 = "I love Utopian";

	echo rtrim($string2, "Utopian");

	echo "<h3>Sha1_file Method</h3>";

	$Sha1_file = sha1_file("Utopian.txt");

	echo $Sha1_file;

	echo "<br>" . strlen($Sha1_file);

	$Sha1_file2 = sha1_file("Utopian.txt", TRUE);

	echo "<br>" . strlen($Sha1_file2);

	echo "<h3>Sha1 Method</h3>";

	$string3 = "I love Utopian !";

	$Sha1 = sha1($string3, TRUE);

	echo $Sha1;

	echo "<br>" . strlen($Sha1);

?>