<?php

	echo "<h3>Array_Chunk</h3>";
	// Indexed Array
	$teamI = array(
		"Persone1",
		"Persone2",
		"Persone3",
		"Persone4",
		"Persone5"
	);

	echo "<pre>";
	print_r($teamI);

	$groupI = array_chunk($teamI, 2);

	print_r($groupI);
	// Associative Array

	$teamA = array(
		"Persone1" => "Alexendre",
		"Persone2" => "Alex",
		"Persone3" => "John",
		"Persone4" => "Arden",
		"Persone5" => "Mick",
	);
	print_r($teamA);

	$groupA = array_chunk($teamA, 2, true);
	print_r($groupA);
	echo "<h3>Array_Combine</h3>";
	$languagesKeys = array(
		"en",
		"fr",
		"es"
	);
	$languagesValues = array(
		"English",
		"French",
		"Spanish"
	);

	$languages = array_combine($languagesKeys, $languagesValues);

	print_r($languages);

		echo "<h3>Array_Count_Values</h3>";

		$votes = array(
			"persone1","persone2","persone1","persone3","persone5","persone3","persone2","persone1","persone2","persone2","persone3","persone4","persone5","persone1",
		);

		print_r($votes);

		print_r(array_count_values($votes));

				echo "<h3>Array_Product</h3>";

		$number = array(2,4,3);

		echo("The result is : " . array_product($number));


?>