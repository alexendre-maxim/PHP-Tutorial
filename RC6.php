<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label>username : </label>
		<input type="text" name="username" autocomplete='off'><br>
		<input type="submit" value="send">
	</form>
</body>
</html>
<?php

	if(isset($_POST['username'])){
		session_start();
		$_SESSION['username'] = $_POST['username'];
		echo "<h3>Change your username</h3>";
		echo "<form action='RC6O.php' method='post'><label>username : </label><input type='text' name='username' autocomplete='off'><br><input type='submit' value='send'></form>";
	}

?>