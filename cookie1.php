<?php

	// setcookie(name,value,time,path,domain,secure,http only);


	if(isset($_GET['country'])){

		setcookie("Country", $_GET['country'], time() + 3600, "/", "localhost");
		setcookie("Country", $_GET['country'], time() - 3600, "/", "localhost");
		echo "We have saved your country , you can search now with the results of your country";

		echo "<br> <form action='cookie2.php' method='post'> <input type='search' name='search' placeholder='Search ..' ><br> <button type='submit'>Search</button></form>";

	} else {

		include("cookie.php");

	}

?>