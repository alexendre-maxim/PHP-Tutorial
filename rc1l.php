<?php

	// $_GET => An associative array , the keys are the names of inputs and the values are the values of these keys..(GET method)
	// $_POST => An associative array , the keys are the names of inputs and the values are the values of these keys..(POST method)

	if(isset($_POST['username'])&&isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	} else {
		$username = "Not Found";
		$password = "Not Found";
	}

	

	if($username != ""&& $password != ""){
		echo "Welcome <span style='color:red'>" . $username . "</span> Your password is <span style='color:red'>" . $password . "<br>";
	} else {
		include("rc1.php");
		echo "<span style='color:red;font-size:40px'> You must enter your username and password</span>";
	}
	

?>