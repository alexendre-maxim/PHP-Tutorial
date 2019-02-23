<?php

	// Include and Require

	include("navbar.html");

	require("header.html");

	include("footer.html");

	// Global Variable

	$x = 3;

	$z = 2;

	function addition(){
		return ($GLOBALS['x'] + $GLOBALS['z']);
	}

	echo addition();

	// $_REQUEST

	// $_REQUEST => An associative array , the keys are the names of inputs and the values are the values of these keys..(GET and POST methods)

	if(isset($_REQUEST['username'])&&isset($_REQUEST['password'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
	} else {
		$username = "Not Found";
		$password = "Not Found";
	}

	if($username != "" && $password != ""){
		echo "Welcome <span style='color:red'>" . $username . " </span> Your password is <span style='color:red'>" . $password . "</span>"; 
	} else {
		include("rc1.php");
		echo "<span style='color:red;font-size:40px'>Plz enter your username and password !</span>";
	}

	// SERVER 

	echo $_SERVER['SERVER_ADDR'];

	echo "<br>" . $_SERVER['SERVER_NAME'];

	echo "<br>" . $_SERVER['SERVER_SOFTWARE'];
?>