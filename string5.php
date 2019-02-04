<?php

	echo "<h3>number_format method</h3>";

	$number = 250000;

	echo "the number without number_format method is " . $number . "<br>";
	echo "the number with number_format method is " . number_format($number) . "<br>";
	echo "the number with number_format method with 2 parameters is " . number_format($number, 2) . "$<br>";
	echo "the number with number_format method with 4 parameters is " . number_format($number, 2,'-', '/') . "$<br>";

	echo "<h3>ord method</h3>";

	$string = "Utopian";

	echo "The string is " . $string . "<br>";
	echo "The Ascii code of the first letter of this value " . $string . " is " . ord($string) . "<br>";
	echo "The ASCII code of the letter 'U' is " . ord("U") . "<br>";
	echo "The ASCII code of the letter 'u' is " . ord("u");

	echo "<h3>Parse_Str method</h3>";

	$get = "username=Alexendre&password=Maxim";

	parse_str($get, $array);

	echo "<pre>";

	print_r($array);

?>

<form action="" method="get">
	<label>username</label>
	<input type="text" value="Alexendre" name="username"><br>
	<label>password</label>
	<input type="password" value="Maxim" name="password"><br>
	<input type="submit" value="Connect">
</form>	

<?php
	echo "<h3>Print method</h3>";
	print $string;
	echo "<h3>PrintF method</h3>";
	printf("The number is %d", $number);
	printf("<br>The number in binary is %b", $number);
	printf("<br>The number is %f", $number);

?>