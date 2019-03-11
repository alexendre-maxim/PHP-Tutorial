<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php 
			session_start();
			ob_start();
			$username = $_SESSION['username'];
			echo "The username before edit it is : " . $username;
			$content = ob_get_clean();
		?>
	</body>
</html>

<?php

	if(isset($_POST['username'])){
		$_SESSION['username'] = $_POST['username'];
		echo "The username after edit it is " . $_SESSION['username'];
		echo "<br>" . $content;
	}

?>

