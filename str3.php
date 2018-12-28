<?php

	echo "<h3>Implode Method</h3>";

	$array = array("PHP", "is", "the", "best", "!");

	$str = implode(" ", $array);

	echo $str;

	echo "<h3>Join Method</h3>";

	$array2 = array("www", "utopian", "io");

	$str2 = join(".", $array2);

	echo $str2;

	echo "<h3>Lcfirst Method</h3>";

	echo lcfirst($str);

	echo "<h3>Ltrim Method</h3>";

	$str3 = "            How are you";

	echo $str3 . "<br>";

	echo ltrim($str3);

	echo "<h3>Fprintf Method</h3>";

	$num = 22;

	$file = fopen("utopian.txt", "w");

	echo fprintf($file, "%f", $num);

?>