<?php

	session_start();

	session_unset();

	session_destroy();

	echo "You have disconnected";

	print_r($_SESSION);

?>