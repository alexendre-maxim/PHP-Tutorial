<?php

	echo "<h3>TimeStamp</h3>";

	echo "The current time from january 1, 1970 is " . time() . "<br>";

	echo time() + 60;

	echo "<h3>Date Method</h3>";

	echo date("U");

	echo "<h3>Timezone</h3>";

	echo "The old timezone is " . date_default_timezone_get();

	date_default_timezone_set("Europe/Paris");

	echo " | The new timezone is " . date_default_timezone_get();

	echo "<h3>StrToTime Method</h3>";

	echo date("d-F-y", StrToTime("next month"));


?>