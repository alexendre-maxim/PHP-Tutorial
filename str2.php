<?php

	// Bin2Hex 

	echo "<h3>Bin2Hex</h3>";

	$str = "PHP is the best !";
	$b2x = bin2hex($str);

	echo "PHP is the best ! in HEX : " . $b2x;
	echo "<br>";
	
	echo "The number 65 in HEX : " . hex2bin("65");
	echo "<br>";

	echo "The number 65 in ASCII : " . chr("65");

	// Count_Chars

	echo "<h3>Count_Chars</h3>";
	echo "<pre>";
	echo "<h5>count_chars(0)</h5>";
	$cstr0 = count_chars($str,0);
	print_r($cstr0);
	echo "<h5>count_chars(1)</h5>";
	$cstr1 = count_chars($str,1);
	print_r($cstr1);
	echo "<h5>count_chars(2)</h5>";
	$cstr2 = count_chars($str,2);
	print_r($cstr2);
	echo "<h5>count_chars(3)</h5>";
	$cstr3 = count_chars($str,3);
	echo($cstr3) . "<br>";
	echo "<h5>count_chars(4)</h5>";
	$cstr4 = count_chars($str,4);
	echo $cstr4;

	// Explode 

	echo "<h3>Explode</h3>";

	print_r(explode(" ", $str));

	// Hex2Bin 

	echo "<h3>Hex2Bin</h3>";

	echo hex2bin($b2x);

?>