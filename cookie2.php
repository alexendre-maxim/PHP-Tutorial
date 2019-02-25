<?php

	if(isset($_POST['search'])){

		$cookie = array_values($_COOKIE);

		echo "<a href='#''> " . $_POST['search'] . " in " . $cookie[0] . " </a>";

	}

?>