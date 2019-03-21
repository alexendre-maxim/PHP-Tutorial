<?php

	/***** Get Values ******/

	$email = $_POST['email'];
	$encoded = $_POST['encoded'];
	$quote = $_POST['quote'];
	$float = $_POST['float'];
	$int = $_POST['int'];
	$special_c = $_POST['special_c'];
	$string = $_POST['string'];
	$URL = $_POST['URL'];

	/***** Get Values ******/

	// Email

	$newEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
	
	echo "Your email after sanitization is : <span style='color:red'>" . $newEmail . "</span>";

	// Encoded

	$newEncoded = filter_var($encoded, FILTER_SANITIZE_ENCODED);
	
	echo "<br> Your encoded URL after sanitization is : <span style='color:red'>" . $newEncoded . "</span>";

	// Quote

	$newQuote = filter_var($quote, FILTER_SANITIZE_MAGIC_QUOTES);
	
	echo "<br> Your sentence after sanitization is : <span style='color:red'>" . $newQuote . "</span>";

	// FLOAT

	$newFloat = filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND);
	
	echo "<br> Your decimal number after sanitization is : <span style='color:red'>" . $newFloat . "</span>";

	// INT

	$newInt = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
	
	echo "<br> Your number after sanitization is : <span style='color:red'>" . $newInt . "</span>";

	// Special_C

	$newSpecial_c = filter_var($special_c, FILTER_SANITIZE_SPECIAL_CHARS);
	
	echo "<br> Your special_characters after sanitization is : <span style='color:red'>" . $newSpecial_c . "</span>";
	
	// String

	$newString = filter_var($string, FILTER_SANITIZE_STRING);
	
	echo "<br> Your string after sanitization is : <span style='color:red'>" . $newString . "</span>";

	// URL

	$newURL = filter_var($URL, FILTER_SANITIZE_URL);
	
	echo "<br> Your URL after sanitization is : <span style='color:red'>" . $newURL . "</span>";

?>