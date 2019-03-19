<?php

	/***** Get Values ******/

	$email = $_POST['email'];
	$float = $_POST['float'];
	$int = $_POST['int'];
	$ip = $_POST['ip'];
	$regex = $_POST['regex'];
	$url = $_POST['url'];

	/***** Get Values ******/

	// Email

	if(filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE ) {
		echo "Your email is " . $email;
	} else {
		if($email == ""){
			echo "<span style='color:red'>You must enter a value (empty) !</span>";
		} else{
			echo "<span style='color:red'>You have entred a wrong email !</span>";
		}
	}

	// Float

	if(filter_var($float, FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_THOUSAND) !== FALSE ){
		echo "<br>The number that you have entered is " . $float;
	} else {
		if($float == ""){
			echo "<br><span style='color:red'>You must enter a value (empty) !</span>";
		} else{
			echo "<br><span style='color:red'>You have entred a wrong float number !</span>";
		}
	}

	// Int 

	$intArray = array(
		'options' => array(
			"min_range" => 0,
			"max_range" => 150
 		),
		'flags' => FILTER_FLAG_ALLOW_OCTAL | FILTER_FLAG_ALLOW_HEX
		
	);

	if(filter_var($int, FILTER_VALIDATE_INT,$intArray) !== FALSE ) {
		echo "<br>The number that you have entered is " . $int;
	} else {
		if($int == ""){
			echo "<br><span style='color:red'>You must enter a value (empty) !</span>";
		} else{
			echo "<br><span style='color:red'>You have entred a wrong integer number !</span>";
		}	
	}


	// IP

	if(filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) !== FALSE ){
		echo "<br>The IP that you have entered is " . $ip;
	} else {
		if($ip == ""){
			echo "<br><span style='color:red'>You must enter a value (empty) !</span>";
		} else{
		echo "<br><span style='color:red'>You have entred a wrong IP address !</span>";
		}
	}

	// REGEXP

	$regxpArray = array(
		'options' => array(
			"regexp" => "[0-9]"
		)
	);

	if(filter_var($regex, FILTER_VALIDATE_REGEXP, $regxpArray) !== FALSE ){
		echo "<br>The Regular expresion that you have entered is " . $regex;
	} else {
		if($regex == ""){
			echo "<br><span style='color:red'>You must enter a value (empty) !</span>";
		} else{
		echo "<br><span style='color:red'>You have entred a wrong Regular Expresion !</span>";
		}
	}

	// URL

	if(filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) !== FALSE ){
		echo "<br>The URL that you have entered is " . $url;
	} else {
		if($url == ""){
			echo "<br><span style='color:red'>You must enter a value (empty) !</span>";
		} else{
		echo "<br><span style='color:red'>You have entred a wrong URL !</span>";
		}
	}

?>