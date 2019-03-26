<?php

	/* Get Values */

	$email = $_POST['email'];
	$age = $_POST['age'];
	$username = $_POST['username'];

	/* Get Values */

	/* Callback Filter */

	$GLOBALS['ageF'] = $age;

	// Function

	function sanitizeNumber(){

		$afterSanitization  = filter_var($GLOBALS['ageF'], FILTER_SANITIZE_NUMBER_INT);

		echo $afterSanitization . "<br>";
	}

	// Function

	$result = filter_var($GLOBALS['ageF'], FILTER_CALLBACK, array("options"=> "sanitizeNumber"));

	echo "Thank's";

	/* Callaback Filter */

	/* Filter_Var_Array */

	$dataOfUser = array
	  (
	  "email" => $email,
	  "age" => $age,
	  "username" => $username,
	  );

	$filters = array
	  (
	  "email" => array
	    (
	    "filter"=>FILTER_SANITIZE_EMAIL,
	    ),
	  "age" => array
	    (
	    "filter"=>FILTER_SANITIZE_NUMBER_INT,
	    "options"=>array
	      (
	      "min_range"=>18,
	      "max_range"=>150
	      )
	    ),
	  "username"=> FILTER_SANITIZE_STRING,
	  );

	  echo "<pre>";
	  print_r(filter_var_array($dataOfUser, $filters));
	  echo "</pre>";

	/* Filter_Var_Array */

	/* Filter_Input */

	if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
    	echo("Your email " . $email . " is <span style='color:red'>not</span> valid.");
	} else {
   		echo("Your email " . $email . " is valid.");
	}

	/* Filter_Input */

	/* Filter_Input_Array */

	$filtersInput = array
		  (
		  "email" => array
		    (
		    "filter"=>FILTER_SANITIZE_EMAIL,
		    ),
		  "age" => array
		    (
		    "filter"=>FILTER_SANITIZE_NUMBER_INT,
		    "options"=>array
		      (
		      "min_range"=>18,
		      "max_range"=>150
		      )
		    ),
		  "username"=> FILTER_SANITIZE_STRING,
		  );

		echo "<pre>";
		print_r(filter_input_array(INPUT_POST, $filtersInput));
		echo "</pre>";

	/* Filter_Input_Array */

?>