<?php

	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username != '' && $password != ''){
			session_start();
			$_SESSION['username'] = $username;
		}
		header("Location: publish.php");
	} 
?>