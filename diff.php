<?php

	echo "<h3>Array_Diff_Key</h3>";
	$languages = array(
		"en" => "English",
		"fr" => "French",
		"es" => "Spanish"
	);
	$existingLanguages = array(
		"fr" => "French"
	);
	echo "<pre>";
	print_r(array_diff_key($languages, $existingLanguages));

	echo "<h3>Array_Diff</h3>";
	$students = array("Alexendre", "Alex", "Mick", "Arden", "John");
	$studentsSucc = array("Alexendre", "Arden", "John");
	echo "<h5>Students</h5>";
	print_r($students);
	echo "<h5>Succ Students</h5>";
	print_r($studentsSucc);
	echo "<h5>The Rest</h5>";
	print_r(array_diff($students, $studentsSucc));

	echo "<h3>Array_Intersect_Key</h3>";
	print_r(array_intersect_key($languages, $existingLanguages));

	echo "<h3>Array_Change_Key_Case</h3>";
	$flippedArray = array_flip($languages);
	print_r($flippedArray);
	echo "<h5>UPPER</h5>";
	print_r(array_change_key_case($flippedArray, CASE_UPPER));
	echo "<h5>LOWER</h5>";
	print_r(array_change_key_case($flippedArray, CASE_LOWER));
?>
