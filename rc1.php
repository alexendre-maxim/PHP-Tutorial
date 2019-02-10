
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
	<label>Username : </label>
	<input type="text" name="username" value="Alexendre"><br>
	<label>Password : </label>
	<input type="password" name="password" value="Maxim"><br>
	<input type="submit" value="Connect">
</form>

<?php

	$string = $_SERVER['QUERY_STRING'];

	echo $string;
?>

