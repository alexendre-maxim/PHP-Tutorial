<?php

	// Indexed Array
	echo "<h3>My Friends</h3>";
	$friends = array("Alexendre", "Alex", "Arden", "Mick", 2);
	foreach ($friends as $friend) {
		if($friend == 2) {
			echo $friend;
		} else {
			echo $friend . " is my friend <br>";
		}	
	}
	// Associative Array
	$languages = array(
		"en" => "English", // the key is "en"
		"fr" => "French",	// the key is "fr"
		"es" => "Spanish",	// the key is "es"
		"pt" => "Portuguese",	// the key is "pt"
		"fr2" => "French"
	);
	echo "<h3>Languages</h3>";
	foreach ($languages as $langkey => $langvalue) {
		echo $langkey . " is the key of " . $langvalue . "<br>";
	}

	// Array_Keys
	echo "<h3>Array_Keys</h3>";

	$languagesKeys = array_keys($languages, "French", true);

	echo "<pre>";
	print_r($languagesKeys);
	// Array_Map
	echo "<h3>Array_Map</h3>";
	function testString($s){
		if(gettype($s) === "string"){
			return $s;
		} else {
			return "Unknown";
		}
	}
	$correctFriends = array_map("testString", $friends);
	print_r($correctFriends);
	// Array_Merge
	echo "<h3>Array_Merge</h3>";
	$otherLanguages = array(
		"dt" => "Dutch",
		"fr" => "Germany"
	);

	$allLanguages = array_merge($languages, $otherLanguages);
	print_r($allLanguages);
	// Array_Pad
	echo "<h3>Array_Pad</h3>";
	$products = array("Product1", "Product2", "Product3"); // 3
	$newProducts = array_pad($products, 7, "Empty");

	print_r($newProducts);