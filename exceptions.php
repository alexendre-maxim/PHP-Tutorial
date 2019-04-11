<?php
	/*
	echo "<h3>Try, throw and catch</h3>";
	function checkAge($age) {
	  if($age<18) {
	    throw new Exception("Your age must be greater than 18");
	  }
	  return true;
	}
	try {
	  checkAge(17);
	  echo 'Your age is greater than 18';
	} catch(Exception $e) {
	  echo "From here from the catch I mean , the error is : " . $e->getMessage();
	}*/
	/*
	echo "<h3>Creating a Custom Exception Class</h3>";
	class robotException extends Exception {
	  public function errorM() {
	    $message = 'Error in : <br>- File : '.$this->getFile().' <br>- Line : '.$this->getLine()
    .'<br>- Response entered is: '.$this->getMessage().'</br> <span style="color:red">You must enter a correct number!</span>';
	    return $message;
	  }
	}
	$response = 2;
	try {
	  if($response != 8) {
	    throw new robotException("It's an error");
	  }
	}
	catch (robotException $e) {
	  echo $e->errorM();
	}
	*/
	/*
	echo "<h3>Multiple Exceptions</h3>";
	class validNumber extends Exception {
	  public function errorM() {
	    $message = 'Error in : <br>- File : '.$this->getFile().' <br>- Line : '.$this->getLine()
    .'<br>- Response entered is: '.$this->getMessage().'</br> <span style="color:red">You must enter a number!</span>';
	    return $message;
	  }
	}
	$number = "19s";
	try {
	  //check if
	  if(filter_var($number, FILTER_VALIDATE_INT) === FALSE) {
	    throw new validNumber("Your number is incorrect");
	  }
	  //check for "example" in mail address
	  if($number < 18) {
	    throw new Exception("Your number is less than 18");
	  }
	}catch (validNumber $e) {
	  echo $e->getMessage();
	}catch(Exception $e) {
	  echo $e->getMessage();
	}*/
	echo "<h3>Set a Top Level Exception Handler</h3>";
	function ageException($exception) {
	  echo "<b>Oops !</b> <span style='color:red'>" . $exception->getMessage() . "</span> ". $exception->getLine();
	}
	$age = 15;
	set_exception_handler('ageException');
	if($age<18){
		throw new Exception('error');
	}	
?>