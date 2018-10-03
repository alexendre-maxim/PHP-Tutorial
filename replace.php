<?php

	echo "<h3>Array_Replace</h3>";

	$team = array(
		"Person1" => "Alexendre",
		"Person2" => "Alex",
		"Person3" => "John",
		"Person4" => "Arden",
		"Person5" => "Mick"
	);

	echo "<pre>";
	print_r($team);

	$replacedTeam = array(
		"Person1" => "Mickel",
		"Person5" => "Gabriel"
	);

	print_r(array_replace($team, $replacedTeam));

	echo "<h3>Array_Values</h3>";

	$languages = array(
		"en" => "English",
		"fr" => "French",
		"sp" => "Spanish"
	);
	print_r($languages);
	print_r(array_values($languages));

	echo "<h3>Array_Slice</h3>";

	$teamS = array(
		"Alexendre",
		"Alex",
		"John",
		"Arden",
		"Mick"
	);

	print_r($teamS);

	print_r(array_slice($teamS, 1, 3));

	echo "<h3>Array_Intersect</h3>";

	$group1 = array(
		"Person1",
		"Person2",
		"Person3",
		"Person4",
		"Person5"
	);

	$group2 = array(
		"Person1",
		"Person3",
		"person6"
		
	);

	print_r(array_intersect($group1, $group2));

?>