<?php
	/*
	echo "<h3>Die Method</h3>";
	function justPrint(){
		echo "Printed from the function 'justPrint()'";
	}
	if(function_exists("justPrfint")) {
	  	justPrint();
	} else {
	  	die("Function <span style='color:red'>Not</span> Found");

	}
	*/
	/*
	echo "<h3>Creating a Custom Error Handler</h3>";
	function divisionByZero($errno, $errstr, $errfile, $errline) {
 		echo "<b style='color:red'>Error: [$errno] </b> $errstr <br> ";
	}
	set_error_handler("divisionByZero");	
	echo(2/0);
	*/
	/*
	echo "<h3>Trigger an Error</h3>";
	function ageError($errno, $errstr, $errfile, $errline, $errcontext) {
	  echo "<b style='color:red'>Error: [$errno] </b> $errstr <br> in : $errfile <br> line : $errline <br> The age : $errcontext[age]";
	  die();
	}
	set_error_handler("ageError",E_USER_WARNING);
	$age=17;
	if ($age<18) {
	  trigger_error("Your age must be greater then 18",E_USER_WARNING);
	}*/

	echo "<h3>Basic Use of Exceptions</h3>";
	echo "<p>3+5 = ?</p>";
	function testRobot($response) {
	  if($response !== 8) {
	    throw new Exception("Your response is incorrect!");
	  }
	}
	testRobot(6);

?>