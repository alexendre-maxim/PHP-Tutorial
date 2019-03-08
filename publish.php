<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Publish</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<label>Title</label>
			<input type="text" name="title" autocomplete="off">
			<br>
			<label>Content</label>
			<textarea name="Content" autocomplete="off" ></textarea><br>
			<input type="submit" value="Publish">
		</form>	<br><br>
		<form action="logout.php" method="post">
			<input type="submit" value="logout">
		</form>	
	</body>
</html>

<?php

	if(isset($_POST['title']) && isset($_POST['Content'])){
		$title = $_POST['title'];
		$Content = $_POST['Content'];
		session_start();
		if($title != '' && $Content != ''){
			echo "<div><p>username : ".$_SESSION['username']."</p><h3>Title :".$title."</h3><p>Content :".$Content."</p></div>";
		}
	}

?>
