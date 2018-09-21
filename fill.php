<?php

	// Array_Fill_Keys
	echo "<h3>Array_Fill_Keys</h3>";
	$keys = array("Alexendre", "John", "Mick");
	$persons = array_fill_keys($keys, "Alex Company");
	echo "<pre>";
	print_r($keys);
	print_r($persons);
	// Array_Fill
	echo "<h3>Array_Fill</h3>";
	$persons1 = array("Person1","Person2","Person3");
	$personsF = array_fill(-5, 3, $persons1);
	print_r($personsF);
	// Array_Flip
	echo "<h3>Array_Flip</h3>";
	$languages = array(
		"en" => "English",
		"fr" => "French",
		"es" => "Spanish",
	);
	print_r($languages);
	$languagesF = array_flip($languages);
	print_r($languagesF);
	// Array_Filter
	echo "<h3>Array_Filter</h3>";
	$review = array(
		"Saturday" => "300$",
		"Sunday" =>	0,
		"Manday" => "500$",
		"Tuesday" => Null,
		"Wednesday" => 0,
		"Thursday" => "900$",
		"Friday" => "300$"
	);

	$finalReveiw = array_filter($review);
	print_r($review);
	print_r($finalReveiw);

?>