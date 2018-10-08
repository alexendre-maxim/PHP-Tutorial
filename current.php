<?php

	// Array_Walk
	echo "<h3>Array_Walk</h3>";
	$review = array(
		20,
		30,
		10,
		14,
		21,
		34
	);

	function multiplication($num){
		echo "The number" . $num . " Multiplied by 2 = " . $num * 2 . "<br>";
	}

	array_walk($review, "multiplication");

	// Current
	echo "<h3>Current/Nex/Prev</h3>";

	$team = array(
		"person1",
		"person2",
		"person3",
		"person4",
		"person5",
		"person6"
	);

	echo current($team) . "<br>";
	echo next($team) . "<br>";
	next($team);
	echo current($team) ."<br>";
	prev($team);
	echo current($team) . "<br>";
	end($team);
	echo current($team) . "<br>";
	echo reset($team);

?>	