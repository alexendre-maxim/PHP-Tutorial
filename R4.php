<?php

	$username = "";
	$password = "";
	$string = "";
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$string = "username : " . $username . " password : " . $password . "\n";
		if($username == '' || $password = ''){
			include("R4I.php");
		}
	}

	echo "<h3>Fopen</h3>";
	// Fopen("FileName",Opening Mode);
	$fopen = fopen("R4.txt", "a+");

	echo "<h3>Fwrite</h3>";
	// Fwrite("FileName",String,size);
	$fwrite = fwrite($fopen,$string);
	echo "I have inserted this user";
/*
	echo "<h3>Fread</h3>";
	// Fread("FileName","length");
	$fread = fread($fopen, filesize("R4.txt"));
	echo "" .  $fread;
	*/
	echo "<h3>File_Get_Contents</h3>";
	// file_get_contents("FileName","Include_Path","Context","Offset","maxlen");
	echo "The content of the file ' File__Get_Contents ' is <br>" . file_get_contents("R4.txt");


?>