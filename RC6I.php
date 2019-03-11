<?php

	/*

	- ob_start()
	- ob_end_clean()
	- ob_end_flush()
	- ob_get_contents()
	- ob_get_clean()

	*/

	ob_start(); // start the session of output_buffer

	echo "This value will be displayed directly on the browser";

	$value = ob_get_clean();

	//ob_end_clean(); // To empty the output buffer and finish the output_buffer session

	//ob_end_flush(); // To empty the output buffer and finish the output_buffer session and it will print the data on the browser.

	echo $value;

?>